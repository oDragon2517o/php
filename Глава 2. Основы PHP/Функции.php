
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>


<?php
function hello()
{
    echo "Hello PHP";
}

hello();    // вызов функции


?>


<?php
function hello2()
{
    echo "<h2>Hello PHP</h2>";
}
hello2();
hello2();
hello2();
?>



<?php
hello3();    // вызов функции
 
function hello3()
{
    echo "Hello PHP";
}
?>

<br/>
<br/>

<?php
if(true){   
    function hello4()
    {
        echo "Hello PHP2";
    }
 
    hello4();
}

?>


</table>
</body>
</html>