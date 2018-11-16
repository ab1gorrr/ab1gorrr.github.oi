<?php  
session_start();
  if(!$_SESSION['username']){
    header("Location: login.php");
}
include_once("connect.php");
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавить запись</title>
		<link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<a href="index.php"> Назад к таблице</a>
	<form method="POST" action="add.php">

	Имя: <input type="text" name="name" placeholder="Имя">
	Фамилия: <input type="text" name="surname" placeholder="Фамилия"> <br>
	Отчество: <input type="text" name="patronymic" placeholder="Отчетсво">
	ИИН: <input type="text" name="iin" placeholder="ИИН"> <br>
	Дата рождения: <input type="date" name="date">
	Место жительства: <input type="text" name="location" placeholder="Место жительства"><br>
	Национальность: <input type="text" name="nationality" placeholder="Национальность">
	Гражданство: <input type="text" name="citizenship" placeholder="Гражданство"><br>
	Пол: <input type="text" name="gender" placeholder="Пол	">
	Контактные данные: <input type="text" name="phone" placeholder="Контактные данные"><br>
	Форма обучения: <input type="text" name="form_of_training" placeholder="Форма обучения">
	Язык обучения: <input type="text" name="education_language" placeholder="Язык обучения"><br>
	Квалификация: <input type="text" name="qualification" placeholder="Квалификация">
	Заявление: <input type="text" name="statement" placeholder="Заявление"><br>
	На базе: <input type="text" name="base" placeholder="На базе">
	Сертификат ЕНТ: <input type="text" name="cer_ent" placeholder="Сертификат ЕНТ"><br>
	Мед. Справка: <input type="text" name="med_reference" placeholder="Мед. Справка">
	Обучение за счет: <input type="text" name="due_to" placeholder="Обучение за счет"><br>	
	Социальный статус: <input type="text" name="soc_status" placeholder="Социальный статус"><br>
	Примечание: <br><textarea name="textarea" cols="40" rows="10"></textarea><br>
	<input type="submit" name="add" value="Добавить запись">
</form>
<?php 
if(isset($_POST['add']))
{
$name=trim($_POST['name']);
$surname=trim($_POST['surname']);
$patronymic=trim($_POST['patronymic']);
$iin=trim($_POST['iin']);
$date=$_POST['date'];
$location=$_POST['location'];
$citizenship=trim($_POST['citizenship']);
$nationality=trim($_POST['nationality']);
$gender=trim($_POST['gender']);
$phone=trim($_POST['phone']);
$form_of_training=trim($_POST['form_of_training']);
$education_language=trim($_POST['education_language']);
$qualification=trim($_POST['qualification']);
$statement=trim($_POST['statement']);
$base=trim($_POST['base']);
$cer_ent=trim($_POST['cer_ent']);
$med_reference=trim($_POST['med_reference']);
$due_to=trim($_POST['due_to']);
$soc_status=trim($_POST['soc_status']);
$textarea=trim($_POST['textarea']);

	$query = "INSERT INTO `data` (`name`, `surname`, `patronymic`, `citizenship`,`iin`, `date`, `location`, `nationality`, `male_or_female`, `phone`, `form_of_training`, `education_language`, `qualification`, `statement`, `base`, `cer_ent`, `med_reference`, `due_to`, `soc_status`, `note`) VALUES ('$name', '$surname', '$patronymic', '$citizenship', '$iin', '$date', '$location', '$nationality', '$gender', '$phone', '$form_of_training', '$education_language', '$qualification' , '$statement', '$base', '$cer_ent', '$med_reference', '$due_to', '$soc_status', '$textarea')";
	$result = mysqli_query($connection, $query);

if($result == true)
    echo "Информация занесена в базу данных";
else
    echo "Информация не занесена в базу данных, ошибка: " . mysqli_error($connection);

}

 ?>
</body>
</html>