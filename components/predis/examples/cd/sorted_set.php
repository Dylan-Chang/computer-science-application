<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sorted_set
 *
 * @author changdi
 */
require "../shared.php";

$predis = new Predis\Client($single_server);

//some common
//var_dump($predis->zadd('zset-key1','a',3,'b',2,'c',1));
//var_dump($predis->zadd('zset-key1',3,'a',2,'b'));
//var_dump($predis->zadd('zset-key1',2,'b',1,'c'));

//var_dump($predis->zcard('zset-key1'));
//var_dump($predis->zincrby('zset-key1',3,'c'));

//var_dump($predis->zscore('zset-key','b'));
//var_dump($predis->zrank('zset-key','c'));
//var_dump($predis->zcount('zset-key',0,3));
//var_dump($predis->zrem('zset-key','b'));
//var_dump($predis->zrange('zset-key',0,-1,array( 'withscores'  => true)));

//A sample interaction showing ZINTERSTORE and ZUNIONSTORE
/*
var_dump($predis->zadd('zset-1',1,'a'));
var_dump($predis->zadd('zset-1',2,'b'));
var_dump($predis->zadd('zset-1',3,'c'));

var_dump($predis->zadd('zset-2',4,'b'));
var_dump($predis->zadd('zset-2',0,'d'));
var_dump($predis->zadd('zset-2',1,'c'));

var_dump($predis->zinterstore('zset-i',['zset-1','zset-2'])); //交集运算
*/
var_dump($predis->zrange('zset-i',0,-1,array('withscores'=>true)));
var_dump($predis->zunionstore('zset-u',['zset-1','zset-2'],array('aggregate'=>'min')));
var_dump($predis->zrange('zset-i',0,-1,array('withscores'=>true)));
var_dump($predis->sadd('set-1','a','b'));
var_dump($predis->zunionstore('zset-u2',['zset-1','zset-2','set-1']));
var_dump($predis->zrange('zset-u2',0,-1,array('withscores'=>true)));


