<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sets
 *
 * @author changdi
 */
require "../shared.php";

$predis = new Predis\Client($single_server);
var_dump($predis->sadd('set-key','a','b','c'));
var_dump($predis->srem('set-key','c','d'));
var_dump($predis->srem('set-key','c','d'));
var_dump($predis->scard('set-key'));
var_dump($predis->smembers('set-key'));
var_dump($predis->smove('set-key','set-key2','a'));
var_dump($predis->smove('set-key','set-key2','c'));
var_dump($predis->smembers('set-key'));


