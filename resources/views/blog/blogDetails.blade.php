<!doctype html>
<html>
    <head>  
        <title>Details Page</title>
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
    </head>
    <body>
    <h2>Blog Details Page</h2>
    <h1>{{$blogs->title}}</h1>
     <p>{{$blogs->description}}</p>

 <div class="jumbotron mt-3">
<small class="form-text text-muted">*Enter details to add comments</small>


<form method="POST" action="/blog/{{$blogs->id}}/comments">
@csrf
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Name">
</div>

<div class="form-group">
<label for="exampleFormControlTextarea1">Comment</label>
<textarea class="form-control" placeholder="Enter Comment" name="comment" rows="3"></textarea>
</div>

<div class="form-group">
<label for="exampleInputPassword1">Email</label>
<input type="text" class="form-control" name="email" placeholder="Enter Email">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<button type="reset" class="btn btn-danger">Clear</button>
</form>
</div> 

     <div>
    <h1>User comments </h1>
         @foreach($comments as $comment)
        <p> {{$comment['name']}}</p> 
        <p> {{$comment['comment']}}</p>
        <p> {{$comment['email']}}</p> 
         @endforeach
        
     </div>    
              </div>
   
<link rel="stylesheet" type="text/js" href="{{url('js/bootstrap.min.js')}}"/>
    </body>
</html>
