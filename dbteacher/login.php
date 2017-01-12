<?php
	include "conn.php";
	if(isset($_GET['uri'])){
		$uri=$_GET['uri'];
	}else{
		$uri="index.php";
	}
	if(isset($_POST['sub'])){
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$uri=$_POST['uri'];
		$sql="select * from user where uname='$name' and pass='$pass'";
		
		
		$query=mysqli_query($link,$sql);
		$rs=mysqli_fetch_array($query);
		//var_dump($rs);
		//die();
		if($rs){
			setcookie('id',$rs['uid'],time()+60);
			setcookie('name',$rs['uname'],time()+60);
			echo "<script>location='$uri'</script>";
		}
		
	}
?>

<meta charset='utf-8'>
<form action="login.php" method="post" id="f1">
	<input type="hidden" name="uri" value="<?php echo $uri?>">
	用户名:<input type="text" name="name"><br />
	密码:<input type="password" name="pass" id="p1"><br />
	<input type="submit" name="sub" value="登录">
</form>