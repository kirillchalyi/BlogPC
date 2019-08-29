<?php
$e=$_POST['kek2'];
$e2=$_POST['kek'];

$e3=$e*$e2;
$e4=$e+$e2;
$e5=$e-$e2;
$e6=$e/$e2;

if ($_POST['umn']) {
	echo $e3; }
elseif ($_POST['plus']) {
	echo $e4;
}
elseif ($_POST['minus2']) {
    echo $e5;
}

elseif ($_POST['del']) {
	echo $e6;
}