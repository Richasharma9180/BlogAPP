<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';
    public function blog()
    {
    return $this->belongsTo(Blog::class);

    }
    protected $fillable = ['name','blog_id', 'comment', 'email',]; 
    
   
 
    
    
}
