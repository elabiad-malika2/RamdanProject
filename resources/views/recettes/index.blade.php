@extends('layouts.header')
@section('title', 'Recettes')

@section('content')
<div>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-emerald-800">Recettes</h1>
        <div class="flex space-x-4">
            <button id="showForm" class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700">
                Partager une recette
            </button>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Modal -->
    <div id="recipeModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-4 text-emerald-800">Ajouter une recette</h2>
            <form action="{{ route('recettes.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="titre" class="block text-sm font-medium text-gray-700">Titre de la recette</label>
                    <input type="text" id="titre" name="titre" required class="mt-1 p-2 w-full border rounded">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="3" required class="mt-1 p-2 w-full border rounded"></textarea>
                </div>
                <div class="mb-4">
                    <label for="categorie" class="block text-sm font-medium text-gray-700">Catégorie</label>
                    <select id="categorie" name="categorie" required class="mt-1 p-2 w-full border rounded">
                        <option value="">-- Sélectionnez une catégorie --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeForm" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                        Annuler
                    </button>
                    <button type="submit" class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700">
                        Ajouter
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Liste des recettes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($recettes as $recette)
        <article class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-bold text-emerald-800 mb-2">{{ $recette->title }}</h2>
                <p class="text-gray-600 mb-4">{{ $recette->description }}</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Catégorie: {{ $recette->category->name }}</span>
                </div>

                <!-- Affichage des commentaires -->
                <div class="mt-4">
                    <h3 class="text-lg font-bold text-gray-700">Commentaires</h3>
                    @if ($recette->comments->isEmpty())
                        <p class="text-gray-500">Aucun commentaire pour cette recette.</p>
                    @else
                        @foreach ($recette->comments as $comment)
                            <div class="bg-gray-100 p-2 rounded mt-2">
                                <p class="text-gray-800">{{ $comment->content }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- Formulaire d'ajout de commentaire -->
                <form action="{{ route('comments.store', $recette->id) }}" method="POST" class="mt-4">
                    @csrf
                    <div class="flex flex-col">
                        <textarea name="content" rows="2" placeholder="Ajouter un commentaire..." required class="p-2 border rounded"></textarea>
                        <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded mt-2 hover:bg-emerald-700">
                            Commenter
                        </button>
                    </div>
                </form>
            </div>
        </article>
    @endforeach
</div>

</div>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const showFormBtn = document.getElementById("showForm");
        const closeFormBtn = document.getElementById("closeForm");
        const modal = document.getElementById("recipeModal");

        showFormBtn.addEventListener("click", function () {
            modal.classList.remove("hidden");
        });

        closeFormBtn.addEventListener("click", function () {
            modal.classList.add("hidden");
        });

        modal.addEventListener("click", function (e) {
            if (e.target === modal) {
                modal.classList.add("hidden");
            }
        });
    });
</script>
@endsection
