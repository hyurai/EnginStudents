$(document).ready(function(){
    $( '.js-modal-open-subview' ).each( function() {
        $( this ).on( 'click', function() {
             var target = $( this ).data( 'target' );
             var modal = document.getElementById( target );
             $( modal ).fadeIn( 300 );
             return false;
        });
   });
   $( '.js-modal-close-subview' ).on( 'click', function() {
       $( '.js-modal-subview' ).fadeOut( 300 );
       return false;
   });
});