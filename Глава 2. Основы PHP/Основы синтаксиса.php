<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h1>Сайт на PHP</h1>
<?php
echo "Привет мир!";
?>

<body>
<h1>
<?php
echo "Первый сайт на PHP";
?>
</h1>
<div>
<?php
echo "<h2>Заголовок параграфа</h2>";
echo "Текст параграфа";
?>
</div>


<h1>
<?= "Первый сайт на PHP"; ?>
</h1>
<div>
2 + 2 =  <?= 2+2 ?>
</div>


<?php
echo "<p>Привет мир!</p>"; // вывод сообщения
// echo "Пока мир";
?>


<?php
echo "<p>Привет мир!</p>"; // вывод сообщения
/*
многострочный комментарий
вывод результата арифметического выражения
echo "2 + 2 = " . (2+2);
*/
?>

<?php
$num_1 = 11;
$num_2 = 35;
 
echo "num_1 = $num_1  num_2=$num_2";
?>


</body>
</html>