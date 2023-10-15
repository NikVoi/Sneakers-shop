function statusCard(){
    
    const cardWraper = document.querySelector('.basket__wraper');
    const basketEmpty = document.querySelector('[data-basket-empty]');

    const orderForm = document.querySelector('#order-form');
    const basket__totalPrice = document.querySelector('#basket__totalPrice');
    const line = document.querySelectorAll('#line');

   

    if(cardWraper.children.length > 0){
        basketEmpty.classList.add('none');
        orderForm.classList.remove('none');
        basket__totalPrice.classList.remove('none');
        
    }else{
        basketEmpty.classList.remove('none');
        orderForm.classList.add('none');
        basket__totalPrice.classList.add('none');
    }


    let cardStatus = document.querySelector('.nav__link-inf');

    

    if (parseInt(cardWraper.children.length) > 0){
        cardStatus.innerText = parseInt(cardWraper.children.length)/2;
    }
}