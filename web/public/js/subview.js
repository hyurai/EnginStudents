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
});