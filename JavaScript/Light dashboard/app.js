let board = document.querySelector('#board');
let colors = ['darkred', 'white', 'green', 'blue', 'aqua', 'aquamarine', 'purple', 'yellow', 'deeppink']
const SQUARES_NUMBER = 2000;
for (let i = 0; i < SQUARES_NUMBER; i++){
    let square = document.createElement('div');
    square.classList.add('square');
    square.addEventListener('mouseover', () => setColor(square));
    square.addEventListener('mouseleave', () => removeColor(square));
    board.append(square);
};

function setColor(element){
    let color = getRandColor();
    element.style.backgroundColor = color;
    element.style.boxShadow = `0 0 2px ${color}, 0 0 10px ${color}`;
}

function removeColor(element){
    element.style.backgroundColor = '#1d1d1d';
    element.style.boxShadow = `0 0 2px #000`;
}

function getRandColor() {
    let index = Math.floor(Math.random() * colors.length);
    return colors[index];
}