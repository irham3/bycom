@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome {{ Auth::guard('admin')->user()->name }}</h3>
            <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">      
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">
            <img src="images/dashboard/people.svg" alt="people">
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">
            <img src="images/dashboard/people.svg" alt="people">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  @include('admin.layouts.footer')
  <!-- partial -->
</div>
@endsection
