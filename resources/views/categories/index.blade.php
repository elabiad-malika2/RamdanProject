<!-- resources/views/categories.blade.php (suite) -->
@extends('layouts.header')
@section('title', 'Catégories')

@section('content')
    <h1 class="text-3xl font-bold text-emerald-800 mb-8">
        Catégories de Recettes
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($categories as $category)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="/api/placeholder/400/300" alt="{{ $category->name }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-emerald-800 mb-2">{{ $category->name }}</h2>
                        <p class="text-gray-600 mb-4">Découvrez nos entrées traditionnelles pour un iftar équilibré</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">15 recettes</span>
                            <a href="" class="text-emerald-600 hover:text-emerald-800">Voir les recettes</a>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
@endsection