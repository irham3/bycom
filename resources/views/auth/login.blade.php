<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('admin/css/vertical-layout-light/style.css?v=').time() }}">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css?v=').time() }}">
        <title>Login</title>
        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png?v=').time()}}" />
    </head>
    
    <body>
        <div class="vh-100">
            <div class="box h-100">
                <!-- Bagian Kiri -->
                <div class="row contentfrom my-4-mx-5 h-100">
                    <div class="col-sm-12 col-md-6 col-lg-6 bg-gambarkiri" ></div>
                    <!-- Tulisan BYCOM -->
                    <h5 class="tulisan "><b>BY</b>COM</h5> 
        
                    <!-- Bagian Kanan -->
                    <div class="col-sm-12 col-md-6 col-lg-6 bagiankanan d-flex align-items-center justify-content-center">
                        <div class="w-50">
                            <div class="atau"><a href="{{ route('beranda') }}">Kembali ke Beranda</a></div>
                            <h1 class="tulisandaftar">LOGIN</h1>
                            @if (Session::has('error_message'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error: </strong> {{ Session::get('error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <!-- Form -->
                            <form class="mt-3 text-dark" method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Kolom Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label login">Email </label>
                                    <input type="email" class="form-control login" id="email"
                                    aria-describedby="form-email" name="email" autocomplete="off" required>
                                </div>

                                <!-- Kolom Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label login">Password</label>
                                    <input type="password" class="form-control login" id="password" name="password" autocomplete="off" required>
                                </div>
                                {{-- <div class="forget-pass">
                                    <a class="atau" href="#">Lupa password</a>
                                </div> --}}

                                <!-- Button Submit Buat Akun -->
                                <button type="submit" class="btn btn-buatakun w-100 ">Masuk</button>
                            </form>
                                <br>
                                <h6 class="atau text-center">ATAU</h6>
                                
                                <!-- Button Link Akun Google -->
                                <a href="{{ route('googleAuth') }}">
                                    <button type="button" class="btn btn-buatakun google w-100 ">
                                        <img src="images/google.svg" alt=""> Google
                                    </button>
                                </a>
                                <br>
                                <br>
                                <h6 class="atau belum text-center">Belum punya akun ?<a href="{{ route('register') }}"> Register</a></h6>         
                        </div>
                    </div>
        
                </div>
            </div>
      </div>
      <script src="{{ url('admin/vendors/js/vendor.bundle.base.js') }}"></script>
    </body>
</html>