<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		setcookie('id',null);
		setcookie('name',null);
		
		echo "<script>location='index.php'</script>";
	}

?>