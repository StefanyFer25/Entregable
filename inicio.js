$(document).ready(function() {
  $('#mostrarMas').click(function() {
    $('.mas').toggle();

    if ($('.mas').is(':visible')) {
      $('#mostrarMas').text('MENOS');
    } else {
      $('#mostrarMas').text('MAS');
    }
  });
});