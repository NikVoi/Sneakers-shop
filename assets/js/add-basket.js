const basketModal = document.querySelector('.basket__wraper')

window.addEventListener('click', (event)=>{
    if(event.target.hasAttribute('data-basket')){
        
        const card = event.target.closest('.card');

        const productInfo = {
           id: card.dataset.id,
           imgSrc: card.querySelector('.card__img').getAttribute('src'),
           size: card.querySelector('.select').innerText,
           title: card.querySelector('.header-inf__title').innerText,
           color: card.querySelector('.card__button-color').innerText,
           price: card.querySelector('.card__price').innerText,
           availability: card.querySelector('.comment__availability').innerText,
           gender: card.querySelector('.comment__gender').innerText,
           counter: card.querySelector('[data-counter]').innerText, 
        };

        // const itemIntCard = basketModal.querySelector('[data-id = "' + productInfo.id + '"]');
        const itemIntCard = basketModal.querySelector(`[data-id = "${productInfo.id}"]`);

        // if(itemIntCard){
        //    // const counterElement = itemIntCard.querySelector('[data-counter]');
        //    // counterElement.innerText = parseInt(counterElement.innerText) + parseInt(productInfo.counter);
        // } else{
            const cartItemHTML = 
            `
            <div class="line"></div>
                <div class="basket__product" data-id = "${productInfo.id}">
                    <div class="basket__left">    
                        <img src="${productInfo.imgSrc}" alt="" class="basket__img">
                    </div>
    
                    <div class="basket__right">   
                        <div class="basket__title" name = "BasketProductName">${productInfo.title}</div>
                        
                        <div class="basket__block"> <p>Количесво: </p>
                            <div class="card__button-count" data-counter__modal  name = "BasketProductCounter"> ${productInfo.counter}</div>
                        </div>
                    
                        <div class="basket__price">Цена: <p class = "basket__price-inf" name = "BasketProductPrice"> ${productInfo.price} </p></div>
    
                        <div class="baskrt__color">Цвет: <div class="blok__color"></div></div>
    
                        <div class="baskrt__size">Размер: <p name = "BasketProductSize"> ${productInfo.size} </p> </div>

                        <button class="basket__delete" data-delete> <img src = "/assets/images/close.png"> </button>
                    </div>    
                </div> <!--basket__product-->
            `;
            
            basketModal.insertAdjacentHTML('beforeend', cartItemHTML)

        // }

        card.querySelector('[data-counter]').innerText = '1'; 
        
        statusCard();
        calcBasketAndDelivery();
    }
})


// const button__delete = document.querySelectorAll('.basket__delete');


// button__delete.forEach(item => {
//     console.log('cliked')   
//     $('basket__wraper').on('click', 'basket__product', event =>{
//         console.log('cliked')
//         event.target.closest('.basket__product').remove();
//     })
// })





