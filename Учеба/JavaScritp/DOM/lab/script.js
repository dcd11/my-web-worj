/// 1

let elem1 = document.getElementById("elem1")
let elem2 = document.getElementById("elem2")
let elem3 = document.getElementById("elem3")
console.log(elem1, elem2, elem3);

/// 2

let firstPar = document.getElementById("block").getElementsByTagName("p")[0];
console.log(firstPar);

/// 3

let firstP = document.querySelector(".block p")
console.log(firstP);