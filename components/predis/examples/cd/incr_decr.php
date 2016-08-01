<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of incr
 *
 * @author changdi
 */
//require __DIR__.'/shared.php';
require '../shared.php';

$predis = new Predis\Client($single_server);
var_dump($predis->get('key'));
var_dump($predis->incr('key'));
//var_dump($predis->incr('key',15));
var_dump($predis->decr('key'));