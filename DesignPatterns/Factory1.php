<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface IUser{
    function getName();
}

class User implements IUser{
    public function __construct($id) {
 
    }
    
    public function getName() {
        return  "Jack";
    }   
}

class UserFactory{
    public static function create($id){
        return new User($id);
    }
}

$uo = UserFactory::create(1);
echo($uo->getName()."\n");

?>