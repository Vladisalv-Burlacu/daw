<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lacorator3.1 @yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
        <div class="container">
        @yield('content')
        </div>
        <script src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.js')}}"></script>
</body>
</html>
