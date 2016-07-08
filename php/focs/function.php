<?php

/*
 * Foundations of Computer Science: C Edition (计算机科学的基础) 函数库
 */

//选择排序
function SelectionSort($A, $n) {
    for ($i = 0; $i < $n - 1; $i++) {
        $small = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($A[$j] < $A[$small]) {
                $small = $j;
            }
        }

        $temp = $A[$small];
        $A[$small] = $A[$i];
        $A[$i] = $temp;
    }
    print_r($A);
    var_dump($A);
}
/*
$arr = array(6, 8, 14, 17, 23);
$arr_b = array(17, 23, 14, 6, 8);
SelectionSort($arr_b, 5);*/


function f($x) {
        $n = 1;
        if ($x % 2 == 0) $n *= 2;
        
        if ($x % 3 == 0) $n *= 3;
        
        if ($x % 5 == 0) $n *= 5;
        
        if ($x % 7 == 0) $n *= 7;
        
        if ($x % 11 == 0) $n *= 11;
        
        if ($x % 13 == 0) $n *= 13;
        
        if ($x % 17 == 0) $n *= 17;
        
        if ($x % 19 == 0) $n *= 19;
        
        return $n;
    
}
/*
$res = f(12);
var_dump($res);*/


