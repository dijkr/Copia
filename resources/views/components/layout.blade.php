<!doctype html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="app.css">
</head>

<body>
@include('components.header')
@yield('content')
@include('components.footer')
</body>

</html>
