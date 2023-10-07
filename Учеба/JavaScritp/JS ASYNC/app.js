// // стек вызова функций
// function sum() {
//     return 2 + 2;
// };

// function outer() {
//     console.log(sum());
// }
// outer();

// стек вызовов
// 0 
// 1 outer()
// 2 outer(), sum()
// 3 outer()
// 4 

// переполнение стека, рекурскивная функци
// let counter = 0;
// function sayHello() {
//     console.log("Hello");
//     counter++;
//     if(counter === 5){
//         return
//     }
//     sayHello();
// };
// sayHello();

//white 
// let counter = 0;
// white(true){console.log("hello");
//     if (counter === 5){
//         break
//     }
//     counter++;};

// setTimeout 
// console.log('hello');
// setTimeout(function(){
//     console.log('winter');
// }, 2000);
// console.log('summer');



// получаем эелемент для вставки данных
let countryEl = document.querySelector('#country')
console.log(countryEl);

// функция для обработки данных и отображения в документе
function showData(data){
    console.log(data);




    // формируем текст для вывода в документа
    let output = `<div class="country">
                <div class="images">
                <img scr="${data.flags.svg}" alt="${data.flags.alt}"> 
                <img scr="${data.coatOfArms.svg}" alt="">
                </div>
                <h2>${data.translations.rus.official}${data.flag} </h2>
                <p>Столица: <b><span>${data.capital.join (", ")}</span> </b></p>
                 <p>Площадь: <span>${data.area.toLocaleString()}</span> кв/км</p>
                 <p>Население: <span>${data.population.toLocaleString()}</span> чел.</p>
                 <p>Регион: <span>${data.region}</span></p>
                 <p>Соседние страны: <span>${data.borders ? data.borders.join (", ") : "нет"}</span> </p>
                 <p>Регион: <span>${data.timezones.join(", ")}</span></p>
                 </div>`
    countryEl.insertAdjacentHTML("beforeend", output);
};

//функция для получения данных с сервера
async function whereIAm(country){
    // отправляем запрос на внешний сервер
    let response = await fetch(`https://restcountries.com/v3.1/name/${country}`);
    // получаем данные 
    let data = await response.json();
    console.log(data);
    // показываем данные в документе
    showData(data[0]);
};

whereIAm("russia");
whereIAm("brazil");
whereIAm("belarus");
//whereIAm("rim");
whereIAm("papua")


