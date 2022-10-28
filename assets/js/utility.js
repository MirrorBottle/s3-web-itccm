$(function () {
  // * DATATABLE
  const DATATABLE_LANGUAGE = {
    "decimal": "",
    "emptyTable": "Tidak ada data",
    "info": "Showing _START_ to _END_ of _TOTAL_ entries",
    "infoEmpty": "Showing 0 to 0 of 0 entries",
    "infoFiltered": "(filtered from _MAX_ total entries)",
    "infoPostFix": "",
    "thousands": ",",
    "lengthMenu": "Show _MENU_ entries",
    "loadingRecords": "Loading...",
    "processing": "",
    "search": "Search:",
    "zeroRecords": "No matching records found",
    "paginate": {
      "first": "First",
      "last": "Last",
      "next": "Next",
      "previous": "Previous"
    },
    "aria": {
      "sortAscending": ": activate to sort column ascending",
      "sortDescending": ": activate to sort column descending"
    }
  }
  $('.datatable').DataTable({
    language: DATATABLE_LANGUAGE
  });
  $('.datatable-min').DataTable({
    searching: false,
    paging: false,
    info: false,
    language: DATATABLE_LANGUAGE
  });
  // * SELECT2

  // * QUILL
})