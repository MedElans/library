@section('title', 'Sources')
@extends('layout')

@section('content')

    <h1>Sources</h1>
    <a href="{{ route('admin.source.create') }}">Nouveau</a>

     <ul>
        @foreach($sources as $source)
            <li>
                <a href="{{ route('admin.source.show', $source) }}">{{ $source->name }}</a>
            </li>
        @endforeach
    </ul>

@endsection