<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9
 * Time: 14:32
 */
$color="";
echo"<table width='500' align='center' border='1'>";
for($i=0;$i<100;$i++) {
    if ($i % 2 == 0) {
        $color = "red";
    }else{
        $color = "blue";
    }
        echo "<tr onmouseover=lrow(this) onmouseout=drow(this) bgColor=".$color.">";
        for ($j = 0; $j < 10; $j++) {
            echo "<td>";
            echo $j;
            echo "</td>";
        }
        echo "</tr>";

}
echo"</table>";
?>
<script>
    var ys="";
    function lrow(obj) {
        ys=obj.bgColor;
        obj.bgColor="yellow";
    }

    function drow(obj) {
        obj.bgColor=ys;
    }

</script>
