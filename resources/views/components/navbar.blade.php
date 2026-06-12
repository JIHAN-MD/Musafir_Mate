<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/logo/logo_tt 2x.png') }}" alt="taqwa" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('destinations.index') }}" class="nav-link">Destinations</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('hotels.index') }}" class="nav-link">Hotels</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('restaurant.index') }}" class="nav-link">Restaurants</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('travel_packages.index') }}" class="nav-link">Travel Package</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('prayer-space') }}" class="nav-link">Prayer Space</a>
                </li>
            </ul>

            @guest
                <!-- Mobile login button -->
                <form action="" class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
                        onclick="event.preventDefault(); location.href='{{ route('login') }}';">
                        Login
                    </button>
                </form>

                <!-- Desktop login button -->
                <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                        onclick="event.preventDefault(); location.href='{{ route('login') }}';">
                        Login
                    </button>
                </form>
            @endguest

            @auth
                <!-- Mobile logout button -->
                <form class="form-inline d-sm-block d-md-none"
                    action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">
                        Logout
                    </button>
                </form>

                <!-- Desktop logout button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block"
                    action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </nav>
</div>
