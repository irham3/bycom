<x-app-layout>
    @section('head-content')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
        .profile-pic {
            color: transparent;
            transition: all 0.3s ease;
            display: flex;
            height: 20vh;
            justify-content: center;
            align-items: center;
            position: relative;
            transition: all 0.3s ease;
        }
        .profile-pic input {
            display: none;
        }
        .profile-pic img {
            position: absolute;
            object-fit: cover;
            width: 165px;
            height: 165px;
            box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);
            border-radius: 100px;
            z-index: 0;
        }
        .profile-pic .-label {
            cursor: pointer;
            height: 165px;
            width: 165px;
        }
        .profile-pic:hover .-label {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 10000;
            color: #fafafa;
            transition: background-color 0.2s ease-in-out;
            border-radius: 100px;
            margin-bottom: 0;
        }
        .profile-pic span {
            display: inline-flex;
            padding: 0.2em;
            height: 2em;
        } 
        </style>
    @endsection

    @section('main-content')    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mb-3">
                        <div class="">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                <div class="d-flex mt-5">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg me-3">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                     <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg ms-3">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
                </div>

               
            </div>
        </div>
    @endsection
    @section('js-content')
    <script>
        document.addEventListener('change', function (event) {
            if (event.target.matches('.upload-img')) {
                console.log(event);
                var image = event.target.nextSibling.nextSibling;
                image.src = URL.createObjectURL(event.target.files[0]);
            } 
            });
        </script>
    @endsection
</x-app-layout>

