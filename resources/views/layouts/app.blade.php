<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>BangunPC - Build Your Computer</title>
    <meta name="description" content="Membantu anda untuk merakit PC sesuai kebutuhan yang anda inginkan.">
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="BangunPC - Build Your Computer">
    <meta itemprop="description" content="Membantu anda untuk merakit PC sesuai kebutuhan yang anda inginkan.">
    <meta itemprop="image" content="{{ URL::asset('images/favicon.png?v=').time()}}">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://bycom.eastus2.cloudapp.azure.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="BangunPC - Build Your Computer">
    <meta property="og:description" content="Membantu anda untuk merakit PC sesuai kebutuhan yang anda inginkan.">
    <meta property="og:image" content="{{ URL::asset('images/favicon.png?v=').time()}}">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="BangunPC - Build Your Computer">
    <meta name="twitter:description" content="Membantu anda untuk merakit PC sesuai kebutuhan yang anda inginkan.">
    <meta name="twitter:image" content="{{ URL::asset('images/favicon.png?v=').time()}}">

    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png?v=').time()}}" />

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
        
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css?v=').time() }}">

    @yield('head-content')

</head>
<body>
    @include('sweetalert::alert')
    @include('layouts.header')
    <main>
        @yield('main-content')
        <div class="feedback-widget">
            <div class="feedback-widget-item" onclick="window.open('https://forms.gle/R86YF6NVE2KNMyMv6','_blank');">
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><title>Chatbox Ellipses</title><path d='M408 64H104a56.16 56.16 0 00-56 56v192a56.16 56.16 0 0056 56h40v80l93.72-78.14a8 8 0 015.13-1.86H408a56.16 56.16 0 0056-56V120a56.16 56.16 0 00-56-56z' fill='none' stroke='currentColor' stroke-linejoin='round' stroke-width='32'/><circle cx='160' cy='216' r='32'/><circle cx='256' cy='216' r='32'/><circle cx='352' cy='216' r='32'/></svg>
                </div>
                <div>
                    Feedback
                </div>
            </div>
          </div>
    </main>
    @include('layouts.footer')

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"   integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    
    <!-- custom js file link  -->
    <script>
      var swiper = new Swiper(".product-slider", {
        spaceBetween: 10,
        loop:true,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
            slidesPerView: 1,
            },
            450: {
            slidesPerView: 2,
            },
            768: {
            slidesPerView: 2,
            },
            1024: {
            slidesPerView: 3,
            },
        },
      });

        // Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    
    @yield('js-content')
</body>
</html>