
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>

<?php
function hello($name)
{
    echo "<h2>Hello $name</h2>";
}
 
hello("Tom");
hello("Bob");
hello("Sam");
?>

<?php
function displayInfo($name, $age)
{
    echo "<div>Имя: $name <br />Возраст: $age</div><hr>";
}
 
displayInfo("Tom", 36);
displayInfo("Bob", 39);
displayInfo("Sam", 28);
?>


<?php
function displayInfo2($name, $age = 18888)
{
    echo "<div>Имя: $name <br />Возраст: $age</div><hr>";
}
 
displayInfo2("Tom", 36);
displayInfo2("Sam");
?>

<br/>
<br/>



<?php
function displayInfo3($name, $age = 18)
{
    echo "<div>Имя: $name <br />Возраст: $age</div><hr>";
}
 
displayInfo3(age: 23, name: "Bob");
displayInfo3(name: "Tom", age: 36);
displayInfo3(name: "Alice");
?>

<br/>
<br/>

<?php
function sum(...$numbers)
{
    $result = 0;
    foreach($numbers as $number) {
        $result += $number;
    }
    echo "<p>Сумма: $result</p>";
}
sum(1, 2, 3);
sum(2, 3);
sum(4, 5, 8, 10);
?>

<br/>
<br/>

<?php
function sum2(...$numbers)
{
    $result = 0;
    foreach($numbers as $number) {
        $result += $number;
    }
    echo "<p>Сумма: $result</p>";
}
$numbers = [3, 5, 7, 8];
sum2(...$numbers);           // 23
?>

<br/>
<br/>


<?php
function getAverageScore($name, ...$scores)
{
    $result = 0.0;
    foreach($scores as $score) {
        $result += $score;
    }
    $result = $result / count($scores);
    echo "<p>$name: $result</p>";
}
getAverageScore("Tom", 5, 5, 4, 5);
getAverageScore("Bob", 4, 3, 4, 4, 4);
?>

</table>
</body>
</html>