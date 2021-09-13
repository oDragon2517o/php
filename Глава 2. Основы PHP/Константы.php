
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>

<?php
const PI = 3.14;
echo PI;
?>

<br/>
<?php
define("NUMBER", 22);
echo NUMBER;    // 22
?>
<br/>

<?php
echo "Cтрока " . __LINE__ . " в файле " . __FILE__;
?>
<br/>

<?php
const PI2 = 3.14; 
if (!defined("PI2"))
    define("PI2", 3.14);
else
    echo "Константа PI уже определена";
?>

</table>
</body>
</html>