<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Документ HTML5</title>
    </head>
<body>
    
<table> 
    
 <tr><td>
     <?php
$numbers = [1, 4, 9, 16];
echo $numbers[2];   // 9
?> 
</td></tr>


 <tr><td> <?php
$numbers = [1, 4, 9, 16];
$numbers[1] = 6;
echo $numbers[1];   // 6
?> </td></tr>

 <tr><td> <?php
$numbers = [1, 4, 9, 16];
$numbers[5] = 76;
echo $numbers[5];   // 76
?> </td></tr>
 
 <tr><td><?php
$numbers = [1, 4, 9, 16];
$numbers[] = 25;
echo $numbers[4];   // 25
?>  </td></tr>
 
 <tr><td> <?php
$numbers = [1, 4, 9, 16];
$numbers[] = 25;
print_r($numbers);
?> </td></tr>
 
 <tr><td> <?php
$numbers[] = 20;
$numbers[] = 120;
$numbers[] = 720;
print_r($numbers);  
// Array ( [0] => 20 [1] => 120 [2] => 720 ) asdasd
?> </td></tr>
 




 <tr><td><h1> Оператор =></h1> </td></tr>

 
 <tr><td><?php $numbers = [0=>1, 1=>4, 2=>9, 3=>16];
// $numbers = array(0=>1, 1=>4, 2=>9, 3=>16);
print_r($numbers);
?> </td></tr>
 


 <tr><td><?php $numbers = [1=> 1, 2=> 4, 5=> 25, 4=> 16];
echo $numbers[2];   // 4
  ?></td></tr>
 
 <tr><td><?php $numbers = [4=> 16, 25, 36, 49, 64];
print_r($numbers);
  ?>  </td></tr>
 



 <tr><td><h1>Перебор массива </h1> </td></tr>
 


 <tr><td><?php
$users = ["Tom", "Sam", "Bob", "Alice"];
$num = count($users);
for($i=0; $i < $num; $i++)
{
    echo "$users[$i] <br />";
}
?></td></tr>
 

 <tr><td>
 <br /><br />

 <h1> foreach </h1> 

 
 <br />
 <?php
$users = [1 => "Tom", 4 => "Sam", 5 => "Bob", 21 => "Alice"];
$num = count($users);
foreach($users as $element)
{
    echo "$element<br />";
}
?>

 <br />
 <?php
$users = [1 => "Tom", 4 => "Sam", 5 => "Bob", 21 => "Alice"];
$num = count($users);
foreach($users as $key => $value)
{
    echo "$key - $value<br />";
}
?>




 </td></tr>

</table>

</body>
</html>