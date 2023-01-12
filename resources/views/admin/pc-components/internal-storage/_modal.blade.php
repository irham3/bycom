{{-- Add Modal --}}
<div class="modal top fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel"  aria-hidden="true">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Add Data</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="#" method="POST" id="addForm" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="component-pic mb-5 mt-4">
                    <label class="-label" for="file-add">
                      <span class="glyphicon glyphicon-camera"></span>
                      <span>Pilih Gambar</span>
                    </label>
                    <input id="file-add" type="file" name="imgUpload" class="upload-img add" accept=".jpeg,.png,.jpg,.svg" />
                    <img src="{{url('images/placeholder.jpg')}}" class="img-thumbnail shadow" id="output-img" width="200" alt="image"/>
                </div>
                <div class="form-outline mb-3">
                    <input type="text" required class="name form-control" id="name" name="name" autocomplete="off" placeholder="Nama Internal Storage">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <div class="form-outline mb-3">
                        <input type="number" min="0" class="form-control" id="price" name="price" placeholder="Harga (Rp)">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-outline mb-3">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Link Ecommerce">
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-outline mb-3">
                      <input type="string" class="form-control" id="type" placeholder="Tipe" name="type">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-outline mb-3">
                      <input type="text" class="form-control" id="capacity" placeholder="Kapasitas Storage (GB/TB)" name="capacity">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-outline mb-3">
                  <textarea class="form-control" id="description" rows="18" name="description"></textarea>
                  <label class="form-label" for="description">Deskripsi</label>
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
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
              </button>
          </div>
          <form action="#" method="POST" id="editForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="component-pic mb-5 mt-4">
                      <label class="-label" for="file-edit">
                        <span class="glyphicon glyphicon-camera"></span>
                        <span>Pilih Gambar</span>
                      </label>
                      <input id="file-edit" type="file" name="imgUpload" class="upload-img edit" accept=".jpeg,.png,.jpg,.svg" />
                      <img src="" class="img-thumbnail shadow" id="output-img" width="200" alt="image"/>
                  </div>
                  <div class="form-outline mb-3">
                    <input type="text" required class="name form-control" id="name" name="name" autocomplete="off">
                    <label class="form-label" for="name">Nama Internal Storage</label>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                        <div class="form-outline mb-3">
                          <input type="number" min="0" class="form-control" id="price" placeholder="Harga" name="price">
                          <label class="form-label" for="price">Harga (Rp)</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-outline mb-3">
                          <input type="text" class="form-control" id="url" name="url">
                          <label class="form-label" for="url">Link Ecommerce</label>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-outline mb-3">
                        <input type="string" class="form-control" id="type" name="type">
                        <label for="type" class="form-label">Tipe</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-outline mb-3">
                        <input type="text" class="form-control" id="capacity" name="capacity">
                        <label class="form-label" for="capacity">Kapasitas Storage (GB/TB)</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-outline mb-3">
                    <textarea class="form-control" id="description" rows="18" name="description"></textarea>
                    <label class="form-label" for="description">Deskripsi</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary btn-edit-data">Update</button>
            </div>
          </form>
      </div>
  </div>
</div>

