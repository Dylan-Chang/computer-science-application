<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$n = 100; //上
$s = 0;
for ($i = 1; $i <= $n; $i++) {
    $s = $s + $i;
    // echo $s .'+'.$i;
}

$sum = $n * ($n + 1) / 2;
echo $s .'='.$sum; 

exit;
