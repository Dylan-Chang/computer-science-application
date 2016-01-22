<?php

$db = mysql_connect('localhost','root','');
mysql_select_db('mycode',$db);
$rs = mysql_query('select * from t');
print_r($rs);
