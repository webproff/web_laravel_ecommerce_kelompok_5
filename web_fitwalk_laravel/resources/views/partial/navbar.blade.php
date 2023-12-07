<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {{-- <li class="nav-item">
            <a class="nav-link active" {{ ($title === 'Home') ? 'active' : '' }} href="/">Home</a>
            </li> --}}
            <li class="nav-item">
            <a class="nav-link" {{ ($title === 'ilovenavia') ? 'active' : '' }} href="wishlist">wishlist</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" {{ ($title === 'cart') ? 'active' : '' }} href="cart">cart</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" {{ ($title === 'Archon') ? 'active' : '' }} href="archon">archon</a></li>
                <li><a class="dropdown-item" {{ ($title === 'profile') ? 'active' : '' }} href="profile">profile</a></li>
                <li><a class="dropdown-item" {{ ($title === 'notification') ? 'active' : '' }} href="notification">notification</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" {{ ($title === 'setting') ? 'active' : '' }} href="setting">setting</a></li>
            </ul>
            </li>
            
        </ul>
        
        </div>
    </div>
    </nav>