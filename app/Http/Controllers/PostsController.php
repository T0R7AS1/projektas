<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::OrderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'aprasymas' => 'required',
            'specifikacija' => 'required',
            'moduliai' => 'required',
            'extra' => 'required'
        ]);
        
        $posts = Post::create([
            'title' => request('title'),
            'aprasymas' => request('aprasymas'),
            'specifikacija' => request('specifikacija'),
            'moduliai' => request('moduliai'),
            'extra' => request('extra')
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.show')->with('post', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.edit')->with('post', $posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title' => 'required',
            'aprasymas' => 'required',
            'specifikacija' => 'required',
            'moduliai' => 'required',
            'extra' => 'required'
        ]);
        
        $posts = Post::find($id);
        $posts->title = $request->input('title');
        $posts->aprasymas = $request->input('aprasymas');
        $posts->specifikacija = $request->input('specifikacija');
        $posts->moduliai = $request->input('moduliai');
        $posts->extra = $request->input('extra');
        $posts->save();


        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect('/posts');
    }
}
