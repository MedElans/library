<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Library - @yield('title')</title>

        <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

        <link rel="stylesheet" href="{{ URL::asset('../resources/assets/css/guest.css') }}">

        @yield('styles')
    </head>
    <body>

        @yield('content')

        <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </body>
</html>
