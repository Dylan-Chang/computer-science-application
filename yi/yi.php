<?PHP
header('Content-type:text/html;charset=utf-8');
    include_once('config/64gua.php');
	
	/*
	//随机
    $arr = array();
	$y = '';
    for($i =0;$i<6;$i++){
             
			 $y .= rand(0,1);
			
    }
	 echo $y;
	 print($code[$y]);*/

	 //入库
	 $dsn = "mysql:host=localhost;dbname=mycode";
	 $dbh = new PDO($dsn, 'root', ''); 
	 foreach($code as $key=>$value){
		  //$value = iconv('GB2312', 'UTF-8', $value); 
		// $value = mb_convert_encoding($value, "UTF-8", "GB2312"); 
		 $dbh->query("set names utf8"); 
	//	 $dbh->exec("SET CHARACTER SET UTF-8"); 
		  $rs = $dbh->exec("insert into yi set code = '{$key}',name = '{$value}'");
		//  echo $sql = "insert into yi set code = '{$key}',name = '{$value}'";exit;
		// var_dump($rs);exit;
	 }
	
?>

