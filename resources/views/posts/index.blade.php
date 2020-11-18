@extends('home')

@section('content')
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Specification</th>
                                                <th>Module</th>
                                                <th width="300">Actions</th>
                                            </tr>
                                        </thead>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->aprasymas }}</td>
                                                <td>{{ $post->specifikacija }}</td>
                                                <td>{{ $post->moduliai }}</td>
                                                <td>
                                                <a href="/posts/{{$post->id}}" class="btn btn-info">Show</a>
                                                <a href="/posts/{{$post->id}}/edit" class="btn btn-warning d-inline btn-xs">Edit</a>
                                                <form action="{{action('App\Http\Controllers\PostsController@destroy', $post['id'])}}" method="POST" class="d-inline">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn-danger btn btn-xs">Delete</button>
                                            </form>
                                                    </td>
                                                </tr>      
                                        @endforeach
                                        <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Specification</th>
                                                <th>Module</th>
                                                <th width="300">Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

@endsection