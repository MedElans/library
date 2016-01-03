@section('title', 'Source ' . $source->name)
@extends('layout')

@section('content')

    {{ Form::open(['method' => 'put', 'url' => route('admin.source.update', $source)]) }}

        {{ Form::label('name', 'Nom : ') }}
        {{ Form::text('name', $source->name ) }}
        {{ Form::label('link', 'Lien : ') }}
        {{ Form::text('link', $source->link ) }}
        <input type="submit" value="Modifier">

    {{ Form::close() }}

    {{ Form::open(['method' => 'delete', 'url' => route('admin.source.destroy', $source)]) }}

        <input type="submit" value="Supprimer">

    {{ Form::close() }}

@endsection