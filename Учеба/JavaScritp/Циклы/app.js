// for (начальные команды; условие окончания; команды после прохода) {
//    тело цикла
// }

// for(let i = 1000; i > 0; i -=5 ){
//     console.log(i);
// }

// let arr = [100, 200, 150, 300, 400];

// for of - для работы с массивами
// for ( let element of arr){
//     console.log(element);
// }

// for - in - для работы с объектами
/* 
let user = {firstName: 'Игорь', lastName: 'Пронькин', age: 34};
for(let key in user){
    console.log(key, user [key]);
}
*/
/*
while ( пока выражение истинно ) {
    к выполняем этот код циклически;
    в начале каждого цикла проверяем выражение в круглых скобках
}
*/

/*
let i = 1;
while (i <= 5) {
    console.log(i);
    i++;
}
*/

// let arr = [100, 490, 234, 456, 123, 12332];
// console.log(arr);

// for(let i = 0; i < arr.length; i++){
//     console.log(arr[i]);
// }


// let arr = [100, 490, 234, 456, 123, 12332, 1453];
// console.log(arr);

// let sum = 0;
// for(let element of arr){
//     sum = sum + element
//     console.log(sum);
//     // if (element % 2 === 0) {
//     //     console.log(element);
//     }

// for(let element of arr){
//     if (element % 2 === 0) {
//         continue
//     }
//     console.log(element);
// }


// break - выход из цикла
// continue - переход к следующей итерации


// for(let i = 1; i <= 9; i++){
//     for(let j = 1; j <= 3; j++){
//             document.write(i)
//     }
// }
// let num;
// for(let i = 1; i <= 9; i++){
//     num = 7;
//     console.log(num);
// }

// console.log(num);

// for (i = 0; i < 10; i++) {
//     console.log(i);
// }

// let cats = [
//     {
//     name: "Ллойд",
//     color: "Черный",
//     age: 12,
//     city: "Москва",
//     owner: "Василий",
//     },
//     {
//     name: "Барсик",
//     color: "Серый",
//     age: 6,
//     city: "Москва",
//     owner: "Анна",
//     },
//     {
//     name: "Мурка",
//     color: "Белый",
//     age: 2,
//     city: "Самара",
//     owner: "Инна",
//     },
//     ];

let cats = [
{
name: "Ллойд",
color: "Черный",
age: 12,
avatart: "img/cat1.jpg",
owner: {
name: "Василий",
city: "Москва",
phones: [333, 543, 123],
},
},
{
name: "Барсик",
color: "Серый",
age: 6,
avatart: "img/cat2.jpg",
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
avatart: "img/cat3.jpg",
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
avatart: "img/cat4.jpg",
owner: {
name: "Николай",
city: "Москва",
phones: [345, 678, 543],
},
},
];

let catsStr = "";
for (let cat of cats) {
    let ownerPhones = ``;
    for(let phone of cat.owner.phones)
    {ownerPhones += `<li>phone</li>`;}
    
    catsStr += `
    <div class="cats">
        <img src="${cat.avatart}">
        <h2>Кличка: <span> ${cat.name}</span></h2>
        <p>Цвет шерсти: <span> ${cat.color}</span></p>
        <p>Возраст: <span> ${cat.age}</span></p>
        <div> class="cat-owner">
            <h3>Данные о владельце:</h3>
            <p>Имя: <span>${cat.owner.name}</span></p>
            <p>Город проживания: <span>${cat.owner.city}</span></p>
            <h4>Телефоны для связи:<h4>
            <ol class="phones">
            ${ownerPhones}
            </ol>
        </div>
    </div>
    `;
}

// получаем со страницы контейнер и вставляем строку в документ
let catsContainer = document.querySelector("#cats-container");
catsContainer.insertAdjacentHTML("beforeend", catsStr);
