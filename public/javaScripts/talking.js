$(function() {
  'use strict';


  $('#btn').on('click', function(){
    // console.log('btn click');
    var saniwa = $('#saniwa_message').val().replace(/　/g," ");
    // console.log(sentMassage);
    // $('#saniwa').html(saniwaMassage);
    $('#mode').val(selectMode(saniwa));
    $('form').submit();

  });

});

function selectMode(str) {
  var first = str.split(' ')[0];
  switch(first) {
    case '遠征':
      return 'ensei';
      break;

    default:
      return 'wiki';
      break;
  }
}