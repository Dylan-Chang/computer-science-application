<?php

/**
 * 测试例子，同时打开两个页面，可以发现总是同时只能一个页面进入到锁区间的代码
 * @link http://code.google.com/p/phplock/
 * @author sunli
 * @svnversion  $Id: test.php 2 2009-11-24 07:14:27Z sunli1223 $
 * @version v1.0 beta1
 * @license Apache License Version 2.0
 * @copyright  sunli1223@gmail.com
 */

require 'CacheLock.php';

$lock = new CacheLock ( '/lock/', 'lockname' );
for($i=0;$i<5;$i++){
	$lock->lock ();
	
 
    //process code
    echo "<span>进入锁</span><br />\r\n";

	sleep (2); //休眠20秒，模拟并发操作
	echo "执行完成<br />\r\n";
	$lock->unlock ();
	echo "释放锁完成<br />\r\n"; 

	
   
}


