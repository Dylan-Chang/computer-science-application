<?php
$file = "temp.txt";
$fp = fopen($file,'w');
if(flock($fp , LOCK_EX)){
	fwrite($fp , "abs\n");
	sleep(10);
	fwrite($fp , "123\n");
}
fclose($fp);