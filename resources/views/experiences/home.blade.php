<!-- resources/views/experiences.blade.php -->
@extends('layouts.header')

@section('title', 'Expériences')

@section('content')
<h1 class="text-3xl font-bold text-emerald-800 mb-8">Expériences partagées</h1>

<div class="space-y-8">
    <article class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-emerald-800 mb-4">La spiritualité pendant le Ramadan</h2>
        <div class="mb-4">
            <img src="/api/placeholder/800/400" alt="Image spiritualité" class="w-full rounded-lg mb-4">
            <p class="text-gray-700">Mon expérience spirituelle pendant ce mois béni a été transformatrice. Les moments de prière et de méditation m'ont permis de me reconnecter avec ma foi et de renforcer mes liens avec la communauté.</p>
        </div>
        
        <div class="mt-6 border-t pt-4">
            <h3 class="text-xl font-semibold mb-4">Commentaires</h3>
            <div class="space-y-4">
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-gray-700">Très inspirant, merci du partage !</p>
                    <p class="text-sm text-gray-500 mt-2">Par Mohammed - 15 mars 2025</p>
                </div>
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-gray-700">J'ai vécu la même chose, c'est vraiment enrichissant.</p>
                    <p class="text-sm text-gray-500 mt-2">Par Amina - 14 mars 2025</p>
                </div>
            </div>
        </div>
    </article>

    <article class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-emerald-800 mb-4">Mon premier Suhoor</h2>
        <div class="mb-4">
            <img src="/api/placeholder/800/400" alt="Image suhoor" class="w-full rounded-lg mb-4">
            <p class="text-gray-700">Se réveiller pour le Suhoor était un défi au début, mais cela est devenu un moment précieux de préparation spirituelle et physique pour la journée de jeûne.</p>
        </div>
        
        <div class="mt-6 border-t pt-4">
            <h3 class="text-xl font-semibold mb-4">Commentaires</h3>
            <div class="space-y-4">
                <div class="bg-gray-50 p-4 rounded">
                    <p class="text-gray-700">Merci pour ces conseils pratiques !</p>
                    <p class="text-sm text-gray-500 mt-2">Par Youssef - 13 mars 2025</p>
                </div>
            </div>
        </div>
    </article>
</div>
@endsection