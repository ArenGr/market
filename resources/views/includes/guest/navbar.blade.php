<nav class="navbar navbar-expand-sm fixed-top py-0 mr-1 ml-1" style="background-color:#3D424D">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/logo.png')}}" alt="" width="20%"/>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item mr-5">
                    <div style="font-size: 30px; color: Salmon; cursor:pointer">
                        <i class="fa fa-shopping-cart fa-lg" style="position:relative"></i>
                        <span class="badge badge-pill badge-success notification" style="font-size:10px; margin-bottom:10px; position:absolute">7</span>
                    </div>
                    <li>
                        <div class="mr-5">
                            <li class="nav-item">
                                <a class="nav-link btn btn-success" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item ml-2">
                                <a class="nav-link btn btn-success" href="{{ route('register') }}">Register</a>
                            </li>
                        </div>
                    </li>
                </li>
            </ul>
        </div>
    </div>
</nav>

