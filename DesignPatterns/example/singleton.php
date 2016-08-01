<?php

class singleton{
    private static $instance = NULL;


    private function __clone(){
        
    }
    
    private function __construct() {
        
    }
    
    public static function getInstance(){
        if(NULL === self::$instance){
            self::$instance = new self();
        }
        
        return self::$instance;
    }
    
    
}
