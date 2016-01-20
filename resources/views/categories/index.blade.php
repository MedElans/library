@section('title', 'Catégories')
@extends('layout')

@section('content')

     <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h1>Catégories</h1>

                <div class="col-sm-6">
                    <h2>Mes catégories</h2>

                    {!! Tree::make($categories) !!}
                </div>
                <div class="col-sm-6">
                    <h2>Nouvelle catégorie</h2>

                    {!! BootForm::open(['store' => 'admin.category.store']) !!}

                        {!! BootForm::text('name') !!}

                        {!! BootForm::select('parentId', null, $categoriesForForm, null, ['placeholder' => 'Catégorie Parente'] ) !!}

                        {!! BootForm::submit('Ajouter') !!}

                    {{ BootForm::close() }}

                </div>

            </div>
        </div>
    </div>

@endsection