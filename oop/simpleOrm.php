<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 简单的ORM模型
 */

abstract class ActiveRecord{
    protected static $table;
    protected $fieldvalues;
    
    public $select;
    static function findById($id){
      //  $query = "select * from ". static: $table." where id = $id";
        $query = "select * from ".  self::$table." where id = $id";
        return self::createDomin($query);
    }
    
    private static function createDomin(){
        
    }
}

/**
 * Description of simpleOrm
 *
 * @author changdi
 */
class simpleOrm {
    //put your code here
}
