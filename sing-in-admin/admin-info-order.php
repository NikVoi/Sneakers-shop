<!DOCTYPE html>
<html lang="ru">
  <head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link rel='icon' href="../assets/images/sneakers.png" type="image/x-icon" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    
    <title>Админ панель | Замена дынных</title>
  </head>
  <style>
      table {
        width: 100%;
      }
      th,td{
          padding: 10px;
      }
      th{
          background: #606060;
      }
      td{
          background: #b5b5b5 ;
      }

  </style>
  <body >
    <header class="header">
      <div class="header__top">
        <div class="content">
          <div class="header__img">
          <a href="/index.php"><img src="../assets/images/logo.png" alt="logo" class="header__logo" /></a>
          </div>
          <div class="header__flex">
            <div class="header__top inf">
              <div class="inf__left">
                международный интернет-магазин кроссовок и уличной одежды
              </div>
              <div class="inf__right">
                <ul class="inf__click">
                  <li><a href="/sing-in-admin/admin-admin.php" class="inf__link"> Админ </a></li>
                  <li><a href="../index.php" class="inf__link"> Выйти </a></li>
                </ul>
              </div> <!--  inf__right -->
            </div>
            <div class="header__bot nav">
              <div class="nav__left">
                <a href="../sing-in-admin/select.php" class="nav__link"><div class="nav__btn">Запросы</div></a>
              
              </div>
            </div>
          </div><!-- header__flex -->
        </div><!-- content -->
      </div><!-- header__top -->
    </header>
    
    <section class="product">
       <table>
           <tr>
               <th>id</th>
               <th>Order_date</th>
               <th>Client_login</th>
               <th>Product_name</th>
               <th>Quantity</th>
               <th>Product_Price</th>
               <th>Product_Size</th>
               <th>UserEmail</th>
               <th>Edit</th>
               <th>Delete</th>
           </tr>
        <?php
             require_once '../assets/php/connect.php';
             
             $products = mysqli_query($connect, "SELECT * FROM Select_order");
             $products = mysqli_fetch_all($products);

             foreach($products as $product)
             { ?>
               <tr>
                   <td><?= $product[0] ?></td>
                   <td><?= $product[1] ?></td>
                   <td><?= $product[2] ?></td>
                   <td><?= $product[3] ?></td>
                   <td><?= $product[4] ?></td>
                   <td><?= $product[5] ?></td>
                   <td><?= $product[6] ?></td>
                   <td><?= $product[7] ?></td>
                   <td> <a href="/sing-in-admin/admin-update-edit.php?id=<?=$product[0]?>"> Обнавить </a></td>
                   <td> <a style="color: red;" href="/assets/php/delete-order.php?id=<?= $product[0] ?>"> Удалить </a></td>
               </tr>
             <?php 
             } 
         ?>
        </table>
    </section>
      
   
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
 
    
  </body>
</html>
