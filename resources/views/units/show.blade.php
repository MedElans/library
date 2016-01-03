@section('title', 'Unité ' . $unit->name)
@extends('layout')

@section('content')

    {{ Form::open(['method' => 'put', 'url' => route('admin.unit.update', $unit)]) }}

        {{ Form::label('name', 'Nom : ') }}
        {{ Form::text('name', $unit->name) }}
        <input type="submit" value="Modifier">

    {{ Form::close() }}

    {{ Form::open(['method' => 'delete', 'url' => route('admin.unit.destroy', $unit)]) }}

        <input type="submit" value="Supprimer">

    {{ Form::close() }}

@endsection