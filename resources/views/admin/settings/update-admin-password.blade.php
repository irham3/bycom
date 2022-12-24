@extends('admin.layout.layout')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <h1 class="h3 mb-4 text-gray-800">{{ __('Settings') }}</h1>
    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-warning border-left-warning alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        <button type="button" class="close mb-4" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
      <div class="row">
        <div class="col-lg-4 order-lg-2">
          <div class="card shadow mb-4">
            <form action="{{ route('updateAdminImage') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="profile-pic mt-3">
                <label class="-label" for="file">
                  <span class="glyphicon glyphicon-camera"></span>
                  <span>Ganti Gambar</span>
                </label>
                <input id="file" type="file" name="imgUpload" accept=".jpeg,.png,.jpg,.svg" onchange="loadFile(event)"/>
                <img src="{{asset('/storage/images/profile-images/'.$adminDetails['image'])}}" class="shadow" id="output-img" width="200" alt="profile_img"/>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                          <h5 class="font-weight-bold">{{ $adminDetails['name'] }}</h5>
                          <p>Administrator</p>
                          <button type="submit" class="btn btn-info btn-icon-text">
                            <i class="ti-reload btn-icon-prepend"></i>
                            Update Image
                          </button>
                        </div>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-8 order-lg-1 grid-margin stretch-card">
          <div class="card shadow">
            <div class="card-body">
              <form action="{{ route('updateAdminPassword') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="name" class="form-control" id="name" value="{{ $adminDetails['name'] }}" readonly>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" value="{{ $adminDetails['email'] }}" readonly>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="oldPassword">Password Lama</label>
                      <input type="password" class="form-control" id="oldPassword" placeholder="Masukkan Password Lama" name="current_password">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="newPassword">Password Baru</label>
                      <input type="password" class="form-control" id="newPassword" placeholder="Masukkan Password Baru" name="new_password">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="confirmPassword">Konfirmasi Password</label>
                      <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Password Baru" name="confirm_password">
                    </div>
                  </div>
                </div>
                <div class="pl-lg-4">
                  <div class="row">
                      <div class="col text-right">
                        <button type="reset" class="btn btn-inverse-dark">Reset</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  
  @include('admin.layout.footer')
</div>

@endsection

@section('js-content')
<script>
  var loadFile = function (event) {
    var image = document.getElementById("output-img");
    image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
@endsection