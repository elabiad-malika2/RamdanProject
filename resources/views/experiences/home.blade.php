@extends('layouts.header')

@section('title', 'Expériences')

@section('content')
<h1 class="text-3xl font-bold text-emerald-800 mb-8">Expériences partagées</h1>

<!-- Formulaire pour ajouter une expérience -->
<div class="bg-white p-6 rounded-lg shadow-md mb-6">
    <h2 class="text-2xl font-bold text-emerald-800 mb-4">Partager une Expérience</h2>
    <form action="{{ route('experiences.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-semibold">Description</label>
            <textarea id="content" name="content" class="w-full p-2 border rounded-lg focus:ring focus:ring-emerald-200" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-semibold">Image (facultatif)</label>
            <input type="file" id="image" name="image" class="w-full p-2 border rounded-lg">
        </div>
        <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Ajouter</button>
    </form>
</div>

<!-- Liste des expériences -->
<div class="space-y-8">
    @foreach($experiences as $experience)
    <article class="bg-white rounded-lg shadow-lg p-6">
        <!-- Affichage de l'image de l'expérience -->
        @if($experience->image)
            <img src="{{ asset('storage/' . $experience->image) }}" alt="Image de l'expérience" class="w-full rounded-lg mb-4">
        @endif
        <h2 class="text-2xl font-bold text-emerald-800 mb-4">{{ $experience->content }}</h2>

        <!-- Formulaire pour ajouter un commentaire à cette expérience -->
        <form action="{{ route('experiences.storeComment', $experience->id) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold">Ajouter un Commentaire</label>
                <textarea id="content" name="content" class="w-full p-2 border rounded-lg focus:ring focus:ring-emerald-200" rows="3" required></textarea>
            </div>
            <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Ajouter le commentaire</button>
        </form>

        <!-- Affichage des commentaires associés à cette expérience -->
        <div class="mt-6">
            <h3 class="text-xl font-bold text-emerald-800 mb-4">Commentaires</h3>
            @foreach($experience->comments as $comment)
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <p class="text-gray-700">{{ $comment->content }}</p>
                </div>
            @endforeach
        </div>
    </article>
    @endforeach
</div>
@endsection
