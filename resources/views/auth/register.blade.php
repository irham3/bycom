{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
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
                            <h1 class="tulisandaftar mt-5 mb-1">REGISTER</h1>
                            <h6 class="atau register">Sudah punya akun ?<a href="#"> Login</a></h6>
                            <br>

                            <!-- Form -->
                            <form class="text-dark" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!--Kolom Nama-->
                                <div class="mb-2">
                                    <label for="email" class="form-label">Nama Lengkap </label>
                                    <input placeholder="Nama Lengkap" type="text" class="form-control login" id="nama"
                                    aria-describedby="form-nama">
                                </div>

                                <!-- Kolom Email -->
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email </label>
                                    <input placeholder="Email" type="email" class="form-control login" id="email"
                                    aria-describedby="form-email">
                                </div>

                                <!-- Kolom Password -->
                                <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input placeholder="Password" type="password" class="form-control login" id="password">
                                </div>

                                <!-- Kolom Password -->
                                <div class="mb-2">
                                    <label for="password" class="form-label">Konfirmasi Password</label>
                                    <input placeholder="Password" type="password" class="form-control login" id="password">
                                </div>

                                <!-- Button Submit Buat Akun -->
                                <button type="submit" class="btn btn-buatakun w-100 ">Daftar</button>
                                <br>
                                <h6 class="atau text-center">ATAU</h6>
                                
                                <!-- Button Link Akun Google -->
                                <button type="button" class="btn btn-buatakun google w-100 ">
                                    <img src="images/google.svg" alt=""> Google
                                </button>    
                            </form>
                        </div>
                    </div>
        
                </div>
            </div>
      </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>