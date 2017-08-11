jQuery(document).ready(function($){

    // Add Color Picker to all inputs that have 'color-field' class
    $(function() {
        $('.tv-color-field').wpColorPicker();
    });

$( document ).on( 'click', '.wptv-rated', function () {
        var type = $( this ).closest( '.wptv-rated' ).data( 'notice' );
       
       jQuery(".notice-info.rate-notice" ).hide();


        $.ajax( ajaxurl,
          {
            type: 'POST',
            data: {
              action: 'rated_notice_handler',
              type: type,
            }
          });
      });

});


