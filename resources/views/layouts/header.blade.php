<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f5eb;
        }
        .navbar {
            background-color: #4a5c74;
        }
        .navbar-brand {
            font-weight: bold;
            color: #f8f9fa;
        }
        .nav-link {
            color: #f8f9fa;
            font-weight: 500;
            transition: all 0.3s;
        }
        .nav-link:hover {
            color: #ffc107;
        }
        .ramadan-logo {
            max-height: 40px;
        }
        .footer {
            background-color: #4a5c74;
            color: #f8f9fa;
            padding: 30px 0;
        }
        .main-content {
            min-height: calc(100vh - 200px);
            padding: 30px 0;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            color: #4a5c74;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #4a5c74;
            border-color: #4a5c74;
        }
        .btn-primary:hover {
            background-color: #3a4a5c;
            border-color: #3a4a5c;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .category-badge {
            background-color: #ffc107;
            color: #212529;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <!-- Header/Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/ramadan-logo.png" alt="Ramadan 2025" class="ramadan-logo">
                Ramadan 2025
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fas fa-home"></i> Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/experiences"><i class="fas fa-book-open"></i> Expériences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recettes"><i class="fas fa-utensils"></i> Recettes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/temoignages"><i class="fas fa-comment-alt"></i> Témoignages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories"><i class="fas fa-tags"></i> Catégories</a>
                    </li>
                </ul>
                <div class="ms-3">
                    <a href="/connexion" class="btn btn-sm btn-outline-light me-2"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                    <a href="/inscription" class="btn btn-sm btn-warning"><i class="fas fa-user-plus"></i> Inscription</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>À propos de Ramadan 2025</h5>
                    <p>Une plateforme communautaire pour partager des expériences, des recettes et des témoignages durant le mois sacré du Ramadan.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="/experiences" class="text-white">Expériences</a></li>
                        <li><a href="/recettes" class="text-white">Recettes</a></li>
                        <li><a href="/temoignages" class="text-white">Témoignages</a></li>
                        <li><a href="/categories" class="text-white">Catégories</a></li>
                        <li><a href="/contact" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Statistiques</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-users"></i> <span id="user-count">1,245</span> utilisateurs</li>
                        <li><i class="fas fa-file-alt"></i> <span id="experience-count">683</span> expériences</li>
                        <li><i class="fas fa-utensils"></i> <span id="recipe-count">429</span> recettes</li>
                        <li><i class="fas fa-comment-alt"></i> <span id="testimonial-count">217</span> témoignages</li>
                    </ul>
                    <div class="newsletter mt-3">
                        <h6>Restez informé</h6>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Votre email">
                            <button class="btn btn-warning" type="button">S'abonner</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 Ramadan Community. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="/conditions" class="text-white me-3">Conditions d'utilisation</a>
                    <a href="/confidentialite" class="text-white">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Pour l'intégration avec Laravel, vous pourriez utiliser Blade pour rendre ces valeurs dynamiques
        document.addEventListener('DOMContentLoaded', function() {
            // Mettre à jour les statistiques en temps réel (simulation)
            setInterval(function() {
                document.getElementById('user-count').textContent = Math.floor(1200 + Math.random() * 100);
                document.getElementById('experience-count').textContent = Math.floor(650 + Math.random() * 50);
                document.getElementById('recipe-count').textContent = Math.floor(400 + Math.random() * 50);
                document.getElementById('testimonial-count').textContent = Math.floor(200 + Math.random() * 30);
            }, 5000);
        });
    </script>
</body>
</html>