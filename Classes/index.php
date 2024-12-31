<?php
class Person{
    private $name;
    private $age;
    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    function getAgeName(){
        return $this->name && $this->age;
    }
}
$person=new Person("FrJ", "20");
echo $person->getAgeName();
?>