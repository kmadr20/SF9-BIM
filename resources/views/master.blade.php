<html>
<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <!-- Solar theme
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.solar.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/solar/bootstrap.min.css" rel="stylesheet" integrity="sha384-5R1YdaymXlWnSzNCZhBMJnL6ZRBonq3cnj8A38eihLMaAb66oNJhErrQy9jIGHkl" crossorigin="anonymous"> -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/superhero/bootstrap.min.css" rel="stylesheet" integrity="sha384-fiZOWGBt79dIbkt852eb24nKPxYOvAgtp4v4IUFozlwV/WkvlilK1oTVfPorZdV4" crossorigin="anonymous">
</head>
<body>

    @include('shared.navbar')
    @yield('content')

</body>
</html>