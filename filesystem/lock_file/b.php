<?php
$file = "temp.txt";
$fp = fopen($file , 'r');
if(flock($fp,LOCK_SH | LOCK_NB)){
	echo fread($fp , 100);
	flock($fp , LOCK_UN);
}else{
    echo "LOCK file failed....\n";	
}
fclose($fp);