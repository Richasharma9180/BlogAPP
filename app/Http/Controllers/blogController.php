<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class blogController extends Controller
{
  // private $blog;
  // public function __construct(Blog $blog)
  // {
  //   $this->blog = $blog;
  // }
  public function index(){
    
   $blogs=Blog::all();
  //   $blogs=$this->blog->orderBy('created_at','Desc')->get();
    return view('blog.index',compact('blogs'));
 }

  public function create(){
    
    $blogs=Blog::all();
      return view('blog.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'description' => 'required',
  ]);
    $blogs=new Blog();
    $blogs->title=request('title');
    $blogs->description=request('description');
    $blogs->save();

    return redirect ('/blog');
  }

  public function show($id){
    
    $blogs=Blog::find($id);
    $comments=Comment::select('name','email','comment')->where('blog_id',$id)->orderBy('created_at','Desc')->get()->toArray();
     return view('blog.blogDetails',compact('blogs','comments'));
 }
}
