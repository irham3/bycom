{{-- Add User Modal --}}
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="addUserModalLabel">Add User Data</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="name">Fullname</label>
                    <input type="text" required class="name form-control" id="name" name="name" autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" required class="email form-control" id="email" name="email" autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" required class="password form-control" id="password" name="password" autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Confirm Password</label>
                    <input type="password" required class="password_confirmation form-control" id="password_confirmation" name="password" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button class="btn btn-primary btn-add-user">Create</button>
            </div>
      </div>
  </div>
</div>

{{-- Edit User Modal --}}
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="name">Fullname</label>
                    <input type="text" required class="name form-control" id="name" name="name" autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" required class="email form-control" id="email" name="email" autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <label for="password">New Password</label>
                    <input type="password" required class="password form-control" id="password" name="password" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button class="btn btn-primary btn-update-user">Update</button>
            </div>
          </form>
      </div>
  </div>
</div>

