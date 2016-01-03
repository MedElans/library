@section('title', 'Nouvelle catégorie')
@extends('layout')

@section('content')

    <h1>Nouvelle catégorie</h1>

    {{ Form::open(['url' => route('admin.category.store')]) }}

        {{ Form::label('name', 'Nom : ') }}
        {{ Form::text('name') }}
        {{ Form::label('parentId', 'Catégorie parente : ') }}
        {{ Form::select('parentId', $categories, null, ['placeholder' => 'Catégorie Parente'] ) }}
        <input type="submit" value="Ajouter">

    {{ Form::close() }}

@endsection