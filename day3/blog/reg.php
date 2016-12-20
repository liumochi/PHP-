<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$repass=$_POST['repass'];
		if($pass==$repass){
			$sql="select * from user where name='$name'";
			$query=mysqli_query($link,$sql);
			$arr=mysqli_fetch_array($query);
			if($arr){
				echo "<script>alert('重名')</script>";
				echo "<script>location='reg.php'</script>";
			}else{
				$arr=array('%','#','=');
				$flag=true;
				for($i=0;$i<strlen($name);$i++){
					for($j=0;$j<count($arr);$j++){
						if($name[$i]==$arr[$j]){
							$flag=false;
						}
					}
				}
				if($flag==false){
					echo "<script>alert('用户名非法')</script>";
					echo "<script>location='reg.php'</script>";
				}else{
					$sql="insert into user(id,name,pass) values(null,'$name','$pass')";
					$query=mysqli_query($link,$sql);
					if($query){
						echo "<script>location='login.php'</script>";
					}else{
						echo "<script>location='reg.php'</script>";
					}
				}
			}
		}else{
			echo "<script>alert('密码不相同')</script>";
			echo "<script>location='reg.php'</script>";
		}
	}
?>


<meta charset="utf-8">
<form action="reg.php" method="post">
	用户名:<input type="text" name="name"><br />
	密码:<input type="password" name="pass"><br />
	重复密码:<input type="password" name="repass"><br />
	<input type="submit" name="sub" value="注册">
</form>