<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="social">
                        <div class="search">
                            <a href="#">Sign in</a> | <a href="#">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">DEMO</a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('post.index') }}">Blog</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
<!--/header-->
