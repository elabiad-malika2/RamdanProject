<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Comment;

class RecipeController extends Controller
{
    public function index()
    {
        $recettes = Recipe::with(['category', 'comments'])->get();
        $categories = Category::all();
        return view('recettes.index', compact('recettes', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'categorie' => 'required|exists:categories,id',
        ]);

        Recipe::create([
            'title' => $request->titre,
            'description' => $request->description,
            'category_id' => $request->categorie,
        ]);

        return redirect()->route('recettes.index')->with('success', 'Recette ajoutée avec succès.');
    }
}
