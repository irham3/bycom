<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css?v=').time() }}">
        <title>Register</title>
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
                            <a href="{{ route('beranda') }}">Beranda</a>
                            <h1 class="tulisandaftar mt-5 mb-1">REGISTER</h1>
                            
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
                            {{-- </form>
                                <br>
                                <h6 class="atau text-center">ATAU</h6>
                                
                                <!-- Button Link Akun Google -->
                                <button type="button" class="btn btn-buatakun google w-100 ">
                                    <img src="images/google.svg" alt=""> Google
                                </button>     --}}
                        </div>
                    </div>
        
                </div>
            </div>
      </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>