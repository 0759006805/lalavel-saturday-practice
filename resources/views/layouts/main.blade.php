<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1>@yield('name')</h1>
    <p><a href="{{ route('homepage') }}">Home page</a> </p>
    <p><a href="{{ route('aboutpage') }}">About us</a> </p>
    <p><a href="{{ route('contactpage') }}">Contact us</a> </p>
    <hr>

    @yield('content')
</body>

</html>
