<!doctype html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
          integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="app.css">
</head>

<body>
<header>
    <div class="navbar">
        <ul class="links">
            <li><a href="/">Home</a></li>
            <li><a href="/producten">Producten</a></li>
            <li><a href="/aanbiedingen">Aanbiedingen</a></li>
            <li><a href="/winkelwagen">Winkelwagen</a></li>
            <li><a href="/bestellen">Bestellen</a></li>
        </ul>
        <div class="search"><input type="text" placeholder="Zoeken.."></div>
        <div class="account"><a href="#">Account</a></div>
    </div>

{{--    <div class="dropdown">--}}
{{--        <div class="logo"><a href="#">Copia</a></div>--}}
{{--        <ul class="links">--}}
{{--            <li><a href="/">Home</a></li>--}}
{{--            <li><a href="/producten">Producten</a></li>--}}
{{--            <li><a href="/aanbiedingen">Aanbiedingen</a></li>--}}
{{--            <li><a href="winkelwagen">Winkelwagen</a></li>--}}
{{--            <li><a href="bestellen">Bestellen</a></li>--}}
{{--        </ul>--}}
{{--        <div class="account"><a href="dashboard">Account</a></div>--}}
{{--    </div>--}}
</header>

</body>
@yield('content')

</body>
</html>
