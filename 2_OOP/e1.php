<?php
class User {
    public $type;
}

class Admin {
    public function greet() {
        echo "Hello, Admin!";
    }
}

$user = new User();
$user->type = new Admin();

echo $user->type->greet();

?>