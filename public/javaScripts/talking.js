$(function() {
  'use strict';


  $('#btn').on('click', function(){
    // console.log('btn click');
    var saniwa = $('#input_word').val().split(' ');
    $('#saniwa_message').val(saniwa);
    $('#mode').val(selectMode(saniwa));
    $('#saniwa_form').submit();

  });

});

function selectMode(str) {
  var first = str;
  switch(first) {
    case '遠征':
      return 'ensei';
      break;

    default:
      return 'wiki';
      break;
  }
}