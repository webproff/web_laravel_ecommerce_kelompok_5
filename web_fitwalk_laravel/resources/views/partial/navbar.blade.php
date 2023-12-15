<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">FitWalk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {{-- <li class="nav-item">
            <a class="nav-link active" {{ ($title === 'Home') ? 'active' : '' }} href="/">Home</a>
            </li> --}}
            <li class="nav-item">
            <a class="nav-link" {{ ($title === 'categories') ? 'active' : '' }} href="categories">Categories</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" {{ ($title === 'wishlist') ? 'active' : '' }} href="wishlist">Wishlist</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" {{ ($title === 'cart') ? 'active' : '' }} href="cart">Cart</a>
            </li>
            
            
            <ul class="navbar-nav ms-auto">
                @auth
                        
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->User()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" {{ ($title === 'profile') ? 'active' : '' }} href="/dashboard">my dashboard</a></li>
                            <li><a class="dropdown-item" {{ ($title === 'notification') ? 'active' : '' }} href="notification">notification</a></li>
                            <li><a class="dropdown-item" {{ ($title === 'setting') ? 'active' : '' }} href="setting">setting</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Log out
                                    </button>
                                </form>
                            </li>
                        </ul>
                        </li>
                        
                    @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link"><i class="bi-bi-box-arrow-in-right"></i>
                            Login
                        </a>
                    </li>
                    @endauth
                </ul>



            
        </ul>
        
        </div>
    </div>
    </nav>