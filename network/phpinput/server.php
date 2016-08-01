<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of server
 *
 * @author changdi
 */
$raw_post_data = file_get_contents('php://input', 'r');
echo "-------\$_POST------------------\n";
echo var_dump($_POST) . "\n";
echo "-------php://input-------------\n";
echo $raw_post_data . "\n"; 
