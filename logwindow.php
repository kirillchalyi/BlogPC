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