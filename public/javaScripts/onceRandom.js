'use strict';

  // define function
  // const getWord = require('./getWord');
  // declare variable
  const tokenList = getWord.token().slice(0);
  // main
  const onceRandom = () => {
    let len = tokenList.length;
    let n;
    let result = [];
    while(result.length < 6) {
      n = Math.floor(Math.random() * len);
      if(!result.includes(tokenList[n]))
      result.push(tokenList[n]);
    }
    return result;
  };

// module.exports = onceRandom;
  // display

// console.log(onceRandom())