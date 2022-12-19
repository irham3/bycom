
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="addUserModalLabel">Add User Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="{{ url('/admin/user/store') }}" method="post">
            @csrf
            <div class="modal-body">
              @if ($errors->any())
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              @endif
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
                <button type="submit" class="btn btn-primary add_user">Create</button>
            </div>
          </form>
      </div>
  </div>
</div>