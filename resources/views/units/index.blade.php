@section('title', 'Unités')
@extends('layout')

@section('content')

    <div class="container">

        <div class="row">

            <h1>Unités</h1>

            <div class="col-sm-12">

                <div class="col-sm-6">

                    <h2>Mes unités</h2>

                    <ul>
                        @foreach($units as $unit)
                            <li>
                                <a href="{{ route('admin.unit.show', $unit) }}">{{ $unit->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div class="col-sm-6">

                    <h2>Nouvelle unité</h2>

                    {!! BootForm::open(['store' => 'admin.unit.store']) !!}

                        {!! BootForm::text('name') !!}

                        {!! BootForm::submit('Ajouter') !!}

                    {{ BootForm::close() }}

                </div>

            </div>
        </div>
    </div>

@endsection