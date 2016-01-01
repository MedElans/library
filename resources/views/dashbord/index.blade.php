@section('title', 'Dashbord')
@extends('layout')

@section('content')

    <h1>Dashbord</h1>
    <a href="{{ route('logout') }}">Se déconnecter</a>

    <ul>
        <li>Tableau de bord</li>
        <li>Catégories</li>
        <li>Sources</li>
        <li>Livres</li>
        <li>Formations</li>
        <li>Articles</li>
        <li>Objectifs</li>
        <li>Statistiques</li>
    </ul>

@endsection