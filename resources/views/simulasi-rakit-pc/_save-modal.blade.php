    <!-- Modal -->
    <div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="saveModalLabel">Simpan Rakitan PC ?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="post" action="{{ route('saveSimulasi') }}">
                @csrf
                <div class="modal-body">
                  <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                  <input type="hidden" name="cpuId" value="{{ session('cpus') ? session()->get('cpus')->id : ''}}">
                  <input type="hidden" name="moboId" value="{{ session('motherboards') ? session()->get('motherboards')->id : ''}}">
                  <input type="hidden" name="memoryId" value="{{ session('memories') ? session()->get('memories')->id : ''}}">
                  <input type="hidden" name="inStorageId" value="{{ session('internal_storages') ? session()->get('internal_storages')->id : ''}}">
                  <input type="hidden" name="gpuId" value="{{ session('gpus') ? session()->get('gpus')->id : ''}}">
                  <input type="hidden" name="caseId" value="{{ session('cases') ? session()->get('cases')->id : ''}}">
                  <input type="hidden" name="psuId" value="{{ session('power_supplies') ? session()->get('power_supplies')->id : ''}}">
                  <input type="hidden" name="totalPrice" value="{{ $totalPrice }}">
                  <div class="form-group mb-3">
                    <label for="nama-rakitan">Masukkan nama rakitan anda</label>
                    <input type="text" class="form-control" id="nama-rakitan" name="name" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
          </div>
      </div>
  </div>