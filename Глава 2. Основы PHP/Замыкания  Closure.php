
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>


<?php
$number = 89;
 
$showNumber = function()
{
    echo $number;
};
 
$showNumber();
?>
<br/>


<?php
$number = 89;
 
$showNumber = function() use($number)
{
    echo $number;
};
 
$showNumber();
?>
<br/>

<?php
$a = 8; 
$b = 10;
 
$closure = function($c) use($a, $b)
{
    return $a + $b + $c;
};
 
$result = $closure(22); // 40
echo $result;
?>
<br/>


<?php
$number = 89;
 
function hh() 
{
    
    echo $number;
};
 

hh();

?>
<br/>



</table>
</body>
</html>