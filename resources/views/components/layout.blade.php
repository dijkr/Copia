
<!doctype html>
<html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Commodum Copia</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>


<body>
@include('components.header')

<!-- ===============================================================================
                MAIN CONTENT
=============================================================================== -->
@yield('content')
@include('components.footer')
</body>

</html>
