// Код для скрытия футера

let button = document.getElementById("btn"),
    div = document.getElementById("hidden");

button.addEventListener('click', () => {
    if (div.classList.contains('footer-active'))
    {
        div.classList.remove('footer-active');
        button.classList.remove('click__active');
    }else{
        div.classList.add('footer-active');
        button.classList.add('click__active');
    }
})  