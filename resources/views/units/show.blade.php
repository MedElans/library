@section('title', 'Unité ' . $unit->name)
@extends('layout')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h1>Modifier unité</h1>

                {!! BootForm::open(['model' => $unit  ,'update' => 'admin.unit.update']) !!}

                    {!! BootForm::text('name') !!}

                    {!! BootForm::submit('Modifier') !!}

                {{ BootForm::close() }}


                {{ BootForm::open(['method' => 'delete', 'url' => route('admin.unit.destroy', $unit)]) }}

                    {!! BootForm::submit('Supprimer', ['class' => 'btn btn-danger']) !!}

                {{ BootForm::close() }}

            </div>

        </div>
    </div>

@endsection