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
                <div class="component-pic mb-4">
                    <label class="-label" for="file-add">
                      <span class="glyphicon glyphicon-camera"></span>
                      <span>Pilih Gambar</span>
                    </label>
                    <input id="file-add" type="file" name="imgUpload" class="upload-img add" accept=".jpeg,.png,.jpg,.svg" />
                    <img src="{{url('images/placeholder.jpg')}}" class="img-thumbnail shadow" id="output-img" width="200" alt="image"/>
                </div>
                <div class="form-outline mb-3">
                    <input type="text" required class="name form-control" id="name" name="name" autocomplete="off" placeholder="Nama Motherboard">
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
                    <select id="cpuSocketId" name="cpuSocketId" class="form-select p-2" required>
                      <option>-Jenis Socket-</option>
                      @foreach ($cpuSockets as $cpuSocket)
                        <option value="{{ $cpuSocket->id }}">{{ $cpuSocket->socketName }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-outline mb-3">
                      <input type="text" class="form-control" id="formFactor" placeholder="Form Factor" name="formFactor">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-outline mb-3">
                      <input type="num" class="form-control"  min="0" id="memoryMaxGB" placeholder="Max Memory (GB)" name="memoryMaxGB">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-outline mb-3">
                      <input type="num" class="form-control" id="memorySlot" min="0" placeholder="Jumlah Slot Memory" name="memorySlot">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-outline mb-3">
                  <textarea class="form-control" id="description" rows="17" name="description"></textarea>
                  <label class="form-label" for="description">Deskripsi</label>
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
                  <div class="component-pic mb-4">
                      <label class="-label" for="file-edit">
                        <span class="glyphicon glyphicon-camera"></span>
                        <span>Pilih Gambar</span>
                      </label>
                      <input id="file-edit" type="file" name="imgUpload" class="upload-img edit" accept=".jpeg,.png,.jpg,.svg" />
                      <img src="" class="img-thumbnail shadow" id="output-img" width="200" alt="image"/>
                  </div>
                  <div class="form-outline mb-3">
                    <input type="text" required class="name form-control" id="name" name="name" autocomplete="off">
                    <label class="form-label" for="name">Nama Motherboard</label>
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
                      <select id="cpuSocketId" name="cpuSocketId" class="form-select p-2" required>
                        <option>-Jenis Socket-</option>
                        @foreach ($cpuSockets as $cpuSocket)
                          <option value="{{ $cpuSocket->id }}">{{ $cpuSocket->socketName }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-outline mb-3">
                        <input type="text" class="form-control" id="formFactor" name="formFactor">
                        <label class="form-label" for="formFactor">Form Factor</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-outline mb-3">
                        <input type="num" class="form-control" id="memoryMaxGB" name="memoryMaxGB">
                        <label class="form-label" for="memoryMaxGB" min="0">Max Memory (GB)</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-outline mb-3">
                        <input type="num" class="form-control" id="memorySlot" placeholder="Jumlah Slot Memory" name="memorySlot" min="0">
                        <label class="form-label" for="memorySlot">Jumlah Slot Memory</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-outline mb-3">
                    <textarea class="form-control" id="description" rows="17" name="description"></textarea>
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

