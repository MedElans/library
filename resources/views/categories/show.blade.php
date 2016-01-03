@section('title', 'Catégorie ' . $category->name)
@extends('layout')

@section('content')

    <h1>{{ $category->name }}</h1>

@endsection