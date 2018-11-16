<?php 
session_start();
  if(!$_SESSION['username']){
    header("Location: index.php");
    exit();
}
include_once("connect.php");

$id = $_GET['id'];
$query = "DELETE FROM `data` WHERE `id` = '$id'";
mysqli_query($connetion,$query);
echo "Запись удалена";
require('index.php')
?>