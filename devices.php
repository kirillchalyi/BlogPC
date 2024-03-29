<?php 
require('control/login.php');
 ?>
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="lol2.js"></script> <!--load all styles -->
    <title>Blog</title>
  </head>
  <body> 
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-inverse"> 
   <div class="container-fluid">
   <a class="navbar-brand" href="index.php">BLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse panel" id="navbarSupportedContent">
    <ul class="navbar-right nav navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link" href="index.php">Главная</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="sborki.php">Советы</a>
      </li>
      <li class="nav-item dropdown">
         <li class="nav-item active">
            <a class="nav-link" href="devices.php">Девайсы<span class="sr-only">(current)</span></a>
      </li>
     <div class="dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Комплектующие</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
                 <a class="dropdown-item" href="#">Видеокарты</a>
                 <a class="dropdown-item" href="#">Процессоры</a>
                 <a class="dropdown-item" href="#">Материнские платы</a>
  </div>
</div>
 <?php if ($_SESSION==null): ?>
       <li class="nav-item">
          <a class="nav-link" id="L1" href="#">Логин</a>
      </li>
       <? else: ?>
      <li class="nav-item">
          <a class="nav-link" id="L1" href="logout.php">Выход</a>
      </li>
      <?endif ;?>
</div>
</div>
</nav>
<div id="window">
  <img id="closeicon" class="btn-danger" src="/image/close2.png" href="#" alt="">
    <div class = "form">
      <p id="log">Логин</p>
      <form>
    <input type="login" name="login" required="true"  placeholder="Логин" ><br>
    <input type="password" name="password" required="true" placeholder="Пароль" ><br>
    <a href="#" id="ssilka">Забыли пароль?</a>
    <button type="submit" class="btn btn-danger">Войти на сайт!</button><br>
    </form>
    <p id="ssilka">Нет аккаунта?<a href="#">  Зарегестрируйтесь!</a></p>
 </div>
</div>
<div id="AlloyFPS">
  <div class="container">
    <div class="row centered">
      <div class="col-lg-12">
          <h1>Hyperx Alloy FPS</h1>
            <p>Надежность, Качетсво, Скорость.</p>
                <a href="alloyfps.html"><button type="button" class="btn btn-danger" >Подробнее</button></a>
      </div>
    </div>
  </div>
</div>
<div id="Rival600">
  <div class="container">
    <div class="row centered">
      <div class="col-lg-12">
        <h1>SteelSeries Rival 600</h1>
            <p>Ошеломительный дизайн, RGB</p>
                 <button type="button" class="btn btn-danger">Подробнее</button>
      </div>
    </div>
  </div>
</div>
<div id="Kraken">
  <div class="container">
    <div class="row centered">
      <div class="col-lg-12">
        <h1>Razer Kraken PRO</h1>
            <p>Услышьте шаги противника на другом конце карты</p>
                <button type="button" class="btn btn-danger">Подробнее</button>
      </div>
    </div>
  </div>
</div>
<div id="f">
  <div class="container">
    <div class="centered">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>