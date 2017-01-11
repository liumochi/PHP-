<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 14:03
 */
    if(isset($_GET['id'])){
        setcookie('id',null);
        setcookie('name',null);
        echo "<script>location='login.php'</script>";

    }

?>