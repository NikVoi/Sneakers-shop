<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link rel='icon' href="../assets/images/sneakers.png" type="image/x-icon" >
    
    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    
    <title>Sneakers Shop | Профиль</title>
  </head>
  <body >
  <header class="header">
      <div class="header__top">
        <div class="content">
          <div class="header__img">
            <a href="../sing-in/index-sing_in.php"><img src="../assets/images/logo.png" alt="logo" class="header__logo" /></a>
          </div>
          <div class="header__flex">
            <div class="header__top inf">
              <div class="inf__left">
                международный интернет-магазин кроссовок и уличной одежды
              </div>
              <div class="inf__right">
                <ul class="inf__click">
                  <li class="inf__item">
                    <a  class="inf__link has-subnav"><?= $_SESSION["user"]["Login_users"]; ?></a>
                    <ul class="subnav">
                      <li><a href="../sing-in/profile-singIn.php" class="subnav__link"> Профиль </a></li>
                      <li><a href="../sing-in/replenishment_balance-singIn.php" class="subnav__link"> Пополнить баланс </a></li>
                      <li><a href="../index.php" class="subnav__link"> выйти </a></li>
                    </ul>
                  </li>
                </ul>
              </div> <!--  inf__right -->
            </div>
            <div class="header__bot nav">
              <div class="nav__left">
                <a href="../sing-in/product-singIn.php" class="nav__link"><div class="nav__btn">Новинки</div></a>
              </div>
    
              <div class="nav__right">
                <a href="../sing-in/select-singIn.php" class="nav__link-ico"><div class="nav__btn"><img src="../assets/images/search.png" alt="Поиск" /></div></a>
                <a href="#" class="nav__link-ico" data-modal="basket-modal"><div class="nav__btn">
                  <img src="../assets/images/basket.png" alt="Корзина" />
                  <div class="nav__link-inf">0</div>
                </div></a>
              </div>
            </div>
          </div>
          <!-- header__flex -->
        </div>
        <!-- content -->
      </div>
      <!-- header__top -->
    </header>
    
    <div class="profile__bg">
        <h1 class="profile__title">Профиль</h1>
    
        <div class="profile">
            
            <div class="profile__form">    
    
            <form class="form form__grop--content" action="/" method="post">
                <div class="form__group form__grop--md ">
                    <input class="form__control" type="text" placeholder="Ваше имя" />
                    <span class = "form__line"></span>
                </div>
    
                <div class="form__group form__grop--md">
                    <input class="form__control" type="email" placeholder="Ваш e-mail" />
                    <span class = "form__line"></span>
                </div>
    
                <div class="form__group form__grop--md">
                    <input class="form__control" type="password" placeholder="Введите пароль" />
                    <span class = "form__line"></span>
                </div>
    
                <div class="form__group form__grop--md">
                    <input class="form__control" type="password" placeholder="Подтвердите пароль" />
                    <span class = "form__line"></span>
                </div>
                <!-- <div class="form__group form__grop--md"> -->
                    <!-- <textarea class="form__control form__control--textarea" placeholder=""></textarea> -->
                    <!-- <span class = "form__line"></span> -->
                <!-- </div> -->
                </form>
    
                <div class="btn">
                    <button class="btn-reg"> Сохранить</button>
                </div> 
            </div>
            <div class="profile__avatar">
                <img src="/assets/images/img-puma.jpg" alt="" class="img">
                <label class="profile__file">
                    <input type="file"> Выбрать аватар
                </label>
            </div>
        </div>
    </div>
    
    
      
   
      <div class="modal" id = "basket-modal">
        <div class="modal__content basket-modal" >
            <h3>Ваш заказ</h3>
    
            <img src="/assets/images/close-white.png" alt="close" class="form__close">
    
            <div data-basket-empty class="basket-modal ">
                <div class="basket__empty">
                    Ваша корзина пока пуста!
                </div>
            </div>  
    
            <div class="basket__catalog">
    
                <div class="basket__wraper">
                    
    
    
                </div>
    
                <div class="line " id = "line"></div>
    
                <div class="basket__info none" id = "basket__totalPrice">
                    <div class="basket__delivery">Доставка: <p class="basket__deliveryP ">Беспалатно</p></div>
                    <div class="basket__totolPrice">Итог: <p  class = "basket__price-total">0 </p>  </div>
                </div> <!--basket__info-->
    
                <div class="line "  id = "line"> </div>
    
                <div class="basket__makinOrder none" id = "order-form">
                    <p>Оформление заказа</p>
                    <form action="">
                        <div class="form__group form__grop--md form__grop--mе ">
                            <input class="form__control form__control--black" type="tel" placeholder="Введите телефон"/>
                            <span class = "form__line"></span>
                        </div>
                    </form>
    
                    <div class="btn basket--btn">
                        <button class="btn-reg"> Закакзать </button>
                    </div>
    
                </div>
    
            </div> <!--basket__catalog-->
    
        </div> <!--modal__content-->
    </div>  <!--modal-->
    <footer>
        <div class="footer__top">
          <div class="footer__conteiner-top">
            <div class="prefooter">
              <img src="/assets/images/footer/footer-adidas.png" alt="" class="prefooter__item"/>
              <img src="/assets/images/footer/footer-new balance.png" alt="" class="prefooter__item"/>
              <img src="/assets/images/footer/footer-nike.png" alt="" class="prefooter__item"/>
              <img src="/assets/images/footer/footer-puma.png"   alt="" class="prefooter__item"/>
              <img src="/assets/images/footer/footer-jordan.png" alt="" class="prefooter__item"/>
              <img src="/assets/images/footer/footer-asics.png"  alt="" class="prefooter__item"
              />
            </div>
          </div>
        </div>
    
        <div class="footer__click " id = "btn"> 
          <img src="/assets/images/footer/arrow.png" alt="" class="footer__img">
          <div class="button__top">
            <div class="button__hiding-top"></div>
          </div> 
          <div class="button__bot">
            <div class="button__hiding-bot"></div>
          </div> 
        </div>
    
        <div class="footer__bottom" id = "hidden">
            <div class="footer__conteiner ">
              <div class="footer__list">
                <div class="footer__list-left">
                  <div class="footer__list-Leftitem"><a href="#">Online store  </a></div>
                  <div class="footer__list-Leftitem"><a href="#">How to order      </a></div>
                  <div class="footer__list-Leftitem"><a href="#">Blog              </a></div>
                  <div class="footer__list-Leftitem"><a href="#">My Accaunt       </a></div>
                  <div class="footer__list-Leftitem"><a href="#">Contact           </a></div>
                  </div>
                  <a href="#"><div class="footer__list-item"><img src="/assets/images/logo.png" alt="" width="160" height="90px"></div></a>
                <div class="footer__list-right">
                  <div class="footer__list-Rightitem"><a href="#">Shipping Policy      </a></div>
                  <div class="footer__list-Rightitem"><a href="#">Terms               </a></div>
                  <div class="footer__list-Rightitem"><a href="#">FAQ’s                </a></div>
                  <div class="footer__list-Rightitem"><a href="#">Privacy    </a></div>
                  <div class="footer__list-Rightitem"><a href="#"> Site Security    </a></div>
                </div> 
              </div>
              
              <div class="footer__nav footnav">
                <div class="footnav__line"><hr></div>
                  <div class="footnav__item">
                    <a href="https://t.me/Nik_Voi" class="footer__nav-link" target="blank"><img src="/assets/images/footer/telegram.png" alt=""></a>
                    <a href="https://www.instagram.com/nik_voi/" class="footer__nav-link" target="blank"><img src="/assets/images/footer/instagram.png" alt=""></a>
                    <a href="https://vk.com/nik_voi" class="footer__nav-link" target="blank"><img src="/assets/images/footer/vk.png" alt=""></a>
                    <a href="https://www.youtube.com/channel/UCcyJ3fTrt0mSNLJH-t3PndA" class="footer__nav-link" target="blank"><img src="/assets/images/footer/youtube.png" alt=""></a>
                  </div>
                  <div class="footnav__line"><hr></div>
                </div>
              <div class="footer__text">
                © SHELFLIFE STORE. ALL RIGHTS RESERVED
              </div>
            </div>  
      </div>
    </footer>

    <script src="/assets/js/calcBasket.js"></script>
    <script src="/assets/js/statusCard.js"></script>
    <script src="/assets/js/modal.js"></script>
    <script src="/assets/js/btn.js"></script>
    <script src="/assets/js/counter.js"></script>
    <script src="/assets/js/add-basket.js"></script>
    <script src="/assets/js/add-folow.js"></script>
    <script src="/assets/js/select.js"></script>
    <script src="/assets/js/counter-basket-modal.js"></script>
  </body>
</html>
