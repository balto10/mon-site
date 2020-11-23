$(document).ready(function() {
    // Open modal
    $('#open_modal').click(function() {
      $('#modal_to_open').css(
        {
          'display': 'block'
        }
      );
    });

    // Close modal
    $('#close_modal').click(function() {
      $('#modal_to_open').css(
        {
          'display':'none'
        }
      );
    });


});
