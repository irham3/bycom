    <!-- Modal -->
    <div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="saveModalLabel">Simpan Rakitan PC ?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="post" action="">
                <div class="modal-body ms-3 mt-3">
                  <input type="hidden" name="idUser" value="{{ Auth::user()->id }}">
                  <input type="hidden" name="idCpu" value="{{ session('cpus') ? session()->get('cpus')->id : ''}}">
                  <input type="hidden" name="idMobo" value="{{ session('motherboards') ? session()->get('motherboards')->id : ''}}">
                  <input type="hidden" name="idMemory" value="{{ session('memories') ? session()->get('memories')->id : ''}}">
                  <input type="hidden" name="idStorage" value="{{ session('internal_storages') ? session()->get('internal_storages')->id : ''}}">
                  <input type="hidden" name="idGpu" value="{{ session('gpus') ? session()->get('gpus')->id : ''}}">
                  <input type="hidden" name="idCase" value="{{ session('cases') ? session()->get('cases')->id : ''}}">
                  <input type="hidden" name="idPsu" value="{{ session('power_supplies') ? session()->get('power_supplies')->id : ''}}">
                  <div class="form-group mb-3">
                    <label class="rakitan" for="nama-rakitan">Masukkan Nama rakitan </label>
                    <input type="text" class="form-control" id="nama-rakitan" name="name" placeholder="Masukkan nama">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn add btn-primary">Simpan</button>
                </div>
              </form>
          </div>
      </div>
  </div>