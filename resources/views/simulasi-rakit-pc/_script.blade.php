<script>
  // Store
  $('#delete-item-form').submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this);
    $.ajax({
      url: '{{ url("admin/cpu") }}',
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
        ;
        Swal.fire(
          'Error',
          'Ada masalah!',
          'error'
        )
      }
    });
  });

</script>