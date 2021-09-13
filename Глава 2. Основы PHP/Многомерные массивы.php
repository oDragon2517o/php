
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>

<?php
$families = [["Tom", "Alice"], ["Bob", "Kate"]];
print_r($families[0]);  // Array ( [0] => Tom [1] => Alice )

$families = [["Tom", "Alice"], ["Bob", "Kate"]];
echo $families[0][0] . "<br />";  //Tom
echo $families[0][1] . "<br />";  //Alice
echo $families[1][0] . "<br />";  //Bob
echo $families[1][1];   //Kate

?>

<br/>
<br/>


<?php
$families = [["Tom", "Alice"], ["Bob", "Kate"], ["Sam", "Mary"]];
foreach ($families as $family)
{
    echo "<tr>";
    foreach ($family as $user)
    {
        echo "<td>$user</td>";
    }
    echo "</tr>";
}
?>



<br/>
<br/>

<?php
$phones = array(
        "apple"=> array("iPhone 12", "iPhone X", "iPhone 12 Pro") , 
        "samsumg"=>array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
        "nokia" => array("Nokia 8.3", "Nokia 3.4"));
foreach ($phones as $brand => $items)
{
    echo "<h3>$brand</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
?>

<br/>
<br/>


<?php
$gadgets = array(
        "phones" => array("apple" => "iPhone 12", 
                    "samsumg" => "Samsung S20",
                    "nokia" => "Nokia 8.3"),
        "tablets" => array("lenovo" => "Lenovo Yoga Smart Tab", 
                        "samsung" => "Samsung Galaxy Tab S5",
                        "apple" => "Apple iPad Pro"));
foreach ($gadgets as $gadget => $items)
{
    echo "<h3>$gadget</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}
?>




</table>
</body>
</html>