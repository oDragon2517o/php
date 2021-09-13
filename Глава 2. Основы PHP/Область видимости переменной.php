
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>

<?php
$condition = true;
if($condition){
     
    $name = "Tom";
}
echo $name; // Tom

echo "<br/>";

$i = 6;
switch($i){
     
    case 5: $name = "Tom"; break;
    case 6: $name = "Bob"; break;
    default: $name = "Sam"; break;
}
echo $name; // Bob
?>

<br/>
<br/>


<?php
function showName(){
    $name2 = "Tom";
    echo $name2;
}
 
showName();
echo $name2; // так написать нельзя, так как 
            // переменная $name существует
            // только внутри функции showName(
?>
<br/>

<?php
function getCounter()
{
    static $counter = 0;
    $counter++;
    echo $counter;
}
getCounter(); // counter=1
getCounter(); // counter=2
getCounter(); // counter=3
?>
<br/>

<?php
$name3 = "Tom";
function hello()
{
    echo "Hello " . $name3;
}
hello();
?>

<br/>


<?php
$name = "Tom";
function hello2()
{
    global $name;
    echo "Hello " . $name;
}
hello2();    // Hello Tom
?>

</table>
</body>
</html>