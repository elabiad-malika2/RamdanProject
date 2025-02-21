<!-- resources/views/home.blade.php -->
@extends('layouts.header')

@section('title', 'Accueil')

@section('content')
<section class="text-center mb-12">
    <h1 class="text-4xl font-bold text-emerald-800 mb-4">Bienvenue sur notre plateforme Ramadan 2025</h1>
    <p class="text-xl text-gray-600">Partagez vos expériences et découvrez des recettes inspirantes</p>
</section>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-emerald-800 mb-4">Dernières Expériences</h2>
        <div class="space-y-4">
            <div class="border-b pb-4">
                <h3 class="font-semibold text-lg">Mon premier jour de jeûne</h3>
                <p class="text-gray-600 mb-2">Une expérience enrichissante qui m'a permis de me recentrer sur l'essentiel...</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Par Ahmed</span>
                    <a href="#" class="text-emerald-600 hover:text-emerald-800">Lire plus</a>
                </div>
            </div>
            <div class="border-b pb-4">
                <h3 class="font-semibold text-lg">La prière de Tarawih</h3>
                <p class="text-gray-600 mb-2">Mes moments de recueillement pendant les prières nocturnes...</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Par Fatima</span>
                    <a href="#" class="text-emerald-600 hover:text-emerald-800">Lire plus</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-emerald-800 mb-4">Recettes Populaires</h2>
        <div class="space-y-4">
            <div class="border-b pb-4">
                <h3 class="font-semibold text-lg">Harira traditionnelle</h3>
                <p class="text-gray-600 mb-2">Une soupe nourrissante parfaite pour la rupture du jeûne...</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Par Karim</span>
                    <a href="#" class="text-emerald-600 hover:text-emerald-800">Voir la recette</a>
                </div>
            </div>
            <div class="border-b pb-4">
                <h3 class="font-semibold text-lg">Dates farcies au fromage</h3>
                <p class="text-gray-600 mb-2">Une entrée rapide et délicieuse pour l'iftar...</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Par Sarah</span>
                    <a href="#" class="text-emerald-600 hover:text-emerald-800">Voir la recette</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection