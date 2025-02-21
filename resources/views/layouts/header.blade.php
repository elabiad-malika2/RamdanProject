<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col">
    <header class="bg-emerald-800 text-white">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold">Ramadan 2025</a>
                <ul class="flex space-x-6">
                    <li><a href="" class="hover:text-emerald-200">Accueil</a></li>
                    <li><a href="{{ route('experiences.home') }}" class="hover:text-emerald-200">Expériences</a></li>
                    <li><a href="" class="hover:text-emerald-200">Recettes</a></li>
                    <li><a href="{{ route('categories.index') }}" class="hover:text-emerald-200">Catégories</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-emerald-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">À propos</h3>
                    <p class="text-emerald-100">Plateforme de partage communautaire pour le Ramadan 2025</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('experiences.home') }}" class="text-emerald-100 hover:text-white">Expériences</a></li>
                        <li><a href="" class="text-emerald-100 hover:text-white">Recettes</a></li>
                        <li><a href="{{ route('categories.index') }}" class="text-emerald-100 hover:text-white">Catégories</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Statistiques</h3>
                    <ul class="text-emerald-100">
                        <li>Total publications: 150</li>
                        <li>Recettes partagées: 75</li>
                        <li>Membres actifs: 500</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>