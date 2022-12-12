@extends('admin.layout.layout')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <button type="button" class="btn btn-success">Add User</button>
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
@endsection

@section('js-content')
<script type="text/javascript">
  $(function () {
    
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
    
  });
</script>
@endsection

