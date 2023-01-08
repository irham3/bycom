<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ByCom Dashboard</title>
  <!-- plugins:css -->
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/feather/feather.css?v=').time()}}">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/ti-icons/css/themify-icons.css?v=').time()}}">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/css/vendor.bundle.base.css?v=').time()}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css?v=').time() }}">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/ti-icons/css/themify-icons.css?v=').time()}}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/js/select.dataTables.min.css?v=').time()}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('admin/css/vertical-layout-light/style.css?v=').time()}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('admin/images/favicon.png?v=').time()}}" />

  {{-- Bootstrap CSS --}}
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> --}}

  <!-- MDB -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
  />

   {{-- CSRF TOKEN --}}
   <meta name="csrf-token" content="{{ csrf_token() }}">

  <style>
    label {
      font-weight: bold;
    }
    .profile-pic, .component-pic{
      color: transparent;
      transition: all 0.3s ease;
      display: flex;
      height: 20vh;
      justify-content: center;
      align-items: center;
      position: relative;
      transition: all 0.3s ease;
    }
    .profile-pic input, .component-pic input{
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
    .component-pic img {
      position: absolute;
      object-fit: cover;
      width: 165px;
      height: 165px;
      box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);
      z-index: 0;
    }
    .profile-pic .-label, .component-pic .-label {
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
    .component-pic:hover .-label {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.8);
      z-index: 10000;
      color: #fafafa;
      transition: background-color 0.2s ease-in-out;
      margin-bottom: 0;
    }
    .profile-pic span, .component-pic span {
      display: inline-flex;
      padding: 0.2em;
      height: 2em;
    } 

  /* Edit sidebar style */
  .sidebar .nav.sub-menu .nav-item .nav-link {
      color: #000;
  }

  .sidebar .nav:not(.sub-menu) > .nav-item > .nav-link[aria-expanded="true"] {
    border-radius: 8px 8px 0 0;
    background: #E7EAEE;
    color: #000;
  }
  .sidebar .nav:not(.sub-menu) > .nav-item > .nav-link[aria-expanded="true"] {
    border-radius: 8px 8px 0 0;
    background: #E7EAEE;
    color: #000;
  }
  .sidebar .nav.sub-menu {
    background: #E7EAEE;
    padding: 0.25rem 0 0 1.5rem;
    text-decoration: none
  }
  .sidebar .nav.sub-menu .nav-item .nav-link.active {
    color: #fff;
    background: #FFAE5D;
}
  .sidebar .nav .nav-item .nav-link:hover {
    background: #FFAE5D;
    color: #fff;
  }
  /* Edit Table Style */
    .expandable-table thead tr th {
      background: #FFAE5D;
    }

    .dataTables_paginate .paginate_button.current:hover {
    color: inherit !important;
    border: 1px solid rgba(0, 0, 0, 0.3);
    background-color: rgba(230, 230, 230, 0.1);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(230, 230, 230, 0.1)), color-stop(100%, rgba(0, 0, 0, 0.1)));
    /* background: -webkit-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%); */
    background: -moz-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
    background: -ms-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
    background: -o-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
    /* background: linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%); */
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
    box-sizing: border-box;
    display: inline-block;
    min-width: 1.5em;
    padding: .1em 1em;
    margin-left: 2px;
    text-align: center;
    text-decoration: none !important;
    cursor: pointer;
    color: inherit !important;
    border: 1px solid transparent;
    border-radius: 2px;
  }

  /* Edit Sweet Alert CSS */
  .swal2-container .swal2-popup {
    padding: 15px;
  }
  </style>
</head>
<body>
  <div class="container-scroller">
    @include('admin.layouts.navbar')
    <div class="container-fluid page-body-wrapper">
      @include('admin.layouts.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('admin.layouts.footer')
      </div>
    </div>
  </div>

  {{-- MDB-5 JS --}}
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
  ></script>

  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"   integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}
  <!-- plugins:js -->
  <script src="{{ URL::asset('admin/vendors/js/vendor.bundle.base.js?v=').time()}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ URL::asset('admin/js/off-canvas.js?v=').time()}}"></script>
  <script src="{{ URL::asset('admin/js/hoverable-collapse.js?v=').time()}}"></script>
  <script src="{{ URL::asset('admin/js/template.js?v=').time()}}"></script>
  <script src="{{ URL::asset('admin/js/settings.js?v=').time()}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('admin/js/dashboard.js?v=').time()}}"></script>
  <!-- End custom js for this page-->

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener('change', function (event) {
      if (event.target.matches('.upload-img')) {
        var image = event.target.nextSibling.nextSibling;
        image.src = URL.createObjectURL(event.target.files[0]);
      } 
    });
  </script>
  @yield('js-content')
</body>
</html>

