<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['content', 'image'];

    

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

}
