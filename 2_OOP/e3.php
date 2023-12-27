<?php

class Person {
    public function greet() {
        return "Hello $this->name";
    }
}

class User {
    public $type;
}

class Admin extends Person {
    public $name;
    
}

$user = new User();
$user->type = new Admin();
echo $user->type->greet();

?>