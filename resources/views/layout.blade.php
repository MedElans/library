<!DOCTYPE html>
<html>
    <head>
        <title>Library - @yield('title')</title>
    </head>
    <body>

        <a href="{{ route('logout') }}">Se déconnecter</a>

        <ul>
            <li><a href="{{ route('admin.dashbord') }}">Tableau de bord</a></li>
            <li><a href="{{ route('admin.category.index') }}">Catégories</a></li>
            <li><a href="{{ route('admin.unit.index') }}">Unités</a></li>
            <li><a href="{{ route('admin.source.index') }}">Sources</a></li>
            <li>Livres</li>
            <li>Formations</li>
            <li>Articles</li>
            <li>Objectifs</li>
            <li>Statistiques</li>
        </ul>

        @yield('content')

    </body>
</html>
