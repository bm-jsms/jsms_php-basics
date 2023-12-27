<?php
// scope

class User {
    # public // accessible from anywhere
    # private // accessible only from inside the class
    # protected // accessible from inside the class and from classes that extend this class
    public $paginate = 10;
    private $name = 'Josué';
    protected $email = 'email@email.com';
};

$user = new User();

echo $user->paginate; // 10
echo $user->name; // error
echo $user->email; // error


?>