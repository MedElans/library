@section('title', 'Catégories')
@extends('layout')

@section('content')

    <h1>Catégories</h1>
    <a href="{{ route('admin.category.create') }}">Nouveau</a>

    {!! Tree::make($categories) !!}

@endsection