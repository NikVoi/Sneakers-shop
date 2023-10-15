const folowModal = document.querySelector('.basket__wraper')

window.addEventListener('click', (event)=>{

    if(event.target.hasAttribute('data-folow')){
        
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

        console.log(card);


        const cartItemHTML = 
        `

            <div class="wish_list__item item">
                <div class="item__img"> <a href="catalog-info.html"><img src="${productInfo.imgSrc}" alt=""></a></div>

                <div class="item__contents">
                    <div class="item__title">Название: <p> <a href="catalog-info.html"> ${productInfo.title} </p> </a></div>
                    <div class="item__price">Цена: <p>${productInfo.price}</p></div>
                    <div class="item__status">Статус: <p>Есть в наличии</p></div>
                    <div class="card__button-size-block"> Размеры:
                        <ul>
                            <li class="card__button-size select" data-size="${productInfo.size}"> ${productInfo.size} </li>
                        </ul>
                        
                    </div> <!--card__button-size-block-->
                    <div class="card__button-color-block"> Цвет:
                        <ul>
                        <li class="card__button-color red " data-color=""> <a href="#"></a> </li> 
                        <li class="card__button-color blue" data-color="">       <a href="#"></a> </li>  
                        <li class="card__button-color grey select" data-color="">       <a href="#"></a> </li>  
                        </ul>
                    </div>
                    <button class="catalog__folow item__folow active"></button>
                    <button data-basket class="catalog__basket catalog__basket--basket"></button>
                </div>
            </div>
            `;


        basketModal.insertAdjacentHTML('beforeend', cartItemHTML)
    
    };
})