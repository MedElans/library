@section('title', 'Nouvelle unité')
@extends('layout')

@section('content')

    <h1>Nouvelle unité</h1>

    {{ Form::open(['url' => route('admin.unit.store')]) }}

        {{ Form::label('name', 'Nom : ') }}
        {{ Form::text('name') }}
        <input type="submit" value="Ajouter">

    {{ Form::close() }}

@endsection