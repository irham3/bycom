@extends('admin.layouts.app')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div id="success_message"></div>
      
      <p class="card-title mt-3">List Data</p>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-hover expandable-table datatable" style="width:100%">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Email User</th>
                  <th>Kode Rakitan</th>
                  <th>Nama Rakitan</th>
                  <th>Total Harga</th>
                </tr>
              </thead>
          </table>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>

@endsection

@section('js-content')
<script>
  // Get All Data into table
  $(document).ready(function () {
    $('.datatable').DataTable({
        ajax: '{{ url("admin/custom-build/getAllDatatable") }}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy:true,
        columns: [
            {data:'id', name: 'id'},
            {data:'userEmail', name: 'userEmail'},
            {data:'code', name: 'code'},
            {data:'name', name: 'name'},
            {data:'totalPrice', name: 'totalPrice'},
        ]
    });
  });
</script>
@endsection

