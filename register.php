<?
	require "db.php"; 

$data = $_POST;
if( isset($data['do_signup']) )
{

	$errors = array();
	if( trim($data['login']) == '')
	{
		$errors[] = 'Вы не ввели логин!';
	}
	if( trim($data['email']) == '')
	{
		$errors[] = 'Вы не ввели email!';
	}
	if( $data['password'] == '')
	{
		$errors[] = 'Вы не ввели пароль!';
	}
	if( $data['password2'] != $data['password'])
	{
		$errors[] = 'Пароли не совпадают!';
	}
	if( R::count('users', "login = ?", array($data['login'])) > 0)
	{
		$errors[] = 'Пользователь с таким логином уже существует, выберите другой логин';
	}
	if( R::count('users', "email = ?", array($data['email'])) > 0)
	{
		$errors[] = 'Пользователь с таким e-mail уже существует, выберите другой e-mail';
	}
	if ( empty($errors)){
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		R::store($user);
		echo '<div id="success">Вы успешно зарегестрировались!<br><a href="index.php" id="ssilka">Перейти на сайт!</a></div></div><hr>';
	}
	else {
		echo '<div id="fail">'.array_shift($errors).'</div><hr>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/reg.css">
	<title>Регистрация</title>
</head>
<body>
<div id="reg">
	<div class="reg">
			<form  action="/register.php" method="POST">
			<h1>Создайте аккаунт</h1>
				<p>Логин:
				<input type="text" name="login" value="<?php echo @$data['login']; ?>"></p>
				<p>E-mail: 
				<input type="text" name="email" value="<?php echo @$data['email']; ?>"></p>
				<p>Пароль: 
				<input type="password" name="password"></p>
				<p>Подтвердите пароль: 
				<input type="password" name="password2"></p><br><br>
				<button type="submit" class="btn btn-danger" name="do_signup">Зарегистрироваться!</button>
			
		</form>
	</div>
</div>
</body>
</html>