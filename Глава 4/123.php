
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>

<?php

class Account{
     
    private $sum = 0;
    function __construct($sum){
         
        $this->sum = $sum;
    }
    function getSumFrom($otherAccount, $money){
         
        $otherAccount -> sum -= $money;
        $this -> sum += $money;
    }
    function prinSum(){
        echo "На счете $this->sum у.е.<br>";
    }
}
$acc1 = new Account(100);
$acc2 = new Account(400);
 
$acc1->getSumFrom($acc2, 500);
$acc1->prinSum();    // На счете 300 у.е.
$acc2->prinSum();


?>



</table>
</body>
</html>