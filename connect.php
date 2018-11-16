<?php 
//$connetion = mysqli_connect('localhost','admin','123');
//$select_db = mysqli_select_db($connetion, 'mydb');

$server = '192.168.100.3';
$user = 'mysql';
$password = 'kgu2018kz';
$db = 'mydb';

$connection = mysqli_connect($server, $user, $password);

if(!$connection)
		die('Ошибка подключения к серверу баз данных.');


$conn_db != mysqli_select_db($connection, $db);
if($conn_db)
		die(' База данных не найдена или отсутствует доступ.');
?>