@extends('guest')
@section('title', 'Connexion')

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('../resources/assets/css/signin.css') }}">
@endsection

@section('content')
    <div class="container">

        <form class="form-signin" method="POST">

            {!! csrf_field() !!}

            <h2 class="form-signin-heading">Connexion</h2>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" autofocus name="email" value="{{ old('email') }}" required>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" name="password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>

            <a href="{{ route('register') }}">Pas encore inscrit ?</a>
        </form>

    </div>
@endsection
