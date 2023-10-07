let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
let mix = ["hello", 45, null, 0, "", true, [1, 2, 3]];
let numbers = [1, 5, 2, 4, 5, 2, 1, 5, 7, 0, 2];
let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let cats = ["Барсик", "Мурка", "Тимоха", "Антоха", "Толик"];


// forEach
// const arra1 = ["a", "b", "c", "d"];
// function printRoConsole(char) {
//     console.log(char.toUpperCase());

// }

// arra1.forEach(printRoConsole);

// pets.forEach(function(pet){
//     console.log(pet.toUpperCase());
//     });


cats = [
{
name: "Ллойд",
color: "Черный",
age: 12,
avatar: "img/1.jpg",
owner: {
name: "Василий",
city: "Москва",
phones: [333, 543, 123, 87876],
},
},
{
name: "Барсик",
color: "Серый",
age: 6,
avatar: "img/2.jpg",
owner: {
name: "Анна",
city: "Москва",
phones: [523, 653, 532],
},
},
{
name: "Мурка",
color: "Белый",
age: 2,
avatar: "img/3.jpg",
owner: {
name: "Инна",
city: "Самара",
phones: [187, 466, 643],
},
},
{
name: "Пусик",
color: "Серый",
age: 5,
avatar: "img/4.jpg",
owner: {
name: "Николай",
city: "Москва",
phones: [345, 678, 543],
},
},
];


// let catNames = cats.map(function(cat){
//     return cat.owner.name;
// });

// console.log(catNames);

// let catPrice = cats.map(function(cat){
//     return cat.price;
// })


// определение функции
// function getSum(num1, num2) {
//     return num1 + num2;
// };

// функциональное выражение
// let getSum = function(num1, num2) {
//     return num1 + num2;
// };

//стрелочная функция

// getSum = (num1, num2) => {
//     return num1 + num2;
// };
// console.log(getSum(3, 6));

// let sayHi = (name) => (console.log('Hi, Man'));


// let catsPrice = cats.map((cat) => cat.price * cat.qty); 
// console.log(catsPrice);

let sum = numbers.reduce(function(acc, currVal){
return acc + currVal;
});
console.log(sum);

sum = numbers.reduce((acc, currVal) => acc + currVal);
console.log(sum);