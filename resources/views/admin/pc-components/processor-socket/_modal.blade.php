{{-- Add Modal --}}
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel"  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Add Data</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="#" method="POST" id="addForm">
          @csrf
          <div class="modal-body">
              <div class="form-outline mb-3">
                  <input type="text" required class="socketName form-control" id="socketName" name="socketName" autocomplete="off" placeholder="Nama Socket CPU">
              </div>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="form-outline mb-3">
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
              </button>
          </div>
          <form action="#" method="POST" id="editForm">
            @method('PUT')
            @csrf
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-body">
              <div class="form-outline mb-3">
                  <input type="text" required class="socketName form-control" id="socketName" name="socketName" autocomplete="off">
                  <label class="form-label" for="socketName">CPU Socket</label>
              </div>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="form-outline mb-3">
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

