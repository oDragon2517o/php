
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>


<?php
function generateNumbers()
{
    for ($i = 0; $i <= 5; $i++) {
         
        yield $i;
    }
}
foreach(generateNumbers() as $number)
{
    echo $number; // 012345
}
?>

<br/>

<?php
function generateNumbers2()
{
    for ($i = 10; $i <= 15; $i++) {
         
        yield $i;
    }
}
 
foreach(generateNumbers2() as $index => $number)
{
    echo "$index - $number<br/>"; // 012345
}
?>


<br/>
<?php
function generateNumbers3()
{
    yield 1;
    yield from [2, 3, 4];
    yield 5;
}
 
foreach(generateNumbers3() as $number)
{
    echo $number; // 12345
}
?>

<br/>

<?php
function generateNumbers4($start, $end)
{
    for($i = $start; $i < $end; $i++){
        yield $i;
    }
}
foreach(generateNumbers4(4, 9) as $number)
{
    echo $number; // 45678
}
?>

</table>
</body>
</html>