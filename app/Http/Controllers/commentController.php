<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;

class commentController extends Controller
{
//     private $comment;
//     public function __construct(Comment $comment)
//     {
//         $this->comment = $comment;
//     }

//     public function index($id){
//       $comments=$this->comment->orderBy('created_at','Desc')->get();
//       return $comments;
//   }
    public function show($blogId,Request $request)
    {
        
        $comment=new Comment;
        $comment->blog_id=$blogId;
        $comment->name=request('name');
        $comment->comment=request('comment');
        $comment->email=request('email');
        $comment->save();
    
    return back();
  }

      

    }

