<?php

function addLog($content){
		$filename = "log/dispatach_".date('Ymd',time()).".log";
		$file = fopen($filename, "a+");
		fwrite($file,$content."\r\n");
		fclose($file);
    }
	addLog('123');
	?>