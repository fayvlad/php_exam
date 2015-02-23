<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 20.02.2015
 * Time: 16:38
 */
if(isset($_POST['dat'])){
    include_once "MyTimeUtils.php";
    $qqq = new MyTimeUtils();
    $qqq->getTime($_POST['dat']);
}
?>
<form action="index.php" method="post">
<input type="date" name="dat" value="<?php echo date("Y-m-d");?>">
<input type="submit">
</form>