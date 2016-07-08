<?php
class Example
{
   public static function factory($type)
   {
	   if(include_once 'Drivers/' . $type .'.php'){
		   $classname =   $type;
		   return new $classname;
	   }else{
		   echo 'error';
	   }
	   
   }   
}

$mysql = Example::factory('MySQL');