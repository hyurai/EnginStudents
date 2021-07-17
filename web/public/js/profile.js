$(document).ready(function(){
    $( '.js-modal-open-profile' ).each( function() {
        $( this ).on( 'click', function() {
             var target = $( this ).data( 'target' );
             var modal = document.getElementById( target );
             $( modal ).fadeIn( 300 );
             return false;
        });
   });
   $( '.js-modal-close-profile' ).on( 'click', function() {
       $( '.js-modal-profile' ).fadeOut( 300 );
       return false;
   });



   $('#front_myImage').on('change', function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {
        $("#front_preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
    });

    $('#myImage').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#preview").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
        });
});