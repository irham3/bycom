<script type="text/javascript">

  // Get All Users into table
  $(document).ready(function () {
    $('.datatable').DataTable({
        ajax: '{{ url("admin/processor-socket/getAllData") }}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy:true,
        columns: [
            {data:'id', name: 'id'},
            {data:'socketName', name: 'socketName'},
            {data:'introductionYear', name: 'introductionYear'},
            {data:'cpuVendor', name: 'cpuVendor'},
            {data:'action', name: 'action', orderable: false, searchable: false}
        ]
    });
  });

  // Store
  $('#addForm').submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this);
    $.ajax({
      url: 'processor-socket',
      method: 'post',
      data: fd,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(response) {
        if (response.errors) {
          let errors = ''
          $.each(response.errors, function(key, value) {
            errors += value + '</br>';
          });
          Swal.fire(
            'Warning',
            errors,
            'warning'
          )
        } else{
          $("#addModal").modal('hide');
          Swal.fire(
            'Berhasil!',
            response.success,
            'success'
          )
          $('.datatable').DataTable().ajax.reload();
        }
      },
      error: function (xhr, status, error) {
        console.log(fd);
        console.log(xhr.responseText);
        Swal.fire(
          'Error',
          'Ada masalah!',
          'error'
        )
      }
    });
  });

  // Delete
  $(document).on('click', '.btn-delete', function (e) {
    e.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        csrf_token = $('meta[name="csrf-token"]').attr('content');

    Swal.fire({
      title: 'Anda yakin ingin menghapus data ini ?',
      text: 'Anda tidak bisa mengembalikannya lagi',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, tetap hapus!'
    }).then((result) => {
        if (result.value) {
          if (result.isConfirmed) {
            $.ajax({
              url: url,
              type: "POST",
              data: {
                  '_method': 'DELETE',
                  '_token': csrf_token
              },
              success: function (response) {
                $('.datatable').DataTable().ajax.reload();
                Swal.fire(
                  'Terhapus!',
                  'Data berhasil dihapus.',
                  'success'
                )
              },
              error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")"); 
                alert(xhr.responseText);
                Swal.fire(
                  'Error',
                  'Ada masalah!',
                  'error'
                )
              }
            });
          }
        }
    });
  });

  //Edit
  $(document).on('click', '.btn-edit', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var url = $(this).attr('href');
    $.ajax({
        url: url,
        type: 'GET',
        data: {
          '_method': 'GET',
        },
        success: function(response) {
          $('#editModal').modal('show');
          $('#editModal .btn-close').click(function (e) { 
            e.preventDefault();
            $('#editModal').modal('hide');
          });
          $('#editModal #id').val(response.data.id);
          $('#editModal #socketName').val(response.data.socketName);
          $('#editModal #introductionYear').val(response.data.introductionYear);
          $('#editModal #cpuVendor').val(response.data.cpuVendor);
        }, 
        error: function (xhr, status, error) {
          var err = eval("(" + xhr.responseText + ")"); 
          alert(xhr.responseText);
          Swal.fire(
            'Error',
            'Ada masalah!',
            'error'
          )
        }
    });
  });

  $('#editForm').submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this);
    const id = $('#id').val();
    $.ajax({
      url: 'processor-socket/' + id,
      type: 'POST',
      data: fd,
      cache: false,
      dataType: 'json',
      processData: false,
      contentType: false,
      success: function(response) {
        if (response.errors) {
          let errors = '';
          $.each(response.errors, function(key, value) {
            errors += value + '</br>';
          });
          Swal.fire(
            'Warning',
            errors,
            'warning'
          )
        } else{
          $("#editModal").modal('hide');
          Swal.fire(
            'Berhasil!',
            response.success,
            'success'
            )
          $('.datatable').DataTable().ajax.reload();
        }
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText)
        Swal.fire(
          'Error',
          'Ada masalah!',
          'error'
        )
      }
    });
  });
</script>