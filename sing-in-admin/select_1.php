

<!DOCTYPE html>
<html lang="ru">
  <head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../assets/css/style.min.css">
    <link rel='icon' href="../../../assets/images/sneakers.png" type="image/x-icon" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    
    <title>Sneakers Shop | Запрос № 1</title>
  </head>
 
  <body >
  <header class="header">
      <div class="header__top">
        <div class="content">
          <div class="header__img">
          <a href="/index.php"><img src="../../../assets/images/logo.png" alt="logo" class="header__logo" /></a>
          </div>
          <div class="header__flex">
            <div class="header__top inf">
              <div class="inf__left">
                международный интернет-магазин кроссовок и уличной одежды
              </div>
              <div class="inf__right">
                <ul class="inf__click">
                  <li><a href="../../../sing-in-admin/admin-admin.php" class="inf__link"> Админ </a></li>
                  <li><a href="../../../../index.php" class="inf__link"> Выйти </a></li>
                </ul>
              </div> <!--  inf__right -->
            </div>
            <div class="header__bot nav">
              <div class="nav__left">
                <a href="../../../sing-in-admin/select.php" class="nav__link"><div class="nav__btn">Запросы</div></a>
              
              </div>
            </div>
          </div><!-- header__flex -->
        </div><!-- content -->
      </div><!-- header__top -->
    </header>
    
    <section class="product">
    <label for="formGroupExampleInput" class="form-label" >Какие предприятия изготавливают данный товар, не выше данной цены?</label>
        <form action="../assets/php/select_1.php" method="POST">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label" >Введите предприятие</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите предприятие" name = "Product_manufacturer">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Введите цену товара</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите цену товара" name = "Product_Price">
                </div>

                <button class="btn btn-primary"  type="submit">Выполнить</button>
        </form>
    </section>
  </body>
</html>