<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9
 * Time: 13:47
 */
if(isset($_GET['sub'])){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    $ysf=$_GET['ysf'];
    $sum=0;
    if(is_numeric($num1)  &&  is_numeric($num2)){
        if($num2=0 && ($ysf=='/' || $ysf=='%')){
            $message="除数不能为0";
        }else{
            switch($ysf){
                case"+":
                    $sum=$num1+$num2;
                    break;
                case"-":
                    $sum=$num1-$num2;
                    break;
                case"*":
                    $sum=$num1*$num2;
                    break;
                case"/":
                    $sum=$num1/$num2;
                    break;
                case"%":
                    $sum=$num1%$num2;
                    break;
            }
        }

    }else{

    }



}
?>

<meta charset="utf-8">
<table width="500" align="center" border="1">
    <caption><h1>计算器</h1></caption>
    <form action="02.php" method="get">
        <tr>
            <td>
                <input type="text"name="num1" value=<?php echo $num1;?>>
            </td>
            <td>
                <select name="ysf" id="">
                    <option value="+" <?php if($ysf=='+'){echo'selected';}?>>+</option>
                    <option value="-" <?php if($ysf=='+'){echo'selected';}?>>-</option>
                    <option value="*" <?php if($ysf=='+'){echo'selected';}?>>*</option>
                    <option value="/" <?php if($ysf=='+'){echo'selected';}?>>/</option>
                    <option value="%" <?php if($ysf=='+'){echo'selected';}?>>%</option>
                </select>
            </td>
            <td>
                <input type="text" name="num2" value<?php echo $num2;?>>
            </td>
            <td>
                <input type="submit" name="sub" value="计算">
            </td>

        </tr>
        <?php
        if(isset($_GET['sub'])){
            echo"<tr>";
            echo"<td cosplan='4'>";
            echo  "结果为：".$num1.$ysf.$num2.'='.$sub."";
            echo"</td>";
            echo"</tr>";
        }
        ?>
    </form>


</table>
