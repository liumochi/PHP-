<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/2
 * Time: 15:47
 */
if(isset($_POST['sub'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ysf = $_POST['ysf'];
    $sum=0;
    switch ($ysf){
        case '+':
            $sum=$num1+$num2;
            break;
        case '-':
            $sum=$num1-$num2;
            break;
        case '*':
            $sum=$num1*$num2;
            break;
        case '/':
            $sum=$num1/$num2;
            break;
        default:
            echo "没有这个云算符";
            break;
    }

}

?>
<meta charset="utf-8">
<html>

<head>
    <style>
        #div1{
            width: 700px;
            height: 50px;
            background: red;
            margin:100px auto;
        }
    </style>
</head>

  <body>
    <div id="div1">
        <table width=400 aline='center' border='1'>
           <form action="5.php" method="post">
               <tr>
                   <td>num1:<input type="text" name="num1" value=<?php if(isset($num1))echo $num1?>></td>
             <td>
                 <select name="ysf">
                     <option value="+" <?php
                     if(isset($ysf)){
                         if($ysf=='+'){
                             echo'selected';
                         }
                     }
                     ?>>+</option>
                     <option value="-" <?php  if(isset($ysf)){if($ysf=='-'){echo'selected';}}?>>-</option>
                     <option value="*" <?php  if(isset($ysf)){if($ysf=='*'){echo'selected';}}?>>*</option>
                     <option value="/" <?php  if(isset($ysf)){if($ysf=='/'){echo'selected';}}?>>/</option>

                 </select>

             </td>
                   <td>num2:<input type="text" name="num2" value=<?php if(isset($num2))echo $num2?>></td>
                   <td>sum:<input type="text" name="sum" value=<?php if(isset($sum))echo $sum?>></td>
                   <td><input type="submit" name="sub" value="计算"></td>

               </tr>
           </form>
        </table>
    </div>
  </body>
</html>