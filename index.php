﻿<?php 
@session_start();
require('control/login.php');
 ?>
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="lol2.js"></script> <!--load all styles -->
    <title>Blog</title>
  </head>
  <body> 
<? require ('nav.php') ?>
<div id="window">
  <img id="closeicon" class="btn-danger" src="/image/close2.png" href="#" alt="">
    <div class = "form">
      <p id="log">Логин</p>
      <form action="index.php" method="POST">
    <input type="login" name="login" required="true" value="<?php echo @$data['login'];?>" placeholder="Логин" ><br>
    <input type="password" name="password" required="true" value="<?php echo @$data['password'];?>" placeholder="Пароль" ><br>
    <a href="#" id="ssilka">Забыли пароль?</a> 
    <button type="submit" class="btn btn-danger" name="do_login">Войти на сайт!</button><br>
    </form>
    <p id="ssilka">Нет аккаунта?<a href="register.php">  Зарегестрируйтесь!</a></p>
 </div>
</div>
<div id="headerwrap">
  <div class="container">
    <br><br>
    <div class="row">
      <div class="col-lg-12 col-lg-offset-2 ">
        <h1>Разбираться в компьютерах - просто!</h1>
      </div>
    </div>
  </div>
</div>
  <div class="container w">
  <div class="row centered">
     <br><br>
   <div class="col-lg-4">
   <i class="fas fa-laptop"></i>
    <h4>С чего начать?</h4>
      <p>Если ваш уровень знаний ещё не соответствует требованиям, возможно вас заинтересует проводимый набор на стажировку (trainee). Срок стажировки один месяц. 
      </p>
   </div>
   <div class="col-lg-4">
      <i class="fas fa-heart"></i>
     <h4>Помощь</h4>
     <p>Мы всегда рады помочь своим клиентам в правильной сборке компьютера,
     чтобы они не потратили свои деньги "на ветер"</p> 
   </div>
    <div class="col-lg-4">
      <i class="fas fa-trophy"></i>
     <h4>Магазины</h4>
     <p>Наш сайт подскажет вам самые лучшие магазины,
      где вы сможете купить лучший товар по самой низкой цене!
     </p> 
   </div>
 </div>
 <br><br>
</div>
<div id="pc">
  <div class="container centered ">
      <h4>Рекомендуемые сборки</h4>
          <div class="row centered">
      <div class="col-lg-4" >
        <div class="tilt">
          <a href="#"><img src="image/pc1.png" alt="pc" style="width: 450px" ></a>
        </div>
         <p id="ee">Сильный ПК</p><p id="eee">~1000$</p>
      </div>
      <div class="col-lg-4">
        <div class="tilt">
          <a href="#"><img src="image/pc2.png" alt="pc" style="width: 450px"></a>
        </div>
        <p id="ee">Средний ПК</p><p id="eee">~700$</p>
      </div>
      <div class="col-lg-4 ">
        <div class="tilt">
          <a href="#"><img src="image/pc3.png" alt="pc" style="width: 450px"></a>
        </div>
         <p id="ee">Слабый ПК</p><p id="eee">~400$</p>
      </div>
    </div>
  </div>
</div>
<div id="devices">
  <div class="container centered">
    <br><br>
     <div class="row centered">
        <div class="col-lg-12 ">
      <h2>Так же у нас есть рекомендации по девайсам</h2>
        <p>Девайсы это сплошная субьективщина,
        но для каждого человека можно найти идеал</p>
       
        <p><br><br></p>
        </div>
        
          <a href="devices.html"><img src="image/devices.jpg" alt="device"  width="1100px"></a>
      
     </div>
  </div>
</div>
<? require ('footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script scr="script.js"></script>
  </body>
</html>