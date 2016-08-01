<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hashes
 *
 * @author changdi
 */
require "../shared.php";

$predis = new Predis\Client($single_server);

//some common 常见的
/*
var_dump($predis->hmset('hash-key',array('k1'=>'v1','k2'=>'v2','k3'=>'v3')));
var_dump($predis->hmget('hash-key',array ('k2','k3')));

var_dump($predis->hlen('hash-key'));
var_dump($predis->hdel('hash-key',array('k1','k3')));
*/

//some more advanced 更高级的
var_dump($predis->hmset('hash-key2',array('short'=>'hello','long'=>1000*'1')));
var_dump($predis->hkeys('hash-key2'));
var_dump($predis->hexists('hash-key2','num'));
//var_dump($predis->hincrby('hash-key2','num'));
var_dump($predis->hexists('hash-key2','num'));


