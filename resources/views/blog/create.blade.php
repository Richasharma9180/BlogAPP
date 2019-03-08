



<!doctype html>
<html>
   <head>
      <title>Create Form</title>
      <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
   </head>
   <body>
      <h2>Create Blog Form</h2>
      <div class="jumbotron mt-3">
         <small class="form-text text-muted">*Enter details</small>
         <form method="POST" action="/blog">
            {{csrf_field()}}
            <div class="container my-4">
               <div class="form-group row ">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-auto my-1">
                     <input type="text" class="form-control" name="title" placeholder="Enter_Title">
                  </div>
               </div>
               <div class="form-group row ">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-auto my-1">
                     <input type="text" class="form-control" name="description" placeholder="Enter_description">
                  </div>
               </div>
               <button type="submit" class=" btn btn-success">Save</button>
               @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            </div>
         </form>
      </div>
      <link rel="stylesheet" type="text/js" href="{{url('js/bootstrap.min.js')}}"/>
   </body>
</html>