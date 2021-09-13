
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>

<?php
$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
echo $countries["Spain"];   // Madrid
echo "<br />";
$countries["Spain"] = "Barcelona";
echo $countries["Spain"];   // Barcelona
?>

<br/>
<br/>

<?php
$words = ["red" => "красный", "blue" => "синий", "green" => "зеленый"];
 
foreach($words as $english => $russian)
{
    echo "$english : $russian<br />";
}
?>
<br/>
<br/>

<?php
$data = [1=> "Tom", "id132" => "Sam", 56 => "Bob"];
echo $data[1];  // Tom
echo "<br />";
echo $data["id132"];    // Sam

?>


</table>
</body>
</html>