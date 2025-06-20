<?php
namespace model;

class Admin{
    public $id;
    public $username;
    public $password;
    public $isRoot;

    public function __construct($username,$password){
    $this ->username = $username;
    $this ->password = $password;
    }

}


?>