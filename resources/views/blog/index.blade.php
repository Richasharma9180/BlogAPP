<!doctype html>
<html>
   <head>
      <title>Welcome To Blog Page</title>
      <small class="form-text text-muted">*Put your valuable comments</small>
      <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
   </head>
   <body>
      <h2>Welcome To Blog Page</h2>
      <a href="/blog/create">New</a>
      <div class="row mt-3"style="background:#736866">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               @foreach($blogs as $blog)
               <h2>Title</h2>
               <h5 class="card-title"> <a href="/blog/{{$blog->id}}/blogDetails">{{$blog->title}}</a>
               </h5>
               <h2>Description</h2>
               <p class="card-text">
               {{(substr($blog->description,0,2))}}
                  @endforeach
               </p>
            </div>
         </div>
      </div>
   </body>
</html>
