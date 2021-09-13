
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>


<?php
$a = 8; 
$b = 10;
 
$closure = fn($c) => $a + $b + $c;
 
$result = $closure(22); // 40
?>

<br/>
<?php
function sum($numbers, $condition)
{
    $result = 0;
    foreach($numbers as $number){
        if($condition($number))
        {
            $result += $number; 
        }
    }
    return $result;
}
 
$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
 
$positiveSum = sum($myNumbers, fn($n)=>$n > 0);
$evenSum = sum($myNumbers, fn($n) => $n % 2 === 0);
echo "Сумма положительных чисел: $positiveSum <br /> Сумма четных чисел: $evenSum";
?>


</table>
</body>
</html>