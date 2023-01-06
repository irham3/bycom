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
          $('.datatable').DataTable().ajax.reload();
          Swal.fire(
            'Berhasil!',
            response.success,
            'success'
            )
          $("#addModal").modal('hide');
        }
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText);
        Swal.fire(
          'Error',
          'Ada masalah!',
          'error'
        )
      }
    });
  });

</script>