// // Глобальная область видимости
// let fName = 'Ivan';

// function sayHello() {
//         // функциональная область видимости
//     console.log(`Hello ${fName}`);
// }

// sayHello();

//////////////////////////////////////////
// let fName = 'Ivan';

// function sayHello(fName = "Анна") {
//         // функциональная область видимости
//     console.log(`Hello ${fName}`);
// }
// console.log(`Hello ${fName}`); // ivan
// sayHello(); // anna


//////////////////////////////////////////

// let radius = 8;
// if(radius > 0) {
//     const PI = 3.14;
//     let cirl = 2 * PI * radius;
// }

// let age = 11; 

// if (age >= 18){
//      message = 'Welcome';
// }else{
//      message = 'Sorry, go away.'
// }
// console.log(message);

//////////////////////////////////////////


// function outer() {
//     let num1 = 4;
//     let num2 = 8;
    
//     function getSum() {
//         console.log(num1 + num2);
//     }
//     getSum();
// }

// outer();

//////////////////////////////////////////

// let num1 = 4;
// let num2 = 8;
// function outer() {
   
//     function getSum() {
//         console.log(num1 + num2);
//     }
//     getSum();
// }

// outer();

// let checkInput = function () {
//     // получаем знчение из поля ввода
//     let value = this.value;
    
//     // если value не пустая строка, вызываем функцию
//     // псевдоложные значения '', 0, NaN, null, undefined
//     if (value) {
//     sayHello(value);
//     } else {
//     //sayHello("гость");
//     greet.textContent = "введите имя";
//     }
    
//     // очищаем поле ввода
//     fName.value = "";
//     }
    
//     fName.addEventListener("blur", checkInput);
//     lName.addEventListener("blur", checkInput);

// function sayHello(){
//     console.log(`Hello, summer`);
//     return `123`
// }

// console.log(sayHello);


/*
при нажатии на кнопку, выводм строку в консоль
*/
// function sayHello(){
//     console.log(`Helllo, summer`);
// }

// // получаем кнопку
// let btn = document.querySelector('#btn');

// // при нажатии на кнопку 
// btn.addEventListener("click", function(){
//     console.log(`Helllo, summer`);
// }
// );

1
/**
* при нажатии на кнопку выводим строку в консоль
*/
// function sayHello() {
// console.log ('Hello, summer');
// }
// // получаем кнопку
// let ctp = document.querySelector ("#ctp");
// // при нажатии на кнопку
// ctp.addEventListener('click',sayHello);


// передача функции как значения

function getSum(){
    console.log(5 + 9);
}
function getMult(){
    console.log(5 * 9);
}
function outer(userFunc){
    userFunc();
}
outer(getMult);