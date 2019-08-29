<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Калькулятор</p>
	<form method="post" action="kek.php">
<input type="text" name="kek2"><br><br>
<input type="text" name="kek"><br>
<p>Что хотите сделать?</p>
<input type="checkbox" name="plus"> plus <br>
<input type="checkbox" name="minus2">minus <br>		
<input type="checkbox" name="umn"> umn <br>
<input type="checkbox" name="del"> del <br> <br>
<button type="submit">Рассчитать</button>
</form>

	<?php
	$cifra[]=1;
	$cifra[]=2;
	$cifra[]=3;
	$cifra[]=4;
	$cifra[]=5;
	$cifra[]=6;
	$cifra[]=7;
	foreach ($cifra as $value) 
	if ($value>=2) {
	echo "<b>$value </b><br>";
	}
	?>

	<? 
	class User
	{
		public $name;
		public $surname;
		public $login;
		public $password;

	function __construct($name, $surname, $login, $password)
			{
	  				$this->name="$name";
	  				$this->surname="$surname";
	  				$this->login="$login";
	  				$this->password="$password";
			}

	function getInfo() 
			{
				$information="{$this->name}"."{$this->surname}"."{$this->login}"."{$this->password}";
				return $information;
			}
	}
	
	$user = new User("Vanya ","Antonov ","Vanya228 ","kekekkekek </br>");
	echo $user->getInfo();

	

	class Moderator extends User 
	{
		public $info;
		public $rights;

		function __construct($name, $surname, $login, $password, $info, $rights)
		{			parent::__construct($name, $surname, $login, $password);
					$this->info=$info;
					$this->rights=$rights;
		}
		function getinfo(){
					$information=parent::getInfo();
					$information .="$this->info"."$this->rights";
					return $information;
		} 
	}

$moder = new Moderator("Kirill ","Chalyi ", "Chel ", "Kek ", "Moderator ", "True ");
echo $moder->getInfo();


?>

</body>
</html>
