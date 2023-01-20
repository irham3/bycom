<header>
    <a class="navbar-brand" href="{{ route('beranda') }}">
        <img src="{{ url('images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
    </a>
    <nav class="navbar">
        <a href="{{ route('beranda') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Beranda</a>
        <a href="{{ url('simulasi-rakit-pc') }}" class="{{ (request()->is('simulasi-rakit-pc*')) ? 'active' : '' }}">Simulasi Rakit PC</a>
        <a href="{{ url('katalog') }}" class="{{ (request()->is('katalog*')) ? 'active' : '' }}">Katalog</a>
    </nav>
    @if (Route::has('login'))
            <div class="d-flex icon-nav">
                @auth
                <div class="dropdown">
                    <a href="#" class="fas fa-user user-profile icons"id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('rakitanku') }}">Rakitanku</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                    <div class="menu login"><a href="{{ route('login') }}">Log In</a></div>
                    <div class="menu"><a href="{{ route('register') }}">Register</a></div>              
                @endauth
            </div>
    @endif 
</header>
<!-- header section ends -->
<!-- home section starts  -->