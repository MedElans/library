@section('title', 'Sources')
@extends('layout')

@section('content')

    <div class="container">

        <div class="row">

            <h1>Sources</h1>

            <div class="col-sm-12">

                <div class="col-sm-6">

                    <h2>Mes sources</h2>

                    <ul>
                       @foreach($sources as $source)
                            <li>
                                <a href="{{ route('admin.source.show', $source) }}">{{ $source->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div class="col-sm-6">

                    <h2>Nouvelle source</h2>

                    {!! BootForm::open(['store' => 'admin.source.store']) !!}

                        {!! BootForm::text('name') !!}

                        {!! BootForm::text('link') !!}

                        {!! BootForm::submit('Ajouter') !!}

                    {{ BootForm::close() }}

                </div>

            </div>
        </div>
    </div>

@endsection