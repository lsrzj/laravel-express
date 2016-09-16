<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> @yield('title') </title>
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    </head>
    <body>
        <section id="wrapper">
            <header id="header">
                <div class="top">
                    <nav>
                        <ul class="navigation">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <hgroup>
                    <h2><a href="/">Larablog</a></h2>
                    <h3><a href="/">creating a blog in Laravel 5.1</a></h3>
                </hgroup>
            </header>

            <section class="main-col">
                @yield('body')
            </section>
            <aside class="sidebar">
                @yield('sidebar')
            </aside>

            <div id="footer">
               @yield('footer')
            </div>
        </section>
    </body>
</html>