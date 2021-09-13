
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>


<?php
$a;
echo $a;
?>

<?php
$message;
if(isset($message))
    echo $message;
else
    echo "переменная message не определена";
?>

<br/>
<?php
$message = "Hello PHP";
if(isset($message))
    echo $message;
else
    echo "переменная message не определена";
?>

<br/>

<?php
$message = null;
if(isset($message))
    echo $message;
else
    echo "переменная message не определена";
?>

<br/>

<?php
$a=20;
echo $a; // 20
unset($a);
echo $a; // ошибка, переменная не определена
?>


</table>
</body>
</html>