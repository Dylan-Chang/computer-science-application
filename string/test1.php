<?php
//php中怎么去除数字前面的0
$w = '605';
echo preg_replace('/^0+/','',$w);
exit;