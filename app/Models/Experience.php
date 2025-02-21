<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['content', 'image'];

    

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
