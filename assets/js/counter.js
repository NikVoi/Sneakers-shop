window.addEventListener('click', (event) =>{
    
    let counter;

    if(event.target.dataset.action === 'plus' || event.target.dataset.action === 'minus'){
        const counterWraper = event.target.closest('.card__button-count-block');
        counter = counterWraper.querySelector('[data-counter]');
    }

    if (event.target.dataset.action === 'plus'){
        counter.innerText = ++counter.innerText;
    };

    if (event.target.dataset.action === 'minus'){

        if ( parseInt(counter.innerText) > 1){
            counter.innerTexst = --counter.innerText;
        };
    };

   


});