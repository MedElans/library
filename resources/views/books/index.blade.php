@section('title', 'Livres')
@extends('layout')

@section('content')

    <div class="container marketing">

        <div class="row">

            <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Nouveau</a>

            <div class="col-sm-12">
                <h1>Livres</h1>
            </div>

        </div>
    </div>


@endsection