@section('title', 'Unités')
@extends('layout')

@section('content')

    <h1>Unités</h1>
    <a href="{{ route('admin.unit.create') }}">Nouveau</a>

    <ul>
        @foreach($units as $unit)
            <li>
                <a href="{{ route('admin.unit.show', $unit) }}">{{ $unit->name }}</a>
            </li>
        @endforeach
    </ul>

@endsection