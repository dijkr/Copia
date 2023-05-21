
<!doctype html>
<html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--    <script src="resouces/js/app.js" defer></script>--}}
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
