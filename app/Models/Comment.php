<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['recipe_id', 'experience_id', 'content'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
