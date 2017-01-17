<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/15
 * Time: 10:05
 */
    if(!isset($_SESSION['id'])){
        header('user/login');

    }

?>
<?php
    foreach($bloglist as $a) {
        ?>
<h3><?php echo $a->title?></h3>
<p><?php echo $a->content?></p>
<hr />
   <?php
    }
    ?>
<?php echo $this->pagination->create_links();?>
