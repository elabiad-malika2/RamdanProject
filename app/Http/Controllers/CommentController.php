<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Category;

class CommentController extends Controller
{
    public function store(Request $request, $recipe_id)
    {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        Comment::create([
            'recipe_id' => $recipe_id,
            'content' => $request->content,
        ]);

        return redirect()->route('recettes.index')->with('success', 'Commentaire ajouté avec succès.');
    }
}
