@section('title', 'Nouveau livre')
@extends('layout')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-12">
                <h1>Nouveau livre</h1>

                {!! BootForm::open(['store' => 'admin.books.store', 'enctype' => 'multipart/form-data', 'url' => route('admin.books.store')]) !!}

                    <div class="col-sm-6">
                        {!! BootForm::text('name') !!}

                        {!! BootForm::textarea('description') !!}

                        {!! BootForm::select('categoryId', 'Catégorie', $categories, null, ['placeholder' => 'Catégorie'] ) !!}
                    </div>

                    <div class="col-sm-6">
                        {!! BootForm::select('unitId', 'Unité', $units, null, ['placeholder' => 'Unité'] ) !!}

                        <div class="col-sm-6">
                            {!! BootForm::radio('counter', 'Compteur automatique', 0, 1 ) !!}
                        </div>

                        <div class="col-sm-6">
                            {!! BootForm::radio('counter', 'Compteur manuelle', 1 ) !!}

                            {!! BootForm::text('total') !!}
                        </div>

                        {!! BootForm::file('image', 'Image' ) !!}

                        {!! BootForm::select('sourceId', 'Source', $sources, null, ['placeholder' => 'Source'] ) !!}

                        {!! BootForm::submit('Ajouter') !!}
                    </div>

                {{ BootForm::close() }}

            </div>

        </div>
    </div>


@endsection