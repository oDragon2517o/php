
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>



<?php
$tom = "Tom";
$sam = $tom;
$sam = "Sam";
echo "tom = $tom <br>";   // tom = Tom
echo "sam = $sam";              // sam = Sam
?>

<br/>
<br/>


<?php
$tom = "Tom";
$sam = &$tom;   // передача ссылки
$sam = "Sam";
echo "tom = $tom <br>";   // tom = Sam
echo "sam = $sam";              // sam = Sam
?>

<br/>
<br/>
<?php
function square($a)
{
    $a *= $a;
    echo "a = $a";
}
 
$number = 5; 
square($number);
echo "<br />number = $number";
?>
<br/>
<?php
function square2(&$a)
{
    $a *= $a;
    echo "a = $a";
}
 
$number = 5; 
square2($number);
echo "<br />number = $number";
?>

<br/>
<br/>

<?php
function &checkName(&$name)
{
    if($name === "admin") $name = "Tom";
    return $name;
}
  
$userName = "admin"; 
$checkedName = &checkName($userName);
echo "<br />userName: $userName";
echo "<br />checkedName: $checkedName";
?>

</table>
</body>
</html>