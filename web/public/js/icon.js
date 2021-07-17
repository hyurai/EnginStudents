$(document).ready(function(){
    $( '.js-modal-open-icon' ).each( function() {
        $( this ).on( 'click', function() {
             var target = $( this ).data( 'target' );
             var modal = document.getElementById( target );
             $( modal ).fadeIn( 300 );
             return false;
        });
   });
   $( '.js-modal-close-icon' ).on( 'click', function() {
       $( '.js-modal-icon' ).fadeOut( 300 );
       return false;
   });
});