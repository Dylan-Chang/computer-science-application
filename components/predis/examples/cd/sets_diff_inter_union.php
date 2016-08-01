<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sets_diff_inter_union
 * 差集运算、交集运算以及并集运算
 * @author changdi
 */
require "../shared.php";

$predis = new Predis\Client($single_server);
var_dump($predis->sadd('skey1','a','b','c','d'));
var_dump($predis->sadd('skey2','c','d','e','f'));
var_dump($predis->sdiff('skey1','skey2'));//差集
var_dump($predis->sinter('skey1','skey2'));//并集
var_dump($predis->sunion('skey1','skey2'));//并集

