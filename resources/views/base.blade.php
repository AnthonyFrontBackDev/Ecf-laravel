<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/queries.css')}}">
    <title>ECF-LARAVEL-ALAMPI</title>
</head>
<body>
    
    @include('incs.navbar')

    @yield('content')

    @include('incs.footer')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>