$(document).ready(function() {

  // *UTILITY
  $('.select2').select2();
  $('.datatable').DataTable();

  ClassicEditor
    .create( document.querySelector( '.editor' ) )
    .then( editor => {
            console.log( editor );
    } )
    .catch( error => {
            console.error( error );
    } );

});