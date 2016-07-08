<?php 
class CdProduct{
	public $data;
	public function test(){
		return true;
	}
}

//
print_r(get_class_methods('CdProduct'));

//反射
$prod_class = new ReflectionClass('CdProduct');
Reflection::export($prod_class);


?>