<script type="text/javascript">

  // Get All Users into table
  $(document).ready(function () {
    $('.datatable').DataTable({
        ajax: '{{ url("admin/motherboard/getAllData") }}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy:true,
        columns: [
            {data:'id', name: 'id'},
            {data:'image', name: 'image', orderable: false, searchable: false},
            {data:'name', name: 'name'},
            {data:'price', name: 'price'},
            {data:'url', name: 'url'},
            {data:'action', name: 'action', orderable: false, searchable: false}
        ]
    });
  });

  // Store
  $('#add_user_form').submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this);
    $.ajax({
      url: 'user',
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
          $('.users-table').DataTable().ajax.reload();
          Swal.fire(
            'Berhasil!',
            response.success,
            'success'
            )
          $("#addUserModal").modal('hide');
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
      title: 'Anda yakin ingin menghapus user ini ?',
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
                $('.users-table').DataTable().ajax.reload();
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
          $('#editUserModal').modal('show');
          $('#editUserModal .btn-close').click(function (e) { 
            e.preventDefault();
            $('#editUserModal').modal('hide');
          });
          $('#editUserModal #output-img').attr('src', '/storage/images/profile-images/users/' + response.user.image);
          $('#editUserModal #id').val(response.user.id);
          $('#editUserModal #name').val(response.user.name);
          $('#editUserModal #email').val(response.user.email);
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

  $('#edit_user_form').submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this); 
    $.ajax({
      url: 'user/update',
      type: 'POST',
      data: fd,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
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
          $('.users-table').DataTable().ajax.reload();
          Swal.fire(
            'Berhasil!',
            response.success,
            'success'
            )
          $("#editUserModal").modal('hide');
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