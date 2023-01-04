{{-- Add Modal --}}
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel"  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Add Data</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="#" method="POST" id="addform" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
              <div class="profile-pic mb-4">
                  <label class="-label" for="file-add-user">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Ganti Gambar</span>
                  </label>
                  <input id="file-add-user" type="file" name="imgUpload" class="upload-img add" accept=".jpeg,.png,.jpg,.svg" />
                  <img src="{{url('images/placeholder.png')}}" class="shadow" id="output-img" width="200" alt="profile_img"/>
              </div>
              <div class="form-group mb-3">
                  <input type="text" required class="name form-control" id="name" name="name" autocomplete="off" placeholder="Nama Lengkap">
              </div>
              <div class="form-group mb-3">
                  <input type="text" required class="email form-control" id="email" name="email" autocomplete="off" placeholder="Email">
              </div>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" name="confirm_password">
                    </div>
                  </div>
                </div>
          </div>
          <div class="modal-footer">
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit" class="btn btn-primary btn-add-user">Create</button>
          </div>
        </form>
      </div>
  </div>
</div>

{{-- Edit Data Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="#" method="POST" id="editForm">
            @method('PUT')
            @csrf
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-body">
              <div class="form-group mb-3">
                  <input type="text" required class="socketName form-control" id="socketName" name="socketName" autocomplete="off" placeholder="Nama Socket CPU">
              </div>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="month" class="form-control" id="introductionYear" placeholder="Tahun Diperkenalkan" name="introductionYear">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <select id="cpuVendor" name="cpuVendor" class="form-select form-select-lg mb-3" required>
                      <option> - Vendor CPU - </option>
                      <option value="AMD">AMD</option>
                      <option value="Intel">Intel</option>
                    </select>
                  </div>
                </div>
          </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit" class="btn btn-primary btn-update-user">Update</button>
            </div>
          </form>
      </div>
  </div>
</div>

