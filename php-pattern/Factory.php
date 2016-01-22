<?php

//基本的工厂类
class Fruit{
	function __autoload(){
		echo 'aaa';
	}
}

class FruitFactory{
    public static function factory(){
		return new Fruit();
	}      
}

$instance = FruitFactory::factory();
echo get_class($instance);



