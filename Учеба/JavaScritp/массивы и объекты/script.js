// let str = 'Ivan'
// console.log(str.length);


let numbers = [1, 5, 2, 4, 5, 2, 1, 5, 7, 0, 2];
// console.log(numbers);

let mix = ["hello", 45, null, 0, "", true, [1, 2, 3]];
// console.log(mix);

// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// console.log(fruits);
// console.log(fruits[2]);
// console.log(fruits[4]);
// console.log(fruits[0]);
// console.log(fruits.length);
let cats = ["Барсик", "Мурка", "Тимоха", "Антоха", "Толик"];
let pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
// pets[2] = "kokoc";
// console.log(pets)

let animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
// console.log('Животные: ' + animals[1] + ', ' + animals[3] + ', ' + animals[5] + '!');

// let output = `Животные: ${animals[1]}, ${animals[3]}, ${animals[5]}!`
// console.log(output);


// //добавление элемента в конец массивка - push

/*
    <form>
        <input type="text" id="push-item"><br><br>
        <input type="button" id="push-btn" value="Добавить в массив">
    </form>
    <h3 id="arr-output"></h3>
*/
// let newArrlength = animals.push('mouse');
// console.log(animals);
// console.log("Новая длина массива animals:", newArrlength);

/* Добавление введенного значения в конец массива

pop - удаление элемента с конца массива

*/

 
// let fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
/*

let pushItem = document.querySelector('#push-item');
let pushbtn = document.querySelector('#push-btn');
let arrOutput = document.querySelector('#arr-output');
//первоначальный массив - вывод

arrOutput.textContent = fruits.join(", ");
// console.log(pushItem);

pushbtn.addEventListener('click', function () {
    let value = pushItem.value;
    console.log(value);
    fruits.push(value);
    console.log(fruits);
    console.log(fruits[fruits.length - 1]);

    // arrOutput.insertAdjacentHTML('beforeend', value);
    arrOutput.textContent = fruits.join(", ");

    pushItem.value = '';
});

let popBtn = document.querySelector('#pop-btn');
arrOutput = document.querySelector('#arr-output');
arrOutput.textContent = fruits.join(", ");
pushbtn.addEventListener('click', function () {
fruits.pop();

arrOutput.textContent = fruits.join(", ");
});
arrOutput.textContent = fruits.join(", ");

// let lastEl = fruits.pop();
// console.log(lastEl);
// console.log(fruits);

кнопки добавления и удаления из массива методом паш и поп
*/

pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
mix = ["hello", 45, null, 0, "", true, [1, 2, 3]];
numbers = [1, 5, 2, 4, 5, 2, 1, 5, 7, 0, 2];
fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
cats = ["Барсик", "Мурка", "Тимоха", "Антоха", "Толик"];

// сoncat - соедение массивов в скобка указывается массив который хотим добавить, через запятую можно добавлять отдельный данные или несколько массивов.
// let newArr = cats.concat(pets)
// console.log(newArr);


// join - преовращение массива в строку
// let catsStr = cats.join();
// console.log(catsStr);

// копирование массива - 1 способ
/*
let newAnimals = animals.concat();
animals.pop();
console.log(animals);
console.log(newAnimals);
*/

// 2 способ
// let newAnimals = animals.slice();

// slice копирование массива или его части (указывается в скобках через запятую начало и конец куска массива)
/*
let newFruits = fruits.slice(-3);
console.log(newFruits);
*/

// splice извлечение (вырезать) данных из массива в скобках указывается с какого элемента начинается удаление и вторым числом - количество элементов которые надо удалить. Третьим значением можно добавить элементы в массив (см. пример ниже)
/*
let delItems = pets.splice(2, 3);
console.log('удаленные элементв', delItems);
console.log('исходных массив', pets);
*/
/*
let delItems = pets.splice(2, 2, "camel", "duck");
console.log('удаленные элементв', delItems);
console.log('исходных массив', pets);
*/

/*
fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
let newFruits1 = fruits.splice(1, 1);
console.log(fruits);
let newFruits2 = fruits.splice(2, 1);
console.log(fruits);
let newFruits = fruits.concat(newFruits1, newFruits2);
console.log(newFruits);
*/


// форма сплайс

// // pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];

// let petsContainer = document.querySelector("#pets");
// let addPets = document.querySelector("#add-pets");

// // при клике выводим часть массива в документ
// addPets.addEventListener("click", function () {
   
//     // вырезаем первые 3 элемента из массива
//     let output = pets.splice(0, 3);
//     let outputStr = "<span>" + output.join("</span><span>") + "<span>";

//     /* 
//     пример работы через точку 
//     let outputStr = "<p>" + pets.splice(0, 3).join("</p><p>") + "</p>";
//     */

//     console.log(outputStr);
//    // размещаем в контейнере на странице 
//    petsContainer.insertAdjacentHTML("beforeend", outputStr);

//    // если массив пуст блокируем кнопку
//    if (pets.length === 0) {
//     // addPets.disabled = true;    
//     addPets.style.display = "none";
//    }
// }); 



// sort
// fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];

// fruits.sort()
// console.log(fruits);

// numbers = [5, 3, 1, 12, 14, 2, 22, 29, 19, 41, 42, 18, 3, 6]
// numbers.sort();
// console.log(numbers);

// const Arrays
// const fName = 'Иван';
// fName = "Irina";  --- don't work

// const fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
// fruits.pop();
// console.log(fruits);

// объекты

let firstName = 'Igor';
let lastName = 'Pronkin';
let age = 34;
let phone = '8-916-341-38-35';
let city = 'Moscow';
let street = 'Chertanovskaya';

let student = {
    firstName: "Igor",
    lastName: "Pronkin",
    age: 34,
    phone: "8-916-341-38-35",
    city: "Moscow",
    street: "Chertanovskaya",
};

console.log(student);

// массив объектов
let users = [
    {
    fName: "Иван",
    lName: "Иванов",
    },
    {
    fName: "Анна",
    lName: "Иванова",
    },
    {
    fName: "Сергей",
    lName: "Сидоров",
    },
    ];

    console.log(student.phone);

    let prop = 'city';
    console.log(student[prop]);

    let fNames = `<p>${users[0].fName}</p>`;
    console.log(fNames);