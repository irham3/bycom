<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{ url('admin/css/vertical-layout-light/style.css?v=').time() }}">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css?v=').time() }}">
        <title>Register</title>
        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png?v=').time()}}" />
    </head>
    
    <body>
        <div class="vh-100">
            <div class="box h-100">
                <!-- Bagian Kiri -->
                <div class="row contentfrom my-4-mx-5 h-100">
                    <div class="col-sm-12 col-md-6 col-lg-6 bg-gambarkiri register" ></div>
                    <!-- Tulisan BYCOM -->
                    <h5 class="tulisan "><b>BY</b>COM</h5> 
        
                    <!-- Bagian Kanan -->
                    <div class="col-sm-12 col-md-6 col-lg-6 bagiankanan d-flex align-items-center justify-content-center">
                        <div class="w-50">
                            <div class="atau"><a href="{{ route('beranda') }}">Kembali ke Beranda</a></div>
                            <h1 class="tulisandaftar mt-5 mb-1">REGISTER</h1>
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
                            <form class="text-dark" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!--Kolom Nama-->
                                <div class="mb-2">
                                    <label for="email" class="form-label">Nama Lengkap </label>
                                    <input placeholder="Nama Lengkap" type="text" class="form-control login" id="nama" name="name"
                                    aria-describedby="form-nama" required>
                                </div>

                                <!-- Kolom Email -->
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email </label>
                                    <input placeholder="Email" type="email" class="form-control login" id="email" name="email"required>
                                </div>

                                <!-- Kolom Password -->
                                <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input placeholder="Password" type="password" class="form-control login" id="password" name="password" required>
                                </div>

                                <!-- Kolom Password -->
                                <div class="mb-2">
                                    <label for="password" class="form-label">Konfirmasi Password</label>
                                    <input placeholder="Password" type="password" class="form-control login" id="password" name="password_confirmation" required>
                                </div>
                                <!-- Button Submit Buat Akun -->
                                <button type="submit" class="btn btn-buatakun w-100 ">Daftar</button>
                                <h6 class="atau register">Sudah punya akun ?<a href="{{ route('login') }}"> Login</a></h6>
                                <br>
                                <h6 class="atau text-center">ATAU</h6>
                                
                                <!-- Button Link Akun Google -->
                                <a href="{{ route('googleAuth') }}">
                                    <button type="button" class="btn btn-buatakun google w-100 ">
                                        <img src="images/google.svg" alt=""> Google
                                    </button>    
                                </a>
                        </div>
                    </div>
        
                </div>
            </div>
      </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="{{ url('admin/vendors/js/vendor.bundle.base.js') }}"></script>
    </body>
</html>