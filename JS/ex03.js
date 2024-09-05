const digitize = n => [...`${n}`].map(i =>parseInt(i));
console.log(digitize(123));
console.log(digitize(6789140))