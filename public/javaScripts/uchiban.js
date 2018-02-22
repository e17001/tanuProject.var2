$(function() {
  'use strict';
  $('#start').on('click', function() {
    let content = wrapByTag(onceRandom());
    // console.log(content);

    $('#token').html(content);
  });

});

  // main
function onceRandom () {
  const tokenList = getWord.token().slice(0);
    let len = tokenList.length;
    let n;
    let result = [];
    while(result.length < 6) {
      n = Math.floor(Math.random() * len);
      if(!result.includes(tokenList[n]))
      result.push(tokenList[n]);
    }
    return result;
  
}

function wrapByTag (arr) {
  return  `
            <div class="uchiban">
            <table>
            <tr class="uma"><th class="tHead">馬当番</th><td>${arr[0]}</td><td>${arr[1]}</td></tr>
            <tr class="hatake"><th class="tHead">畑当番</th><td>${arr[2]}</td><td>${arr[3]}</td></tr>
            <tr class="teawase"><th class="tHead">手合わせ</th><td>${arr[4]}</td><td>${arr[5]}</td></tr>
            </table>
            </div>`;
}