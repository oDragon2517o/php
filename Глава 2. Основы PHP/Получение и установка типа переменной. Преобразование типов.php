
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>


<?php
$a = 10;
$b = "10";
echo gettype($a); // integer
echo "<br>";
echo gettype($b);  // string
?>

<br/>
<?php
$a = 10.7;
settype($a, "integer");
echo $a; // 10
?>
<br/>
<?php

$boolVar = false;
$intVar = (int)$boolVar; // 0
echo "boolVar = $boolVar<br>intVar = $intVar";
?>
</table>
</body>
</html>