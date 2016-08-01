<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of list_pop_movement
 *
 * @author changdi
 */
require "../shared.php";

$predis = new Predis\Client($single_server);
//var_dump($predis->rpush('list','item1'));
//var_dump($predis->rpush('list','item2'));
//var_dump($predis->rpush('list2','item3'));
//var_dump($predis->brpoplpush('list2','list',1));
//var_dump($predis->brpoplpush('list2','list',1));
var_dump($predis->brpoplpush('list','list2',1));

var_dump($predis->blpop(['list','list2'],1));
var_dump($predis->blpop(['list','list2'],1));
var_dump($predis->blpop(['list','list2'],1));
var_dump($predis->blpop(['list','list2'],1));

var_dump($predis->lrange('list',0,-1));
var_dump($predis->lrange('list2',0,-1));