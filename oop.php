<?php
class Person{
    private $name;
    private $email;
    public static $ageLimit = 40;
    //private static $ageLimit = 40;

    
    public function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__ .' created<br>';

        
    }

    public function __destruct(){
        echo __CLASS__ .' destroyed<br>';
    }

    public function setName($name){
        $this->name = $name;

    }
    public function getName(){
        return $this->name.'<br>';
    }

    public function setEmail($email){
        $this->email = $email;

    }
    public function getEmail(){
        return $this->email.'<br>';
    }

    public static function getAgeLimit(){
        return self::$ageLimit;
    }

}
//static props and method
echo Person::$ageLimit;
echo Person::getAgeLimit();

//$person1 = new Person('john doe','jd@gmail.com');
//$person1->setName('John doe');
//echo $person1->getName();


//$person1->name = 'John doe';
//echo $person1->name;

class Customer extends Person{
    private $balance;

    public function __construct($name,$email,$balance){
        parent::__construct($name,$email,$balance);
        $this->balance = $balance;
        echo 'A new '.__CLASS__.' has been created<br>';
    }


    public function setBalance($email){
        $this->balance = $balance;

    }
    public function getBalance(){
        return $this->balance.'<br>';
    }
}

//$customer1 = new Customer('John Dav','dj@gmail.com',300);
//echo $customer1->getBalance();
?>