<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User{
    // Properties are attributes belongs to a class    
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is function that runs when an object is created
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // method is a function that is belongs to a class
    function set_name($name){
        $this->name = $name;
    }

    function get_name($name){
        $this->name = $name;
    }
}

$user1 = new User('Michael', 'michael@email', 'michael');
$user2 = new User('Chael', 'chael@email', 'chael');

// $user1 -> set_name('Michael');
// $user2 -> get_name('Mych');

// var_dump($user1);
// var_dump($user2);

// echo $user1 -> email;
// echo $user2 -> email;

// Inheritance

class Employee extends User {

    public $title;

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Mych', 'mych@email', 'mych', 'programmer');

var_dump($employee1);

?>