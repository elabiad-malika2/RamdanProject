@extends('layouts.header')

@section('title', 'Catégories')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center mb-4"><i class="fas fa-tags me-2"></i>Catégories</h1>
            <p class="text-center text-muted">Découvrez notre contenu organisé par catégories.</p>
        </div>
    </div>

    <!-- Filtres -->
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Filtrer par type</h5>
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-outline-primary active" data-filter="all">Tous</button>
                        <button class="btn btn-outline-primary" data-filter="experience">Expériences</button>
                        <button class="btn btn-outline-primary" data-filter="recette">Recettes</button>
                        <button class="btn btn-outline-primary" data-filter="temoignage">Témoignages</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <!-- Catégories de recettes -->
    <div class="row mb-5 category-group" data-category="recette">
        <div class="col-12">
            <h2 class="mb-4"><i class="fas fa-utensils me-2"></i>Catégories de recettes</h2>
        </div>
        @foreach ($categories as $category)
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="/images/categories/entrees.jpg" class="card-img-top" alt="Entrées">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text">Délicieuses entrées pour bien commencer votre iftar.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-success">56 recettes</span>
                            <a href="/categories/recettes/entrees" class="btn btn-sm btn-primary">Explorer</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

       
    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('[data-filter]');
            const categoryGroups = document.querySelectorAll('.category-group');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.dataset.filter;
                    
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Show/hide category groups
                    if (filter === 'all') {
                        categoryGroups.forEach(group => group.style.display = 'flex');
                    } else {
                        categoryGroups.forEach(group => {
                            if (group.dataset.category === filter) {
                                group.style.display = 'flex';
                            } else {
                                group.style.display = 'none';
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection