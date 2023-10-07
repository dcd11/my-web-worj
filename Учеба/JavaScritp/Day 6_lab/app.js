// 1.1
let num = 123;
alert(num);

// 1.2
let a;

a = 10;
console.log(a);
a = 20;
console.log(a);

// 2.1
a = 1 + 2 + 3;
// 2.2
alert(a);
// 2.3
a = 10;
b = 2;

console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
// 2.4

let c, d;

c = 10;
d = 5;
let result = c + d;
console.log(result);

// 2.5
a = 1;
b = 2;
c = 3;
console.log(a + b + c);

// 2.6
a = 10;
b = 5;
c = a - b;
d = 7;
result = c + d;
console.log(result);

// 2.7
a = 1.5;
b = 0.75;
console.log(a + b);

// 2.8
a = 10;
b = 3;
console.log(10 % 3);

// 2.9
console.log(2 ** 10);

// 3.1
let str = '!!!';
console.log(str);

// 3.2
a = 'java';
b = 'script';
console.log(a+b);

// 3.3
a = 'hello ';
b = 'world';
console.log(a+b);

// 3.4
console.log(b.length);

// 3.5
str = 'abc';
console.log(`${str[0]}\n${str[1]}\n${str[2]}`);

// 4.1

let num1;
console.log(num1);

// 4.2
num1 = null;
console.log(num1);

// 4.3
num1 = true;
console.log(num1);

// 4.4
console.log(10 / 0);

// 4.5
console.log(-10 / 0);

// 5.1
const PI = 3.14; 
d = 10; //диаметр
console.log(PI * d);

// +1.1
a = '10';
b = '20';
console.log(Number(a) + Number(b));

// +1.2
a = '5px';
b = '6px';
console.log(Number(a[0]) + Number(b[0]));

// +1.3
a = '5.5px';
b = '6.25px';
console.log(parseFloat(a)+parseFloat(b));

// +1.4 Задача повторяет цели 1.3 переходим к 1.5
console.log(parseFloat(a)+parseFloat(b)+ 'px');

// +1.6
a = 10;
b = 20;
console.log(a.toString() + b.toString());

// +1.7
a = 123123;
console.log(a.toString().length);

// +1.8
a = 4545;
b = 121233;
console.log(a.toString().length + b.toString().length);

// +2.1
a = 'abcde';
console.log(a[0],a[2],a[4]);

// +2.2
console.log(a[4],a[3],a[2],a[1],a[0]);

// +2.3
num = 3
console.log(a[num]);

// +2.4
let solo = 'Solo per vendetta';
let last = solo.length -1;
console.log(solo[last]);
console.log(solo.substring(15,16));
console.log(solo.substring(0,4));

// +2.5
a = '12345';
console.log(Number(a[0])+Number(a[1])+Number(a[2])+Number(a[3])+Number(a[4]));

// +2.6
a = 12345;
b = String(a);
console.log(Number(b[0])+Number(b[1])+Number(b[2])+Number(b[3])+Number(b[4]));

// +2.7
console.log(Number(b[0])*Number(b[1])*Number(b[2])*Number(b[3])*Number(b[4]));

// 2.8
console.log(Number(b[4]),Number(b[3]),Number(b[2]),Number(b[1]),Number(b[0]));