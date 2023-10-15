function calcBasketAndDelivery(){
    const BasketWrapper = document.querySelectorAll('.basket__product');
    const price = document.querySelector('.basket__price-total');
    const delivery = document.querySelector('.basket__deliveryP')

    let totalPrice = 0;

    BasketWrapper.forEach(function(item){

        const amountEl = item.querySelector('[data-counter__modal]');
        const priceEl= item.querySelector('.basket__price-inf');

        const currentPrice = parseInt(amountEl.innerText) * parseInt(priceEl.innerText);
      
        totalPrice  += currentPrice;
      
    })
    
    price.innerText = totalPrice + ' BYN';


    if (totalPrice >= 200){
        delivery.classList.add('free');
        delivery.innerText = 'Бесплатно :)';
    }else{
        delivery.classList.remove('free');
        delivery.innerText = '10 BYN';
    }

}