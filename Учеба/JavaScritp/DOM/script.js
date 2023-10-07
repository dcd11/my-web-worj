// получение элемента по ID
// let head1 = document.getElementById("head_1");
// console.log(head1);

// head1.style.color = "blue";

// получение элементов по классу
// let headEls = document.getElementsByClassName("head");
// console.log(headEls);

// headEls.forEach((element) => {
//   console.log(element);
// });

// q u e r y S e l e c t o r - выбор ОДНОГО элемента
// выбор по тегу
// let h1 = document.querySelector("h1");
// console.log(h1);

// let par = document.querySelector("p");
// console.log(par);

// выбор по классу
// let head = document.querySelector(".head");
// console.log(head);

// выбор по ID
// let head1 = document.querySelector("#head_1");
// console.log(head1);

// выбор по сложному селектору
// let userPic = document.querySelector(".users .user-3 img");
// console.log(userPic);

// хождение по DOM дереву
// let userPic = document.querySelector(".users .user img");
// console.log(userPic);

// let userPic2 = userPic.parentElement.nextElementSibling.children[0];
// console.log(userPic2);

// q u e r y S e l e c t o r A l l - выборка нескольких элементов
// let users = document.querySelectorAll(".users .user");
// console.log(users);

// получаем каринки юзеров
// let usersPics = document.querySelectorAll(".users .user img");
// console.log(usersPics);

/*
2 задание
получите все параграфы у юзера 3*/
/*
let userPar = document.querySelectorAll(".users .user.user-3 p");
console.log(userPar);

// получаем элементы из NodeList в массив
userPar = [...userPar];

console.log(userPar);

let userParText = userPar.map(function (p) {
  return p.textContent;
});
console.log(userParText);*/

// textContent, innerText

// let pressBtn = document.querySelector("#press-btn");

// pressBtn.addEventListener("click", function(){
//     let btnText = pressBtn.textContent;    
//     console.log(btnText);
// });

// let btnText = document.querySelector("#head_1")
// pressBtn.addEventListener("click", function(){
// let btnText = pressBtn.textContent;
// console.log(btnText);
// });

// let pressBtn = document.querySelector(`#press-btn`);
// let h1Text = document.querySelector(`#head_1`)

// pressBtn.addEventListener(`click`, function() {
// let btnText = h1Text.textContent;
// console.log(btnText);

// pressBtn.textContent = btnText; 
// });

// let pressBtn = document.querySelector('#press-btn');
// let head1 = document.querySelector("#head_1")

// pressBtn.addEventListener("click", function (){
// let btnText = head1.textContent;
// console.log(btnText);
// pressBtn.textContent = btnText;
// });

// let pressBtn = document.querySelector('#press-btn');
// let head1 = document.querySelector("#head_1")

// pressBtn.addEventListener("click", function (){
// let textBtn = pressBtn.textContent;
// console.log(textBtn);
// pressBtn.textContent = head1.textContent;
// head1.textContent = textBtn;
// });
/*
///////////////////////////////
let pressBtn = document.querySelector("#press-btn");
let users = document.querySelector(".users")

//добавляем обработчик по клику
pressBtn.addEventListener("click", function(){

});
/////////////////////////////////
*/

// let pressBtn = document.querySelector("#press-btn");
// let users = document.querySelector(".users")
// // console.log(users.textContent);
// //добавляем обработчик по клику
// pressBtn.addEventListener("click", function(){
// console.log(users.textContent);
// });


// innetHTML 
// let pressBtn = document.querySelector("#press-btn");
// let users = document.querySelector(".users")
// console.log(users.textContent);
//добавляем обработчик по клику
// pressBtn.addEventListener("click", function(){
// console.log(users.innerHTML);
// textInnter = users.innerHTML;
// users.innerHTML = pressBtn;
// pressBtn = textInnter;
// });


//value 
let firstName = document.querySelector("#first-name");
let lastName = document.querySelector("#last-name");
let emalUser = document.querySelector("#email")
let lastNameError = document.querySelector("#last-name-error")
let firstNameError = document.querySelector("#first-name-error")

// focus 
// firstName.addEventListener("focus", function(){
//   console.log('Поле Активированно');
// });

// blur 
// firstName.addEventListener('blur', function(){
//  console.log(firstName.value);
// });



lastName.addEventListener('blur', function(){
  // если ничего не ввели 
  if(lastName.value === "") {
    // выводим ошибку
    console.log("Заполните пустое поле");
    lastNameError.textContent = `Введите Фамилию`;
    lastName.style.backgroundColor = "red";
  }else {
    // иначе, строка не пуста, убираем ошибку
    lastNameError.textContent = ``;
    lastName.style.backgroundColor = "white";
}});

///////////////////////////////////////////////////////////////////////////////
////  parentElement, children, nextElementSibling, previousElementSibling  ////
///////////////////////////////////////////////////////////////////////////////
// получаем родителя
// let pic1 = document.querySelector("#pic-1");
// console.log(pic1);
// console.log(pic1.parentElement);

// получаем дочерние элементы 
// let users = document.querySelector(".users");
// console.log(users.children);

// Следующий сосед
// let users = document.querySelector(".users");
// console.log(users.nextElementSibling);

// Предыдущий сосед 
// let users = document.querySelector(".users");
// console.log(users.previousElementSibling);

///////////////////////////////////////////////////////////////////////////////
//////////////////////////////     style    ///////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
// let head1 = document.getElementById("head_1")
// console.log(head1.style);
// head1.style.backgroundColor = "red";
// head1.style.padding = "20px";
// head1.style.borderBottom = "3px solid blue";


// let head2 = document.getElementById("head_2");
// console.log(head2.style);
// head2.style.backgroundColor = "aliceblue";
// head2.style.color = "black";
// head2.style.fontFamily = "Georgia";



///////////////////////////////////////////////////////////////////////////////
//////////////////////////////   classList   //////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
// let user1 = document.querySelector(".users .user-1")
// // console.log(user1.classList);

// // добавляем класс при клике на элеменет
// user1.addEventListener("click", function(){
//  user1.classList.add("hidden");
// });

// // скрываем юзера при клике на него
// // 1 выбираем всех пользователей
// let users = document.querySelectorAll(".users .user");
// console.log(users);

// //2  перебираем списком 
// users.forEach(function(user){
// //3  на каждого юзера навешиваем обработчик событий
// user.addEventListener("click", function(){
//   // 4 console.log(user.children[1].textContent);
//   user.classList.add("active");
// })
// });

// меняем по клику цвет юзера
// let users = document.querySelectorAll(".users .user")
// users.forEach(function(user){
//   user.addEventListener("click", function(){
//     if(user.classList.contains("active")){
//       user.classList.remove("active")
//     }else {
//       user.classList.add("active");
//     }
//   })
// });


// let users = document.querySelectorAll(".users .user")
// users.forEach(function(user){
//   user.addEventListener("click", function(){
//     user.classList.toggle("active");
//   })
// });


// выбираем все кнопки
let addBtns = document.querySelectorAll(".users .add-to-friends")
 addBtns.forEach(function (button){
  button.addEventListener("click", function(){
    button.parentElement.classList.toggle ("active");
    // if(button.textContent === `В друзья`){ 
    //   button.textContent = `удалить`} else {
    //     button.textContent = `В друзья`
    //   }
    button.textContent === `В друзья` ? (button.textContent = `удалить`) : (button.textContent = `В друзья`);
  })
 });

 // greate element 

// let par = document.quertySelector("<p>");
let par = document.createElement("p");

let div = document.createElement("div");


// добавляем в параграф текст
par.textContent = "Hello, Summer.";

// вставляем в див параграф 
div.innerHTML = par.outerHTML;  // outerHTML = внутренняя разметка + сама переменная

// задаем атрибуты ID & Class
div.setAttribute("id", "news-list");
div.setAttribute("class", "news-lest container");
// div.setAttribute("class", "test");

// считываем атбрибуты
// console.log(div.getAttribute("class"));

// добавляем параграфу класс 

// div.par.setAttribute("class", "par");
div.children[0].setAttribute("class", "par");


// вставка элемента в документ
// 1 получаем элемент из документа, 
// относимтельного которого будем вставлять созданный элемент
let section1 = document.querySelector("#section-1");
// 2 вставляем наш див внутрь секции последним потомком 
// section1.appendChild(div);
// section1.appendChild(par);

// let cloneDiv = div.cloneNode(true);
// section1.appendChild(cloneDiv);

// console.log(div);
// console.log(par);

section1.insertAdjacentElement('beforebegin', div);

// формирование разметки и вставка в документ 

let div1 = `<div id="news-list" class="news-list container">
                  <p class="par">Hello, Summer!!</p>
            </div>`;

section1.insertAdjacentHTML("beforeend", div1);


/**
 * динамическое добавление поля для ввода
 */

let addInput = document.querySelector("#add-input");  // кнопка
let inputPhoto1 = document.querySelector("#photo-1"); // поле для картинки
let inputParrent = inputPhoto1.parentElement; // получаем родителя поле ввода
let counterId = 1; // счетчик для ID
/**
 *  добавляем обработчик события по клику 
 */
addInput.addEventListener("click", function(event){
  counterId++; // увеличиваем значение счетчика ID 
  let cloneDiv = inputParrent.cloneNode(true);    // клонируем 
  cloneDiv.children[1].value = "";// очищаем значение value у скопированного инпута 
  cloneDiv.children[1].id = `photo-${counterId}`; // создаем новый ID 
  // вставка склонированого элемента в документ следующим соседом, после кнопки 
  addInput.parentElement.insertAdjacentElement("beforebegin", cloneDiv);
  event.preventDefault(); // отменяем стандартное поведение кнопки
});


// this & объект 
// let user = {
//   fName: "Ivan",
//   lName: "Petrov",
//   getData() {
//     console.log(`hello, ${this.fName} ${this.lName}`);
//   },
// };
// user.getData();

