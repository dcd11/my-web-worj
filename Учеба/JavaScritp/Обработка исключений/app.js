function myFunc() {
    let message = document.getElementById('message'); // поле для вывода сообщений
    message.innerHTML = ''; // очищаем сообщение
    let x = document.getElementById('demo').value; // поле ввода текста

    try{
        if(x == '') throw 'Введите значение'; // если пусто
        if(isNaN(x)) throw 'Введите число'; // не число
        if(x > 10) throw 'число слишком большое';     
        if(x < 5) throw 'число слишком маленькое';
    }catch(err){
        message.innerHTML = err;
    }finally{
        document.getElementById('demo').value = '';
    }
}