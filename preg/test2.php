<?php
$str = "055600";
if (preg_match('#^00#i', $str, $m)){
  echo '�ҵ��ˣ�'.substr($str,1);;
}else{
  echo 'û�ҵ�';
}