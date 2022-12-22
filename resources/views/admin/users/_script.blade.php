<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

  // Get All Users into table
  $(document).ready(function () {
    $('.users-table').DataTable({
        ajax: '{{ url("admin/user/getAllUsers") }}',
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

  // Store
  $('.btn-add-user').click(function() {
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: 'user',
        type: 'POST',
        data: {
          '_method': 'POST',
          '_token': csrf_token,
          name: $('#addUserModal #name').val(),
          email: $('#addUserModal #email').val(),
          password: $('#addUserModal #password').val(),
          password_confirmation: $('#addUserModal #password_confirmation').val(),
        },
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
    csrf_token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: 'user/' + id + '/edit',
        type: 'GET',
        data: {
          '_method': 'GET',
          '_token': csrf_token
        },
        success: function(response) {
          $('#editUserModal').modal('show');
          $('#editUserModal #name').val(response.result.name);
          $('#editUserModal #email').val(response.result.email);
          console.log(response.result);
          $('.btn-update-user').click(function() {
            
          });
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
</script>