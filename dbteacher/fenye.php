<?php
	include "conn.php";
	
	if(isset($_GET['p'])){
		$page=$_GET['p'];
	}else{
		$page=1;
	}
	
	$pagesize=10;
	$pp=($page-1)*$pagesize;
	
	$sql="select count(*) as allnum from fenye ";
	$query=mysqli_query($link,$sql);
	$rs=mysqli_fetch_array($query);
	
	$lastpage=ceil($rs[allnum]/$pagesize);
	//echo $lastpage;
	//die();
	$sql="select * from fenye limit $pp,$pagesize";
	$query=mysqli_query($link,$sql);
	echo "<table align='center' width='500' border=1 cellspacing=0>";
	while($rs=mysqli_fetch_array($query)){
	//echo $sql;
	//die();
	
	//$_GET['p']?$_GET['p']:1
	
	// for($i=0;$i<50;$i++){
		// $fyname='laoshan'.$i;
		// $sql="insert into fenye(fyid,fyname) values(null,'$fyname')";
		// mysqli_query($link,$sql);
	// }
	/*
	分页（1:当前页显示多少条 $pagesize=10 
	    2:$page=$_GET[p] 
	    3:总共有多少页 ceil($allnum/$pagesize)
	    select * from fenye limit ($page-1)*$pagesize,$pagesize
	    ）
	http://localhost/fenye.php?p=*/
?>
	<tr>
		<td><?php echo $rs['fyid']?></td>
		<td><?php echo $rs['fyname']?></td>		
	</tr>

<?php
	}
	echo "<tr>";
	
	echo "<td colspan='2'>";
	echo "<a href='?p=1'>首页</a>";
	echo "<a href='?p=".(($page>1)?$page-1:1)."'>上一页</a>";
	echo "<a href='?p=".(($page>=$lastpage)?$lastpage:$page+1)."'>下一页</a>";
	echo "<a href='?p=$lastpage'>末页</a>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
?>