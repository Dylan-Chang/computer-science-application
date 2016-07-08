<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Superman{
    protected $power;
    
    public function __construct(array $modules) {
        $factory = new SuperModuleFactory;
        
        foreach ($modules as $moduleName => $moduleOptions){
            $this->power[] = $factory->makeModule($moduleName, $moduleOptions);
        }
    }
}

$superman = new Superman([
    'Fight' => [9,100],
    'Shot' => [99,50,2],
]);