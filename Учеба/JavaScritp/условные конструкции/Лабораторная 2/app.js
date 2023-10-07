// 1.1
let test = 9;

if (test > 10) {
    console.log("верно");
}else{
    console.log("неверно");
}

// 1.2
if (test < 10) {
    console.log("верно");
}else{
    console.log("неверно");
}

// 1.3
if (test >= 10) {
    console.log("верно");
}else{
    console.log("неверно");
}

// 1.4
if (test <= 10) {
    console.log("верно");
}else{
    console.log("неверно");
}

// 1.5
if (test == 10) {
    console.log("верно");
}else{
    console.log("неверно");
}

// 1.6
if (test != 10) {
    console.log("верно");
}else{
    console.log("неверно");
}

// 1.7
let test1 = 10;
let test2 = 20;
if (test1 > test2) {
    console.log(`${test1} большое ${test2}`);
} else {
    console.log(`${test1} меньше ${test2}`);
}

// 1.8
let num = 4;
if (num > 0 && num <5) {
    console.log('Верно');
} else {
    console.log("Не верно");
}

// 1.9
if (num >= 10 && num <= 20) {
    console.log('Верно');
} else {
    console.log("Не верно");
}

// 1.10
let num1 = 0;
let num2 = 2;
if (num1 <= 1 && num2 >= 3) {
    console.log('Верно');    
} else {
    console.log("Не верно");
}

// 1.11
let day = 14;
if (day <= 10) {
    console.log('1 декада');
} else if (day >=11 && day <= 20) {
    console.log('2 декада');
} else if(day >= 21 && day <=31){
    console.log('3 декада');
}

// 1.12
num = 34;
if (num < 10 || num > 99) {
    console.log("не попадает в диапазон от 10 до 99");
} else if (num > 10 && num < 99) {
    let str = String(num);
    let summ = Number(str[0])+Number(str[1])
    if (summ <= 9) {
        console.log(`${summ} однозначное число`);
    } else {
        console.log(`${summ} двухзначное число`);
    }
} 

// 1.13
num = 3213130;
let check = num % 10
if (check == 0) {
    console.log("последний символ равен 0");
} else {
    console.log("последний символ не равен 0");
}

// 1.14
num = 32;
check = num % 2;
if (check == 0) {
    console.log("четное");
} else {
    console.log("нечетное");
}

// 1.15 Ой я, 1.14 решил именно таким способом, переходим к 1.16

// 1.16
check = num % 3;
if (check == 0) {
    console.log("делится");
} else {
    console.log("не делится");
}

// 1.17
let month = 11;
if (month == 12){
    console.log("Winter");
} else if (month <= 2) {
    console.log("Winter");
}else if(month >= 3 && month <= 5) {
    console.log("Spring");
}else if (month >= 6 && month <= 8) {
    console.log("Summer");
} else if (month >= 9 && month <= 11) {
    console.log("Autumn");
}

// 1.18
str = "abcde";
if (str[0] == "a") {
    console.log("yes");
} else {
    console.log("no");
}

// 1.19
num = 12345;
str = String(num);

if (str[0] == 1 || str[0] == 2 || str[0] == 3) {
    console.log("yes");
} else {
    console.log("no");
}

// 1.20
num = 345;
str = String(num);
console.log(Number(str[0]) + Number(str[1]) + Number(str[2]));

// 1.21
num = 345543;
str = String(num);
let res1 = Number(str[0]) + Number(str[1]) + Number(str[2]);
let res2 = Number(str[3]) + Number(str[4]) + Number(str[5]);

if (res1 === res2) {
    console.log("yes");
} else {
    console.log("no");
}

// 2.1
num = -3;
if (num >= 0) {
    let result = 1;
    console.log(result);
} else {
    let result = -1;
    console.log(result);
}

// 3.1
let a = 2 * (3 - 1);
let b = 6 - 2;

a == b ? console.log("a & b равны") : console.log("a & b не равны");

// 3.2
a = 5*(7-4);
b = 1+2+7;

a > b ? console.log("a больше b") : console.log("a меньше b");

// 3.3
a = 2 ** 4;
b = 4 ** 2;

a != b ? console.log("разные значения") : console.log("одинаковые значения");

// 3.4
let age = 20;

if (age < 18) {
    console.log("Доступ запрещен!");
} else {
    console.log("Контент для взрослых");
}
