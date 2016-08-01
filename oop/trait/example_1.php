<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of example_1
 *
 * @author changdi
 */

class Base{
    public function sayHello(){
        echo "hello";
    }    
}

trait SayWorld{
    public function sayHello(){
         parent::sayHello();
         echo 'world!';
    }
        
}

class MyHelloWorld extends Base{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
