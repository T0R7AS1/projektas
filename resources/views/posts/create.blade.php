@extends('home')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="  border-5 rounded-lg mt-5 ">
          <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Form</h3></div>
              <form action="/posts" method="POST">
                  {{ csrf_field() }}
                <div class="form-group">
                  <label class=" mb-1" for="inputProjectname">Project Name</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter fullname" name="title">
                </div>
                <div class="form-group"> 
                  <label class=" mb-1" for="inputProjectname">Description</label>
                  <input type="text" class="form-control" id="aprasymas" placeholder="Tell us more about this poll" name="aprasymas">
                </div>
                <div class="form-group"> 
                  <label class=" mb-1" for="inputProjectname">Specification</label>
                  <input type="text" class="form-control" id="specifikacija" placeholder="Tell us more about this poll" name="specifikacija">
                </div>
                <div class="form-group"> 
                  <label class=" mb-1" for="inputProjectname">Moduels</label>
                  <input type="text" class="form-control" id="moduliai" placeholder="Tell us more about this poll" name="moduliai">
                </div>
                <div class="form-group"> 
                  <label class=" mb-1" for="inputProjectname">More info</label>
                  <input type="text" class="form-control" id="extra" placeholder="Tell us more about this poll" name="extra">
                </div>
                <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" href="tables.html">Create form</button>
              </form>
          </div>
        </div>
      </div>  
    </div>
  </div>
@endsection