// let dog = {
//     name: 'бобик',
//     age: 10,
//     color: 'blue',
//     getInfo: function () {
//         console.log('hello');
//     },
// };

// dog.getInfo();


//объявление функция ее_имя(параметр) {что делает}
// function sayHello() {
//     console.log('hello');
// }

// //вызов функции по именни ее_имя();
// sayHello();


//аргументы функции - это данные которые мы передаем функции - которые дают разный результат 

// function sayHello(userName) {
//     console.log(`Привет, ${userName}`);
// }

// sayHello("Anna");
// sayHello("Петр")

/*
//вызов функции при вводе значения в инпут
let fName = document.querySelector('#fName') //получаем инпут
let greet = document.querySelector('#greet') // получаем блок для данных

// функция формаирующая привествие

function sayHello(name = "Гость") {
    let result = `Привет, ${name}`;
    greet.textContent = result;
}


fName.addEventListener('blur', function () {
    // получаем значение из ввода фокуса
    let value = fName.value;
    if(value){
    sayHello(value);
    }
    //очищаем поле ввода
    fName.value = ""; 
});
*/

// let nums = [1, 2, 3, 4];
// let lastEl = nums.pop();
// nums.push(5);
// console.log(lastEl);
// console.log(nums);

// returt

/*
//формирование привествия
function sayHello(userName = 'гость!') {
    return `Привет, ${userName}!`;
}

// формирование разметки
function addHTLM(value) {
    console.log(`<h2>${value}/h2>`);
}

let result = sayHello("Анна");
addHTLM(result);
*/

// 



// function userInfo(userName, age) {
//     return `<p>Имя: ${userName}, Возраст: ${age}</p>`;    
// }
// console.log(userInfo("игорь", 33));

// function getSum(num1, num2, num3) {
//     let result = num1 + num2 + num3;
//     return result;
// }

// let sum1 = getSum(1, 3, 4);
// console.log(sum1);


// всплытие 

// определение функции 
// function sayHello(userName) {
//     return `Привет, ${userName}`;
// }
// console.log(sayHello("Анна"));

// функциональное выражение
// let sayHello = function (serName) {
//     return `Привет, ${userName}`;
// }

// стрелочная функция
// let sayHello = (userName) => `Привет, ${userName}!!!`;

// let bill = [399, 599, 599, 199, 199, 649, 899, 499, 1199, 11];
// let tip = 10; // 10%


// // 1 получить сумму счета 

// function getSumm(billPar) {
//     let sum = 0;
//     for (let item of billPar) {
//         sum += item;
//     }
//     console.log(sum);
//     return Math.floor(sum);
//     //  return billPar.reduce((acc, currVal) => acc + currVal);
// }

// let summBill = getSumm(bill);

// // 2 получить сумму счета с учетом чаевых

// function getSummTip(summBillpar, tipPar) {
//     let tipValue = Math.floor((summBillpar * tipPar) / 100);
//     let billTip = summBill + tipValue;
//     return {tipValue, billTip};
// }

// let totalBillTip = getSummTip(summBill, tip);
// console.log(totalBillTip);

// // сформировать для клиента данные о счете и вывести в документ

// function makeBillInfo(totalBillTipPar, summBillPar) {
//     return `
//     <div class ="bill-info">
//         <h2>Сумма счета за обед:</h2>
//         <p>Сумма счета: ${summBillPar}₽ </p>
//         <p>Сумма чаевых: ${totalBillTipPar.tipValue}₽</p>
//         <h3>Итого: ${totalBillTipPar.billTip}₽</h3>
//     </div>
//     `}
//     console.log(makeBillInfo(totalBillTip, summBill));
//     let total = makeBillInfo(totalBillTip, summBill);

//     let billContainer = document.querySelector('#bill');
//     billContainer.insertAdjacentHTML('beforeend', total);
//     billContainer.insertAdjacentHTML('beforeend', total);


function sayHello() {
    console.log ('Hello, summer');
    }
    // получаем кнопку
    let ctp = document.querySelector ("#ctp");
    // при нажатии на кнопку
    ctp.addEventListener('click',sayHello);