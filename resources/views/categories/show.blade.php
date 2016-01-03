@section('title', 'Catégorie ' . $category->name)
@extends('layout')

@section('content')

    {{ Form::open(['method' => 'put', 'url' => route('admin.category.update', $category)]) }}

        {{ Form::label('name', 'Nom : ') }}
        {{ Form::text('name', $category->name ) }}
        {{ Form::label('parentId', 'Catégorie parente : ') }}
        {{ Form::select('parentId', $categories, null, ['placeholder' => 'Catégorie Parente'] ) }}
        <input type="submit" value="Modifier">

    {{ Form::close() }}

    {{ Form::open(['method' => 'delete', 'url' => route('admin.category.destroy', $category)]) }}

        <input type="submit" value="Supprimer">

    {{ Form::close() }}

@endsection