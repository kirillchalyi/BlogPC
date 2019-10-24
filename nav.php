<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-inverse"> 
   <div class="container-fluid">
   <a class="navbar-brand" href="index.php">BLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse panel" id="navbarSupportedContent">
    <ul class="navbar-right nav navbar-nav ml-auto">
      <li class="nav-item ">
          <a class="nav-link" href="index.php">Главная<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item ">
          <a class="nav-link" href="news.php">Новости<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="sborki.php">Советы</a>
      </li>
      <li class="nav-item dropdown">
         <li class="nav-item">
            <a class="nav-link" href="devices.php">Девайсы</a>
      </li>
      <div class="dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Комплектующие</a>
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
          <a class="nav-link" id="L2" href="control/logout.php">Выход</a>
      </li>
      <?endif ;?>
</div>
</div>
</nav>