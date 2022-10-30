$(function() {
  $(document).on('click', '.delete-btn', function(e) {
    const text = $(this).data('text') ?? "Data akan dihapus!"
    Swal.fire({
      title: 'Apa anda yakin?',
      text,
      icon: 'warning',
      showCancelButton: true,
      reverseButtons: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = $(this).data('url');
      }
    })
  })
})