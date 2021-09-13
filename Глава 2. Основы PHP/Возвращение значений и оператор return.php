
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>


<?php
function add($a, $b)
{
    return $a + $b;
}
 
$result2 = add(5, 6);
echo $result2;           // 11
?>
<br/>
<br/>

<?php
function add2($a, $b)
{
    $sum = $a + $b;
    echo "sum = $sum<br />";
}
 
$result = add2(5, 6);



if($result === null)
    echo "result равен null";
else
    echo "result не равен null";
?>


</table>
</body>
</html>