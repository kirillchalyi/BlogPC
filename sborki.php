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
    <script defer src="lol2.js"></script> <!--load all styles -->
    <title>Blog</title>
  </head>
  <body> 
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-inverse"> 
   <div class="container-fluid">
   <a class="navbar-brand" href="index.php">BLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse panel" id="navbarSupportedContent">
    <ul class="navbar-right nav navbar-nav ml-auto " >
      <li class="nav-item">
          <a class="nav-link" href="index.php">Главная</a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="sborki.php">Советы<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
         <li class="nav-item">
            <a class="nav-link" href="devices.php">Девайсы</a>
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
<div id="pc1">
<div class="container">
  <div class="row centered">
    <div class="col-lg-12">
      <h1>Видео-инструкция</h1>
     <div class="embed-responsive embed-responsive-16by9">
 <iframe width="560" height="315" src="https://www.youtube.com/embed/VBhWnlIFgP8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <br><br><p>В данном видео, потробно расписано как хорошо собрать компьютер,<br> 
      поймет даже твоя бабушка :P</p>
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
  <script defer src="/js/all.js"></script> <!--load all styles -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>