<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of substring_bin
 * 子串与二进制
 * @author changdi
 */
require '../shared.php';

$predis = new Predis\Client($single_server);

//var_dump($predis->append('new-string-key','hello'));

//var_dump($predis->append('new-string-key','world!'));

var_dump($predis->substr('new-string-key',3,7));

var_dump($predis->setrange('new-string-key',0,'H'));

var_dump($predis->get('new-string-key'));

//var_dump($predis->setbit('another-key',2,1));
//var_dump($predis->setbit('another-key',7,7));
var_dump($predis->get('another-key'));





