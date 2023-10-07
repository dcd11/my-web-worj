// 1.1
for (let i = 1; i < 101; i++){
    console.log(i);
}

// 1.2
for (let i = 11; i < 34; i++){
    console.log(i);
}

// 1.3
for (let i = 0; i < 101; i +=2){
    console.log(i);
}

// 2.1
let i = 10;
while (i >= 1) {
console.log(i);
i--;
}

// 2.2
i = 10;

while (i >= 1) {
console.log(i);
i--;
}

// 2.3
i = 10;

while (i >= 1) {
console.log(i);
i--;
}

// 2.4
i = 10;

while (i >= 1) {
console.log(i);
i--;
}

// 3.1
let sum = 0;
for(let i = 10; i <=50; i++){
    sum = sum +=i;
}
console.log(sum);

// 3.2

let a = 1;
let b = 20;
let multi = a;
for (let i = a +1; i <= b; multi *= i++){
    console.log(multi);
} 

// 3.3

sum = 0;
for(let i = 2; i <= 100; i += 2){
    sum = sum +=i;
    console.log(sum);
}

// 3.4
sum = 0; 
for(let i = 1; i <= 99; i += 2){
    sum = sum +=i;
    console.log(sum);
}

// 4.1
arr = ['a', 'b', 'c', 'd', 'e'];
for(let i = 0; i < arr.length; i++){
    console.log(arr[i]);
}

// 4.2
arr = [1, 2, 3, 4, 5];

for (let i = 0; i < arr.length; i++) {
console.log(arr[i]);
}
// длина строки не может быть равно числу из массива

// 4.3
arr = [1, 2, 3, 4, 5];
for (let element of arr){
    if(element % 2)
    console.log(element);
}

//4.4
sum = 0;
for (let i = 0; i < arr.length; i++){
    sum += arr[i];
    console.log(sum);
}

// 4.5
multi = 1;
for (let i = 0; i < arr.length; i++){
    multi *= arr[i];
    console.log(multi);
}


// 5.2
arr = [1, 2, 3, 4, 5]
sum = 0
for (let element of arr){
    sum = sum + element;
    console.log(sum);
}

// 5.1
arr = ['a', 'b', 'c', 'd', 'e'];s
for (let element of arr){
    console.log(element);
}