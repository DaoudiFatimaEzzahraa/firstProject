<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</head>
<body>
    <header class="site-header">
        <div class="container header-content">
            <a class="brand" href="index.html">Clair</a>
            <nav aria-label="Navigation principale"><a href="index.html">Les tâches</a><a href="a-propos.html">À propos</a></nav>
        </div>
    </header>
    <main class="container"><p class="eyebrow">Mon espace de travail</p>
@yield('main')
    </main>
    <footer class="site-footer"><div class="container">© <span data-year></span> Clair — Votre espace de travail</div></footer>
</body>
</html>
