<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ByCom Admin</title>
  <!-- plugins:css -->
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/feather/feather.css?v=').time()}}">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/ti-icons/css/themify-icons.css?v=').time()}}">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/css/vendor.bundle.base.css?v=').time()}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('admin/vendors/ti-icons/css/themify-icons.css?v=').time()}}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/js/select.dataTables.min.css?v=').time()}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('admin/css/vertical-layout-light/style.css?v=').time()}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('admin/images/favicon.png?v=').time()}}" />

  <style>
  /* Edit Navbar style */

  .navbar .navbar-brand-wrapper {
    background: #000;
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

  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layout.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.layout.sidebar')
      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ URL::asset('admin/vendors/js/vendor.bundle.base.js?v=').time()}}"></script>
  <!-- endinject -->
  {{-- <script src="{{ URL::asset('admin/vendors/chart.js/Chart.min.js?v=').time()}}"></script>
  <script src="{{ URL::asset('admin/vendors/datatables.net/jquery.dataTables.js?v=').time()}}"></script>
  <script src="{{ URL::asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js?v=').time()}}"></script>
  <script src="{{ URL::asset('admin/js/dataTables.select.min.js?v=').time()}}"></script> --}}
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
  <script src="{{ URL::asset('admin/js/todolist.js?v=').time()}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('admin/js/dashboard.js?v=').time()}}"></script>
  <script src="{{ URL::asset('admin/js/Chart.roundedBarCharts.js?v=').time()}}"></script>
  <!-- End custom js for this page-->

  @yield('js-content')
</body>

</html>

