<?php

/**
 * �������ӣ�ͬʱ������ҳ�棬���Է�������ͬʱֻ��һ��ҳ����뵽������Ĵ���
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
    echo "<span>������</span><br />\r\n";

	sleep (2); //����20�룬ģ�Ⲣ������
	echo "ִ�����<br />\r\n";
	$lock->unlock ();
	echo "�ͷ������<br />\r\n"; 

	
   
}


