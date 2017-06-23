<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //comment->get me the post
    public function post()
    {
      return $this->belongsTo(Post::class);
    }
}
