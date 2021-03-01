<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>購物網站 | @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    </head>
    <body>
        <div class="wrapper">
            @section('header')
            <div class="navbar-wrapper">
                <div class="navbar">
                    <div class="navbar__links">
                            <a href="#" class="navbar__link">註冊</a>
                            <a href="#" class="navbar__link">登入</a>
                    </div>     
                </div>
            </div>
            <header class="header-with-search-wrapper">
                <div class="header-with-search">
                    <a href="{{ url('/') }}"><div class="logo">購物網站</div></a>
                    <div class="search"></div>
                </div>
            </header>
            @show

            <div class="container">
                @yield('content')
            </div>
            @section('footer')
            <footer class="footer">
            @ <?php echo date("Y"); ?> 購物網站.版權所有。
            </footer>
            @show
            <script src="{{ asset('js/app.js') }}"></script>
        </div>
    </body>
</html>