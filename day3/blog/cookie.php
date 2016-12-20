<?php
	//cookie  ---设置cookie值 读取cookie值
	setcookie('ss','123'); //ss=123
	if(isset($_COOKIE['ss'])){
		echo "ok";
	}else{
		echo "error";
	}
	
?>