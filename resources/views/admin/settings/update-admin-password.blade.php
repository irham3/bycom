@extends('admin.layout.layout')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Settings</h3>
      </div>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Admin Password</h4>
            <form class="forms-sample" method="post" action="">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="{{ $adminDetails['email'] }}" readonly>
              </div>
              <div class="form-group">
                <label for="type">Tipe Admin</label>
                <input type="text" class="form-control" id="type" value="{{ $adminDetails['type'] }}" readonly>
              </div>
              <div class="form-group">
                <label for="oldPassword">Password Lama</label>
                <input type="password" class="form-control" id="oldPassword" placeholder="Masukkan Password Lama" name="current_password" required>
              </div>
              <div class="form-group">
                <label for="newPassword">Password Baru</label>
                <input type="password" class="form-control" id="newPassword" placeholder="Masukkan Password Baru" name="new_password" required>
              </div>
              <div class="form-group">
                <label for="confirmPassword">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Password Baru" name="confirm_password" required>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button type="reset" class="btn btn-light">Reset</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  @include('admin.layout.footer')
</div>

@endsection