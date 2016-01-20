@section('title', 'Catégorie ' . $category->name)
@extends('layout')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h1>Modifier catégorie</h1>

                {!! BootForm::open(['model' => $category  ,'update' => 'admin.category.update']) !!}

                    {!! BootForm::text('name') !!}

                    {!! BootForm::select('parentId', null, $categories, $category->parent_id ,['placeholder' => 'Catégorie Parente'] ) !!}

                    {!! BootForm::submit('Modifier') !!}

                {{ BootForm::close() }}



                {{ BootForm::open(['method' => 'delete', 'url' => route('admin.category.destroy', $category)]) }}

                    {!! BootForm::submit('Supprimer', ['class' => 'btn btn-danger']) !!}

                {{ BootForm::close() }}

            </div>

        </div>
    </div>





@endsection