@extends('layouts.app')

@section('title', 'Expériences du Ramadan')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center mb-4"><i class="fas fa-book-open me-2"></i>Expériences du Ramadan</h1>
            <p class="text-center text-muted">Partagez et découvrez des récits inspirants sur le mois sacré.</p>
        </div>
    </div>

    <!-- Bannière principale -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card bg-light border-0">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h2 class="mb-3">Partagez votre voyage spirituel</h2>
                            <p class="lead mb-4">Chaque expérience est unique et précieuse. Votre histoire peut inspirer et guider d'autres personnes pendant le Ramadan.</p>
                            <a href="/experiences/nouvelle" class="btn btn-primary btn-lg">
                                <i class="fas fa-plus-circle me-2"></i>Partager mon expérience
                            </a>
                        </div>
                        <div class="col-lg-5 mt-4 mt-lg-0">
                            <img src="/images/ramadan-sharing.jpg" alt="Partage d'expériences" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres par catégorie -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3">Filtrer par catégorie</h5>
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-outline-primary active" data-filter="all">Toutes</button>
                        <button class="btn btn-outline-primary" data-filter="spirituel">Spirituel</button>
                        <button class="btn btn-outline-primary" data-filter="charite">Charité</button>
                        <button class="btn btn-outline-primary" data-filter="communaute">Communauté</button>
                        <button class="btn btn-outline-primary" data-filter="personnel">Personnel</button>
                        <button class="btn btn-outline-primary" data-filter="famille">Famille</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des expériences -->
    <div class="row experiences-list">
        <!-- Expérience 1 -->
        <div class="col-lg-6 mb-4" data-category="spirituel">
            <div class="card h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/experiences/spiritual-growth.jpg" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="Croissance spirituelle">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <span class="category-badge">Spirituel</span>
                            <h5 class="card-title mt-2">Ma transformation spirituelle</h5>
                            <p class="card-text">Comment le Ramadan a changé ma perception de la vie et m'a permis de me recentrer sur l'essentiel...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user-info">
                                    <img src="/images/avatars/user1.jpg" class="rounded-circle me-2" width="30" height="30" alt="Ahmed">
                                    <span>Ahmed</span>
                                </div>
                                <small class="text-muted">Il y a 2 jours</small>
                            </div>
                            <div class="mt-3">
                                <a href="" class="btn btn-sm btn-primary">Lire plus</a>
                                <span class="ms-3"><i class="far fa-comment"></i> 15 commentaires</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expérience 2 -->
        <div class="col-lg-6 mb-4" data-category="charite">
            <div class="card h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/experiences/charity-work.jpg" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="Travail caritatif">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <span class="category-badge">Charité</span>
                            <h5 class="card-title mt-2">Un mois au service des autres</h5>
                            <p class="card-text">J'ai décidé de consacrer ce Ramadan à aider les plus démunis. Voici comment cette expérience m'a transformé...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user-info">
                                    <img src="/images/avatars/user2.jpg" class="rounded-circle me-2" width="30" height="30" alt="Fatima">
                                    <span>Fatima</span>
                                </div>
                                <small class="text-muted">Il y a 5 jours</small>
                            </div>
                            <div class="mt-3">
                                <a href="" class="btn btn-sm btn-primary">Lire plus</a>
                                <span class="ms-3"><i class="far fa-comment"></i> 23 commentaires</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expérience 3 -->
        <div class="col-lg-6 mb-4" data-category="famille">
            <div class="card h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/experiences/family-iftar.jpg" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="Iftar en famille">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <span class="category-badge">Famille</span>
                            <h5 class="card-title mt-2">Renouer avec mes traditions familiales</h5>
                            <p class="card-text">Après des années à l'étranger, j'ai redécouvert la beauté des traditions familiales pendant le Ramadan...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user-info">
                                    <img src="/images/avatars/user3.jpg" class="rounded-circle me-2" width="30" height="30" alt="Karim">
                                    <span>Karim</span>
                                </div>
                                <small class="text-muted">Il y a 1 semaine</small>
                            </div>
                            <div class="mt-3">
                                <a href="" class="btn btn-sm btn-primary">Lire plus</a>
                                <span class="ms-3"><i class="far fa-comment"></i> 9 commentaires</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expérience 4 -->
        <div class="col-lg-6 mb-4" data-category="communaute">
            <div class="card h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/experiences/community-iftar.jpg" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="Iftar communautaire">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <span class="category-badge">Communauté</span>
                            <h5 class="card-title mt-2">Organiser un iftar pour tout le quartier</h5>
                            <p class="card-text">Comment un simple repas partagé a renforcé les liens dans notre communauté multiculturelle...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user-info">
                                    <img src="/images/avatars/user4.jpg" class="rounded-circle me-2" width="30" height="30" alt="Amina">
                                    <span>Amina</span>
                                </div>
                                <small class="text-muted">Il y a 2 semaines</small>
                            </div>
                            <div class="mt-3">
                                <a href="" class="btn btn-sm btn-primary">Lire plus</a>
                                <span class="ms-3"><i class="far fa-comment"></i> 18 commentaires</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expérience 5 -->
        <div class="col-lg-6 mb-4" data-category="personnel">
            <div class="card h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/experiences/personal-growth.jpg" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="Croissance personnelle">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <span class="category-badge">Personnel</span>
                            <h5 class="card-title mt-2">Mon premier jeûne complet</h5>
                            <p class="card-text">À 15 ans, j'ai décidé de jeûner pour la première fois. Voici les défis et les joies que j'ai rencontrés...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user-info">
                                    <img src="/images/avatars/user5.jpg" class="rounded-circle me-2" width="30" height="30" alt="Youssef">
                                    <span>Youssef</span>
                                </div>
                                <small class="text-muted">Il y a 3 semaines</small>
                            </div>
                            <div class="mt-3">
                                <a href="" class="btn btn-sm btn-primary">Lire plus</a>
                                <span class="ms-3"><i class="far fa-comment"></i> 7 commentaires</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expérience 6 -->
        <div class="col-lg-6 mb-4" data-category="spirituel">
            <div class="card h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/experiences/night-prayer.jpg" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="Prière nocturne">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <span class="category-badge">Spirituel</span>
                            <h5 class="card-title mt-2">La paix des prières nocturnes</h5>
                            <p class="card-text">Comment les prières de Tarawih ont transformé mes nuits et approfondi ma connexion spirituelle...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user-info">
                                    <img src="/images/avatars/user6.jpg" class="rounded-circle me-2" width="30" height="30" alt="Noor">
                                    <span>Noor</span>
                                </div>
                                <small class="text-muted">Il y a 3 semaines</small>
                            </div>
                            <div class="mt-3">
                                <a href="" class="btn btn-sm btn-primary">Lire plus</a>
                                <span class="ms-3"><i class="far fa-comment"></i> 12 commentaires</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="row mt-4 mb-5">
        <div class="col-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Suivant</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filtrage des expériences par catégorie
            const filterButtons = document.querySelectorAll('[data-filter]');
            const experienceItems = document.querySelectorAll('.experiences-list > div');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.dataset.filter;
                    
                    // Mettre à jour le bouton actif
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filtrer les expériences
                    if (filter === 'all') {
                        experienceItems.forEach(item => item.style.display = 'block');
                    } else {
                        experienceItems.forEach(item => {
                            if (item.dataset.category === filter) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection