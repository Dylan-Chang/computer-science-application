<?php

/* 
 * 容器
 */


class Container{
    protected $binds;
    protected $instances;
    
    public function bind($abstract,$concrete){
        if($concrete instanceof Closure){
            $this->binds[$abstract] = $concrete;
        }else{
            $this->instances[$abstract] = $concrete;
        }
    }
    
    public function make($abstrace, $parameter=[]){
        if(isset($this->instances[$abstrace])){
            return $this->instances[$abstrace];
        }
        
        array_unshift($parameter, $this);
        
        return call_user_func_array($this->binds[$abstrace], $parameter);
    }
    
    
}

$container = new Container;
$container->bind('superman', function($container,$moduleName){
    return new Superman($container->make($moduleName));
});
$container->bind('xpower', function($container){
    return new Xpower;
});

$superman_1 = $container->make('superman','xpower');
$superman_2 = $container->make('superman','xpower');

