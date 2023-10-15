const buttons = document.getElementsByClassName('card__button-size');
const buutonDisable = document.getElementsByClassName('disabled')


for (let i = 0; i< buttons.length; i++) {
    buttons[i].addEventListener('click', () => {
        
        clearSelect();
        buttons[i].classList.add('select'); 
        
         
    });
}

function clearSelect() {
    for(let i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('select');
    }
}










