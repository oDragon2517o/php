<?php
$users = [];
if(isset($_GET["users"])){
  
    $users = $_GET["users"];
}
echo "В массиве " . count($users) . " элементa/ов<br>";
foreach($users as $user) echo "$user<br>";
?>