<?php
$str = "055600";
if (preg_match('#^00#i', $str, $m)){
  echo '找到了：'.substr($str,1);;
}else{
  echo '没找到';
}