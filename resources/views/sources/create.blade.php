@section('title', 'Nouvelle source')
@extends('layout')

@section('content')

    <h1>Nouvelle source</h1>

    {{ Form::open(['url' => route('admin.source.store')]) }}

        {{ Form::label('name', 'Nom : ') }}
        {{ Form::text('name') }}
        {{ Form::label('link', 'Lien : ') }}
        {{ Form::text('link') }}
        <input type="submit" value="Ajouter">

    {{ Form::close() }}

@endsection