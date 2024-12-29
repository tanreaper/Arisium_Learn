( function( jQuery ){
 jQuery( document ).on( 'click', '.notice-get-started-class .notice-dismiss', function () {
        var type = jQuery( this ).closest( '.notice-get-started-class' ).data( 'notice' );
        jQuery.ajax( ajaxurl,
          {
            type: 'POST',
            data: {
              action: 'real_estate_hub_dismissed_notice_handler',
              type: type,
              wpnonce: real_estate_hub.wpnonce
            }
          } );
      } );
}( jQuery ) )