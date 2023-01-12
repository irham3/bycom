{{-- Add Modal --}}
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel"  aria-hidden="true" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Add Data</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="#" method="POST" id="addForm" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="component-pic mb-5 mt-4">
                <label class="-label" for="file-add">
                  <span class="glyphicon glyphicon-camera"></span>
                  <span>Pilih Gambar</span>
                </label>
                <input id="file-add" type="file" name="imgUpload" class="upload-img add" accept=".jpeg,.png,.jpg,.svg" />
                <img src="{{ url('images/placeholder.jpg') }}" class="img-thumbnail shadow" id="output-img" width="200" alt="image"/>
            </div>
            <div class="form-group mb-3">
                <input type="text" required class="name form-control" id="name" name="name" autocomplete="off" placeholder="Nama Komponen">
            </div>
            <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="number" class="form-control" id="price" placeholder="Harga (Rp)" name="price">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="url" placeholder="Link URL Ecommerce" name="url">
                  </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit" class="btn btn-primary btn-add-data">Create</button>
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
                {{-- <span aria-hidden="true">&times;</span> --}}
              </button>
          </div>
          <form action="#" method="POST" id="editForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="id" id="id">
            <div class="modal-body">
              <div class="component-pic mb-5 mt-4">
                  <label class="-label" for="file-add">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Pilih Gambar</span>
                  </label>
                  <input id="file-add" type="file" name="imgUpload" class="upload-img add" accept=".jpeg,.png,.jpg,.svg" />
                  <img src="" class="img-thumbnail shadow" id="output-img" width="200" alt="image"/>
              </div>
              <div class="form-outline mb-3">
                  <input type="text" required class="name form-control" id="name" name="name" autocomplete="off" placeholder="Nama Komponen">
                  <label for="name" class="form-label">Nama Rakitan (CPU-GPU-RAM-Storage)</label>
              </div>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="form-outline mb-3">
                      <input type="number" min="0" class="form-control" id="price" name="price">
                      <label for="price" class="form-label">Harga (Rp)</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-outline">
                      <input type="text" class="form-control" id="url" placeholder="Link URL Ecommerce" name="url">
                      <label for="url" class="form-label">Link Ecommerce</label>
                    </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
      </div>
  </div>
</div>

