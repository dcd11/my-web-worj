// 1. Function_Scope

//These variables are SCOPED to the function
function lol() {
    let person = 'Tom';
    const age = 45;
    var color = 'teal'; // var лучше не использовать
    console.log(age);
}

// These variables are SCOPED to changeColor()
function changeColor() {
    let color = 'purple';
    const age = 19;
    console.log(age);
}

lol();
changeColor();
// age; //DOES NOT EXIST!
// color; //DOES NOT EXIST!
// person; //DOES NOT EXIST!
// /* ОТВЕТ: Данные переменные получить нельзя, т.к. их область видимости только 
//     функция, но получить их можно через return в самой функции.
// */

// let bird = 'foenix';

// function birdWatch() {
//     //this bird is scoped to birdWatch()
//     let bird = 'golden duck';
//     console.log(bird); //"golden duck"
// }
// birdWatch();
// console.log(bird); //"foenix"

// 2. Block_Scope

// // let & const are BLOCK SCOPED
// if (true) {
//     const animal = 'cat';
//     console.log(animal); //'cat'
// }
// console.log(animal); //NOT DEFINED! Такая переменная ещё не определена. она существует только в блоке if

// // VAR IS NOT BLOCK SCOPED
// if (true) {
//     var animal = 'dog';
//     console.log(animal); //'dog'
// }
// console.log(animal); //'dog', т.к. переменная определена через var, что ведет за собой риски.

// let animals = ['grizzly bear', 'panda bear', 'spectacled bear'];
// var i = 10;
// for (var i = 0; i < animals.length; i++) {
//     console.log(i, animals[i])
// }
// console.log(i) // опасность использования var, т.к. i переопределилась в цикле for.


// let animals = ['grizzly bear', 'panda bear', 'spectacled bear'];
// let i = 10;
// for (let i = 0; i < animals.length; i++) {
//   console.log(i, animals[i])
// }
// console.log(i) // В отличие от предыдущего примера здесь переопределения не происходит (в цикле свой локальный i).


// function doubleArr(arr) {
//     const result = []; //scoped to the doubleArr function
//     for (let num of arr) {
//         let double = num * 2; //scoped to this loop
//         result.push(double);
//     }
//     return result;
// }

// console.log(doubleArr([1, 1, 2, 3, 5, 8, 13]))

// 3. Lexical scope

// function outer() {
//     let movie = 'Amadeus';

//     function inner() {
//         // let movie = "The Shining";

//         function extraInner() {
//             //movie is not defined in this function
//             //but it has access to parent function's variables
//             console.log(movie.toUpperCase())
//         }
//         extraInner();
//     }
//     inner();
// }

// outer(); //'AMADEUS'

// 4. Function Expression

// // Function Statement
// function add(x, y) {
//     return x + y;
// }

// // Function Expression (Anonymous)
// const sum = function (x, y) {
//     return x + y;
// }

// // Function Expression (Named)
// const product = function multiply(x, y) {
//     return x * y;
// }

// 5. Function as Values

// function add(x, y) {
//     return x + y;
// }

// const subtract = function (x, y) {
//     return x - y;
// }

// function multiply(x, y) {
//     return x * y;
// }

// const divide = function (x, y) {
//     return x / y;
// }

// //We can store functions in an array!
// const operations = [add, subtract, multiply, divide];

// //Loop over all the functions in operations
// for (let func of operations) {
//     let result = func(30, 5); //execute func!
//     console.log(result);
// }

// // We can also store functions in objects!
// const thing = {
//     doSomething: multiply
// }
// thing.doSomething(4, 5) //20

// console.log(thing.doSomething(4, 5))

// 6. Functions as Arguments

// This function accepts another function as an argument
// function callThreeTimes(f) {
//     //And calls it 3 times:
//     f();
//     f();
//     f();
// }

// function cry() {
//     console.log("BOO HOO I'M SO SAD!");
// }

// function rage() {
//     console.log("I HATE EVERYTHING!");
// }

// function repeatNTimes(action, num) {
//     // call action (a function) num number of times
//     for (let i = 0; i < num; i++) {
//         action();
//     }
// }

// repeatNTimes(rage, 13);

// // Accepts 2 functions as arguments
// // Randomly selects 1 to execute
// function pickOne(f1, f2) {
//     let rand = Math.random();
//     if (rand < 0.5) {
//         f1();
//     } else {
//         f2();
//     }
// }

// pickOne(cry, rage); // рандомно вызовет 1 из функций.

// 7. Functioins as return values

// // This function returns a function!
// function multiplyBy(num) {
//     return function (x) {
//         return x * num;
//     };
// }

// //triple holds a function:
// const triple = multiplyBy(3);
// //we can call it:
// triple(4); //12
// triple(10); //30

// const double = multiplyBy(2);
// double(3); //6
// double(9); //18

// const halve = multiplyBy(0.5);
// halve(5); //2.5
// halve(100); //50

// // This function also acts as a "function factory"
// function makeBetweenFunc(x, y) {
//     return function (num) {
//         return num >= x && num <= y;
//     };
// }
// // This function checks if a value is between 0 and 18
// const isPersonAge = makeBetweenFunc(0, 18);
// isPersonAge(10); //true
// isPersonAge(56); //false

// const isInNineties = makeBetweenFunc(1990, 1999);
// isInNineties(1994); //true
// isInNineties(1987); //false

// const isNiceWeather = makeBetweenFunc(60, 79);
// isNiceWeather(68); //true
// isNiceWeather(98); //false

// 8. Callbacks

// function grumpus() {
//     alert("GAHHH GO AWAY!")
// }

// // setTimeout(callback, delay)
// setTimeout(function () { //we pass an anonymous callback function
//     alert("WELCOME!");
// }, 3000);

// // WELCOME отработает через 3 секунды после загрузки или обновления страницы
// // Если до этого нажать на кнопку, то она отработает ранее Welcome.

// //DON'T WORRY ABOUT ANY OF THIS SYNTAX!!
// const btn = document.querySelector('button');
// // JUST FOCUS ON THE CALLBACK WE PASS IN!
// btn.addEventListener('click', function () {
//     alert("WHY DID YOU CLICK ME!!??")
// })

// 9. Hoisting

// variables declared with var are hoisted
// console.log(animal); // animal не определена
// var animal = 'Tapir';
// console.log(animal); // Tapir


// // variables declared with let & const are not hoisted
// const shrimp = 'Harlequin Shrimp';
// console.log(shrimp);

// // function statements are hoisted
// howl(); // работает до объявления, т.к. ф-я объявлена через декларативный подход.

// function howl() {
//     console.log("AWOOOOOOO");
// }

// // function expressions are...kind of hoisted.
// // The variable is hoisted, but has a value of undefined
// // hoot() // Так как функция объявлена через переменную, то будет ошибка.
// var hoot = function () {
//     console.log("HOOOO HOOOOO")
// }
// // hoot(); //Здесь ф-ия отработает, т.к. вызвана после объявления.