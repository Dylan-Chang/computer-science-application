<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of list
 *
 * @author changdi
 */
require '../shared.php';

$predis = new Predis\Client($single_server);
//var_dump($predis->rpush('list-key','last'));
//var_dump($predis->lpush('list-key','first'));

//var_dump($predis->rpush('list-key','new last'));
var_dump($predis->lrange('list-key',0,-1));
//var_dump($predis->lpop('list-key'));
//var_dump($predis->rpop('list-key'));

var_dump($predis->lrange('list-key',0,-1));

var_dump($predis->rpush('list-key','a','b','c'));

var_dump($predis->lrange('list-key',0,-1));

var_dump($predis->ltrim('list-key',2,-1));

var_dump($predis->lrange('list-key',0,-1));