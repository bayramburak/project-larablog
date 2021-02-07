<header>
    <!-- navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand" href="{{route('homepage')}}"><img class="img-responsive" src="img/logo.png"
                                                                          alt="Logo"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">


                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('events')}}">Events</a></li>
                    <li><a href="{{route('team')}}">Team</a></li>
                    <li><a href="{{route('subscribe')}}">Subscribe</a></li>

                    @guest
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endguest

                    @auth
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    @endauth

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
