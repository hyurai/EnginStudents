$(document).ready(function(){
    $( '.js-modal-open' ).each( function() {
        $( this ).on( 'click', function() {
             var target = $( this ).data( 'target' );
             var modal = document.getElementById( target );
             $( modal ).fadeIn( 300 );
             return false;
        });
   });
   $( '.js-modal-close' ).on( 'click', function() {
       $( '.js-modal' ).fadeOut( 300 );
       return false;
   });
});


$(document).ready(function(){
    $( '.js-modal-open-comment' ).each( function() {
        $( this ).on( 'click', function() {
             var target = $( this ).data( 'target' );
             var modal = document.getElementById( target );
             $( modal ).fadeIn( 300 );
             return false;
        });
   });
   $( '.js-modal-close-comment' ).on( 'click', function() {
       $( '.js-modal-comment' ).fadeOut( 300 );
       return false;
   });
});