<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<?php
$name = "не определено2";
$age = "не определен";
if(isset($_POST["name"])){
  
    $name = $_POST["name"];
}
if(isset($_POST["age"])){
  
    $age = $_POST["age"];
}
echo "Имя: $name <br> Возраст: $age";
?>
<h3>Форма ввода данных</h3>
<form method="POST">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Возраст: <input type="number" name="age" /></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>