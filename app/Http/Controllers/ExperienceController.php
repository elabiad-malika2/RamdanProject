<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Comment;


class ExperienceController extends Controller
{
    public function index(){
        // Récupère toutes les expériences avec leurs commentaires associés
        $experiences = Experience::with('comments')->get();
        return view('experiences.home', compact('experiences'));
    }

    // Enregistre une nouvelle expérience
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('experiences', 'public');
        }

        Experience::create([
            'content' => $request->content,
            'image' => $imagePath
        ]);

        return redirect()->route('experiences.home')->with('success', 'Expérience ajoutée avec succès.');
    }

    // Enregistre un commentaire pour une expérience spécifique
    public function storeComment(Request $request, $experience_id)
    {
        $request->validate([
            'content' => 'required|string|max:500'
        ]);

        // Création du commentaire
        Comment::create([
            'experience_id' => $experience_id,
            'content' => $request->content
        ]);

        // Redirige vers la page d'expérience avec un message de succès
        return redirect()->route('experiences.home')->with('success', 'Commentaire ajouté avec succès.');
    }

}
