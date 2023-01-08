{{-- Add Modal --}}
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel"  aria-hidden="true" role="dialog">
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
            <div class="component-pic mb-4">
                <label class="-label" for="file-add">
                  <span class="glyphicon glyphicon-camera"></span>
                  <span>Pilih Gambar</span>
                </label>
                <input id="file-add" type="file" name="imgUpload" class="upload-img add" accept=".jpeg,.png,.jpg,.svg" />
                <img src="{{url('storage/images/pc-builds/placeholder.png')}}" class="img-thumbnail shadow" id="output-img" width="200" alt="image"/>
            </div>
            <div class="form-group mb-3">
                <input type="text" required class="name form-control" id="name" name="name" autocomplete="off" placeholder="Nama Komponen">
            </div>
            <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <select id="cpuId" name="cpuId" class="form-select p-2" required>
                      <option>-CPU-</option>
                      {{-- @foreach ($pcComponents as $pcComponent->cpu)
                        <option value="{{ $pcComponent->cpu->id }}">{{ $pcComponent->cpu->name }}</option>
                      @endforeach --}}
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="url" placeholder="Link URL Ecommerce" name="url">
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="number" class="form-control" id="coreCount" placeholder="Jumlah Core" name="coreCount">
                </div>
              </div>
                <div class="col-lg-6">
                  <select id="cpuSocketId" name="cpuSocketId" class="form-select p-2" required>
                    <option>-Jenis Socket-</option>
                    {{-- @foreach ($cpuSockets as $cpuSocket)
                      <option value="{{ $cpuSocket->id }}">{{ $cpuSocket->socketName }}</option>
                    @endforeach --}}
                  </select>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="coreClock" placeholder="Core Clock" name="coreClock">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="boostClock" placeholder="Boost Clock" name="boostClock">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="number" min="0" class="form-control" id="tdp" placeholder="TDP (watt)" name="tdp">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="integratedgGraphic" placeholder="Integrated Graphic" name="integratedgGraphic">
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
          <form action="#" method="POST" id="addForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="id">
            <div class="modal-body">
              <div class="component-pic mb-4">
                  <label class="-label" for="file-add">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Pilih Gambar</span>
                  </label>
                  <input id="file-add" type="file" name="imgUpload" class="upload-img add" accept=".jpeg,.png,.jpg,.svg" />
                  <img src="" class="img-thumbnail shadow" id="output-img" width="200" alt="image"/>
              </div>
              <div class="form-group mb-3">
                  <input type="text" required class="name form-control" id="name" name="name" autocomplete="off" placeholder="Nama Komponen">
              </div>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="number" min="0" class="form-control" id="price" placeholder="Harga" name="price">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="url" placeholder="Link URL Ecommerce" name="url">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="number" class="form-control" id="coreCount" placeholder="Jumlah Core" name="coreCount">
                  </div>
                </div>
                  <div class="col-lg-6">
                    <select id="cpuSocketId" name="cpuSocketId" class="form-select p-2" required>
                      <option>-Jenis Socket-</option>
                      {{-- @foreach ($cpuSockets as $cpuSocket)
                        <option value="{{ $cpuSocket->id }}">{{ $cpuSocket->socketName }}</option>
                      @endforeach --}}
                    </select>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="coreClock" placeholder="Core Clock" name="coreClock">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="boostClock" placeholder="Boost Clock" name="boostClock">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="number" min="0" class="form-control" id="tdp" placeholder="TDP (watt)" name="tdp">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="integratedgGraphic" placeholder="Integrated Graphic" name="integratedgGraphic">
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

