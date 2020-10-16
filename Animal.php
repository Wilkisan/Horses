<?php
header('Content-Type: text/html; charset=utf-8');
abstract class Animal{
  private $nickname;
  private $age;
  private $breed;
  function __construct($nick,$age,$breed){
    $this->nickname = $nick;
    $this->age = $age;
    $this->dreed = $breed;
  }
  function getNickname(){return $this->nickname;}
  function getAge(){return $this->age;}
  function getBreed(){return $this->breed;}
  function speak(){
    echo '...';
  }
}
class Cat extends Animal{
  private $ownerName;
  function __construct($nick,$age,$breed,$ownerName){
    parent::__construct($nick,$age,$breed);
    $this->ownerName = $ownerName;
  }
  function getOwnerName(){return $this->ownerName;}
  function run(){
   echo $this->getNickname(). " is running";
  }
  function speak(){
    echo 'Meow';
  }
}

class Bird extends Animal{
    function fly(){
    echo $this->getNickname()." is flying";
    }
    function speak(){
      echo 'chirik 2';
    }
}

class Horse extends Animal{
  function run(){
    echo $this->getNickname().'  Игого, я поскакал(а)';
  }
  function speak(){
    echo " Иго-го-гошеньки";
  }
}

class Pegasus extends Horse{
  function fly(){
    echo $this->getNickname(). '  Игого я полетел(а)';
  }
  function speak(){
    echo " Уф ё-моё, как высоко!";
  }
}

$platon = new Horse("Platon", 10,null);
$zevs = new Pegasus("Zews",11,null);
$barsik = new Cat("Barsik",4,null,"Anatoly");
$kesha = new Bird("Kesha",5,null);
echo $zevs->fly();
echo $zevs->speak();
?>
