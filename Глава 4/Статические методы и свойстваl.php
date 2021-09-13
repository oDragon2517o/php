<?php
class Person
{ 
    public $name;
    private $id;
    private static $counter=0;
      
    function __construct($name)
    {
        self::$counter++;
        $this->id = self::$counter;
        $this->name = $name;
    }
     
    static function getCounter()
    {
        return self::$counter;
    }
    function getId()
    {
        return $this->id;
    }
}
$tom = new Person("Tom");
$bob = new Person("Bob");
echo "$tom->name имеет id: " . $tom->getId() . "<br>";
echo "$bob->name имеет id: " . $bob->getId() . "<br>";
echo "Всего пользователей: " .  Person::getCounter();
?>