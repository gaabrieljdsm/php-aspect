<?php

namespace Aspect;

use Aspect\Model;

class User extends Model {
    private $name;
    private $email;

    public function setName($name = "") 
    {
        $this->name = $name;
    }

    public function setEmail($email = "") 
    {
        $this->email = $email;
    }

    public function create($name, $email) 
    {
        $this->setName($name);
        $this->setEmail($email);
        
        $this->persist();
    }
}