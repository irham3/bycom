<!--Header Section-->
<header>
  <nav class="navbar navbar-expand-lg bg-dark navbar-nav">
      <div class="container pt-3 pb-2" style="border-bottom: 1px solid #808080;">
          <div class="ms-2">
              <a class="navbar-brand" href="{{ route('beranda') }}">
                  <img src="images/logo.png" alt="Logo" class="d-inline-block align-text-top">
              </a>
          </div>
            @if (Route::has('login'))
            <div class="d-flex icon-nav">
                @auth
                    <div>
                        <img src="images/cart.svg" alt="">
                    </div>
                    <div class="d-flex pt-1">
                        <div><img src="images/profile.svg" alt=""></div>
                    </div>
                @else
                    <a href="{{ route('login') }}">Log In</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
            @endif 
      </div>

      <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
                  class="navbar-toggler-icon"></span>
          </button>
          <div class="container collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav main-nav">
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Beranda</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Simulasi Rakit PC</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Rekomendasi Rakitan PC</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Marketplace</a></li>
              </ul>
          </div>
      </div>
  </nav>
</header>