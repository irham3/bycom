@extends('admin.layout.layout')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div id="success_message"></div>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUserModal">Add User</button>
          @if (Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
              <strong>Success: </strong> {{ Session::get('success_message') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <p class="card-title mt-3">List User</p>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="display expandable-table users-table" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
              </table>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
  </div>
</div>

{{-- Add Modal --}}
@include('admin.users.store-modal')

{{-- Edit Modal --}}

@endsection

@section('js-content')
<script type="text/javascript">
  getAllUsers();
  function getAllUsers() {
    var table = $('.users-table').DataTable({
        ajax: '{{ url("admin/getAllUsers") }}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy:true,
        columns: [
            {data:'id', name: 'id'},
            {data:'name', name: 'name'},
            {data:'email', name: 'email'},
            {data:'action', name: 'action', orderable: false, searchable: false}
        ]
    });
  };
</script>
@endsection

