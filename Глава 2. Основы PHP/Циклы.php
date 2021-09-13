<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>

<?php
echo "<p>Привет мир!</p>"; // вывод сообщения
// echo "Пока мир";
?>

<?php
for ($i = 1; $i < 10; $i++)
{
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}
?>


<?php
for ($i = 1; $i < 10; $i++)
{
    echo "<tr>";
    for ($j = 1; $j < 10; $j++)
    {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
?>



</table>
</body>
</html>