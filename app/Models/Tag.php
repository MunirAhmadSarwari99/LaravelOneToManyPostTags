<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'tagName'];

    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
