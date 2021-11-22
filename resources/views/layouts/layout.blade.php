<html>


<head>

    <title>Cool Tech</title>
    <link rel="stylesheet" href="/css/shared.css">



</head>

<body>
    @include('cookieConsent::index')
    <!--Include the cookie consent from https://github.com/spatie/laravel-cookie-consent-->




    <!--Nav Bar-->

    <header id="header">
        <nav class="links" style="--items: 4;">
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/catList')}}">Categories</a>
            <a href="{{url('/about')}}">About Us</a>
            <a href="{{url('/search')}}">Search</a>
            <span class="line"></span>
        </nav>
    </header>

    @yield('content')


</body>

<footer>


    <h7>See our <a href="{{url('/legal/tos')}}">Terms of use</a> and <a href="{{url('/legal/privacy')}}">Privacy Policy</a></h7><br>
    <h7><a href="{{url('/search')}}">Search the website</a><br>
    <h7><a href="{{url('/login')}}">Admin or writer?</a></h7><br>
    <h7>Copyright &copy; 2021 Cool Tech Pty (LTD)</h7>

</footer>

</html>
