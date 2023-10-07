let fName = document.querySelector("#fname");
let fNameError = document.querySelector("#fname-p");
fName.addEventListener('blur', function(){
    if(fName.value === ""){
    //console.log("Error");
    fNameError.textContent = `Введите имя`;
    fNameError.style.fontFamily = `Poppins`;
    fName.setAttribute("placeholder", `Заполните поле`)
    fName.setAttribute("class", "error")
    }else{
    fNameError.textContent = ``
    fName.setAttribute("class", "")    
    } 
});

let lName = document.querySelector("#lname");
let lNameError = document.querySelector("#lname-p")
lName.addEventListener('blur', function(){
    if(lName.value === ""){
    // console.log("error");
    lNameError.textContent = `Введите фамилию`
    lNameError.style.fontFamily = `Poppins`;
    lName.setAttribute("placeholder", `Заполните поле`)
    lName.setAttribute("class", "error")
   // lName.style.border = `1px solid red`;
   // lName.style.background = `url(images/icon-error.svg) no-repeat center right`;
   // lName.style.backgroundPosition = `right 10px center`;
    }else{
    lNameError.textContent = ``
    lName.setAttribute("class", "")
  //  lName.style.border = ``;
  //  lName.style.background = ``;
  // lName.style.backgroundPosition = ``;
    }
});

let eMail = document.querySelector('#email');
let eMailError = document.querySelector("#email-p")
eMail.addEventListener("blur", function(){
if (eMail.value.includes('@')) {
   // console.log('has @');
   eMailError.textContent = ``
   eMailError.style.fontFamily = `Poppins`;
   eMail.setAttribute("class", "");

}else{
    //console.log("error");
    eMailError.textContent = `неверная почта`;
    eMailError.style.fontFamily = `Poppins`;
    eMail.setAttribute("class", `error`);
    eMail.setAttribute("placeholder", `Заполните поле`)
}
});

let pWord = document.querySelector("#pword");
let pWordError = document.querySelector("#pword-p");
pWord.addEventListener('blur', function(){
    if (pWord.value.length >= 8){
    pWord.setAttribute("class", ``);
    pWordError.textContent = '';
}else{
    //console.log("error");
    pWordError.textContent = `Пароль не может быть короче 8 символов`;
    pWordError.style.fontFamily = `Poppins`;
    pWord.setAttribute("class", `error`);
}
});
/**
 * 
 * сделать кнопку не активной не получилось, думаю до понедельника ) 
 * 
let btnReg = document.querySelector("#btnreg")
btnReg.addEventListener("mousemove", function(){
    if(pWord.value.length >= 8 && lName.value.length >= 1 && fName.value.length >= 1 && eMail.value.includes('@')){
        btnReg.setAttribute("type", "submit")
    }else{
       btnReg.setAttribute("type", "")
    }
    });
*/