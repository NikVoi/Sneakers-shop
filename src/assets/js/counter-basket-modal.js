window.addEventListener('click', (event) =>{
    
    let counter__modal;

    if(event.target.dataset.action === 'plus__modal' || event.target.dataset.action === 'minus__modal'){
        const counterWraper = event.target.closest('.card__button-count');
        counter__modal = counterWraper.querySelector('[data-counter__modal]');
    }

    if (event.target.dataset.action === 'plus__modal'){
        counter__modal.innerText = ++counter__modal.innerText;
    };

    if (event.target.dataset.action === 'minus__modal'){

        if ( parseInt(counter__modal.innerText) > 1){

            counter__modal.innerTexst = --counter__modal.innerText;

        };
       
      
    };

    if (event.target.closest('.basket__wraper')){
        console.log('in CARD!!!')
    }


});