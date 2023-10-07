// Массивы
// 1
let arr = ["a", "b", "c"];
// alert(arr)
console.log(arr);

// 2
console.log(arr[0]);
console.log(arr[1]);
console.log(arr[2]);

// 3
arr = ["a", "b", "c", "d"];
let sum = `${arr[0]} + ${arr[1]} + ${arr[2]} + ${arr[3]}`;
console.log(sum);

// 4 
arr = [1, 2, 3];
sum = arr[0] + arr[1] + arr[2];
console.log(sum);

// 5
arr = [2, 5, 3, 9];
let result = arr[0] * arr[1] + arr[2] * arr[3];
console.log(result); 

// 6
arr = [2, 5, 3, 9, 19, 239, 414, 29]
console.log(arr.length --);

// 7 
arr = [2, 5, 3, 9, 19, 239, 414, 29]
let lastEl = arr[arr.length -1];
console.log(lastEl);

// 8 
arr = ["a", "b", "c"];
arr.splice (0, 3, 1, 2, 3);
console.log(arr);

// 9 
arr = [2, 5, 3, 9, 19, 239, 414, 29];
arr[0] += 3;
arr[1] += 3;
arr[2] += 3;
arr[3] += 3;
arr[4] += 3;
arr[5] += 3;
arr[6] += 3;
arr[7] += 3;
console.log(arr);

// 10
arr = [1, 2, 3];
arr[0] ++;
arr[1] ++;
arr[2] ++;
console.log(arr);

// 11
arr = [1, 2, 3];
arr.push(4,5)
console.log(arr);

// 12
arr = [];

arr[3] = 'a';
arr[8] = 'b';
console.log(arr.length --);

// Объекты
// 1
let obj = {
    1: "a",
    2: "b",
    3: "c",
}
console.log(obj);

// 2

obj = {
    a: 1,
    b: 2,
    c: 3,
}

console.log(obj.a + obj.b + obj.c);

// 3
obj = {
    '1a': 1,
    '2b': 2,
    'c-c': 3,
}

console.log(obj['1a'] + obj['2b'] + obj['c-c']); 

// 4
let user = {
    name: "Игорь",
    surName: "Пронькин",
    patronymic: "Игоревич",
}
console.log(`${user.surName} ${user.name} ${user.patronymic}`);

// 5

let today = new Date(); 
let year = today.getFullYear(); // 2020
let month = today.getMonth();
let day = today.getDate();

let date = {
    year: year,
    month: month,
    day: day,
}
console.log(`Год: ${date.year} Месяц: ${date.month} День: ${date.day}`);

// 6 
obj = {key1: 1, key2: 2, key3: 3};

result = 0;
for (let key in obj) {
    result += obj[key];
}
console.log(result);

// 7
obj = {'1a': 1, 'b2': 2, 'eee-': 3, 'd4': 4};

console.log(`к свойствам ${obj.b2}(b2) и ${obj.d4}(d4) можно обратиться через точку`);
console.log(`к свойствам ${obj['1a']}(1a) и ${obj['eee-']}(eee-) обратиться через точку нельзя`);