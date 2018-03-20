<?php
  session_start(); include("bd.php");
//  if (!isset($_SESSION['id_p']))
//      exit;
?>
<!DOCTYPE html>
<html>

  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Profile</title>
  <meta name="description" content="no">

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="canonical" href="/">
</head>
 <?php 
    //$result=$mysqli->query("SELECT * FROM users INNER JOIN roles ON role_id=id_role WHERE id_p=".$_SESSION['id_p'].""); 
    //$row=$result->fetch_array();
?>

  <body>    
<?php include("header.php"); ?>


    <div class="container">
      <nav class="top-menu row card">
  <ul class="top-menu__items">
    <li class="top-menu__item">Licon</li>
    <li class="top-menu__item">Icon</li>
    <li class="top-menu__item">Icon</li>
  </ul>
  <input type="text" name="search" placeholder="ПОИСК" class="top-menu__input">
</nav>
      
      <div class="row">
  <div class="col">
    <div class="card">
      <header class="card__header">
        <h6>Категории</h6>
      </header>
      <nav class="list-cards">
  <ul class="list-cards__items">
    <li class="list-cards__item"><a href="#">Карточки портфолио</a></li>
    <li class="list-cards__item"><a href="#">Карточки услуг</a></li>
    <li class="list-cards__item"><a href="#">Сообщения</a></li>
    <li class="list-cards__item"><a href="#">Далее</a></li>
    <li class="list-cards__item"><a href="#">По списку</a></li>
  </ul>
</nav>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <header class="card__header">
        <h6>Уровень компании <span class="red">89</span></h6>
      </header>
      <p>Ачивки: <a href="#">[развернуть]</a></p>
    </div>
    <div class="card">
      <header class="card__header">
        <h6>Логотип компании</h6>        
        <img src="logo" alt="Логотип компании"/>
      </header>
      <h6>Рейтинг</h6>
      <div class="card-rating__progress">
  <h2 class="card-rating__short">К</h2>
  <div class="progress">
    <div class="progress-bar"></div>
  </div>
  <h2 class="col card-rating__perc">45</h2>
</div>
<div class="card-rating__progress">
  <h2 class="card-rating__short">С</h2>
  <div class="progress">
    <div class="progress-bar"></div>
  </div>
  <h2 class="col card-rating__perc">55</h2>
</div>
<div class="card-rating__progress">
  <h2 class="card-rating__short">Д</h2>
  <div class="progress">
    <div class="progress-bar"></div>
  </div>
  <h2 class="col card-rating__perc">55</h2>
</div>
    </div>
  </div>
  <div class="col">
    <div class="card card-info">
      <header class="card__header">
  <h6>Информация</h6>
</header>
<ul class="card-info__list">
  <li class="card-info__item">Имя компании: Apple Inc</li>
  <li class="card-info__item">Имя посредника: Joseph</li>
  <li class="card-info__item">Виды услуг:
    <ol>
      <li><a href="#">Продажа техники</a></li>
      <li><a href="#">Ремонт техники</a></li>
      <li><a href="#">Производство техники</a></li>
    </ol>
  </li>
  <li class="card-info__item">Контакты: <a href="#">[развернуть]</a></li>
</ul>
    </div>
  </div>
</div>
    </div>

    <footer class="footer">

</footer>

      
  </body>
<?php $mysqli->close(); ?>
</html>
