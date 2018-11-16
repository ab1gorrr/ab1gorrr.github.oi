<?php 
session_start();
  if(!$_SESSION['username']){
    header("Location: login.php");
    exit;
  }
  require("table.teg.php");
  require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблица</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
       
    </div>
    <a href='logout.php' class='btm btm-lg btm-primary'>Выйти из системы</a>
   <a href="add.php" class="btm">Добавить запись</a>
    <?php
  $result = mysqli_query($connection,"SELECT * FROM data");
  
  echo "<table class='tb1' border='1'>
  <tr class='pole'>
  <th>Имя</th>
  <th>Фамилия</th>
  <th>Отчество</th>
  <th>ИИН</th>
  <th>Квалификация</th>
  <th>Место жительства</th>
  <th>Контактные данные</th>
  <th>Форма обучения</th>
  <th>Язык обучения</th>
  <th>Номер заявления</th>
  <th>На базе</th>
  <th>Заявление</th>
  <th>Функции</th>
  </tr>";

  while($row = mysqli_fetch_array($result))
  {
    echo "<tr class='cell'>";
    echo "<td>" . $row[$name] . "</td>";
    echo "<td>" . $row[$surname] . "</td>";
    echo "<td>" . $row[$patronymic] . "</td>";
    echo "<td>" . $row[$iin] . "</td>";
    echo "<td>" . $row[$qual] . "</td>";
    echo "<td>" . $row[$location] . "</td>";
    echo "<td>" . $row[$phone]. "</td>";
    echo "<td>" . $row[$form] . "</td>";
    echo "<td>" . $row[$lang] . "</td>";
    echo "<td>" . $row[$receipt] . "</td>";
    echo "<td>" . $row[$base] . "</td>";
    echo "<td>" . $row[$statement] . "</td>";
    echo "<td><a onclick='if(confirm('Уверен, что хочешь удалить?')) href=delete.php?id=".$row['id']."><img src='style/icons8.png' width='25px'></a></td>";
    echo "</tr>";
  }
  echo "</table>";

  mysqli_close($connection);
  ?>
</body>
</html>
