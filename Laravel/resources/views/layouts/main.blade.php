<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/CSS/styles.css">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=abeezee:400|abel:400" rel="stylesheet" />

        <script src="/JS/script.js" async defer></script>
    </head>
    <body>
    <body>
    <header>
    <div class="header-menu">
        <ul>
        <div class="header-logo">
            <li>
                <a href="" id="logo">
                    <!-- <img src="</img/logo.png" alt="Invasão"> -->
                </a>    
            </li>
        </div>

        <div class="header-item">
            <li>
                <a href="">
                    ENTRAR
                </a>    
            </li>
        </div>

        <div class="header-item">
            <li>
                <a href="?">
                    CONTATO
                </a>    
            </li>
        </div>

        <div class="header-item">
            <li>
                <a href="#">
                    NOTÍCIAS
                </a>    
            </li>
        </div>

    
        <div class="clear"></div>
    <div>
    </header>

    <div id="flash-news">
        <div id="main text">
            <h3>
            hello
            </h3>
        </div>

    </div>


    @yield('content')


    <div class="footer">
        <footer>
            <p>Pare de perder seu tempo &copy; 2023</p>
        </footer>
    </div>
    </body>
</html>