<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		$sql="delete from blog where bid='$id'";
		//echo $sql;
		$query=mysqli_query($link,$sql);
		if($query){
			echo "<script>location='index.php'</script>";
		}else{
			echo "删除失败";
		}
	}

?>