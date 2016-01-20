@section('title', 'Source ' . $source->name)
@extends('layout')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h1>Modifier source</h1>

                {!! BootForm::open(['model' => $source  ,'update' => 'admin.source.update']) !!}

                    {!! BootForm::text('name') !!}

                    {!! BootForm::text('link') !!}

                    {!! BootForm::submit('Modifier') !!}

                {{ BootForm::close() }}


                {{ BootForm::open(['method' => 'delete', 'url' => route('admin.source.destroy', $source)]) }}

                    {!! BootForm::submit('Supprimer', ['class' => 'btn btn-danger']) !!}

                {{ BootForm::close() }}

            </div>

        </div>
    </div>

@endsection