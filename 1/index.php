<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 20.02.2015
 * Time: 14:58
 */
include_once 'slesh.php';
if (isset($_POST['val'])) {
    $date = $_POST['val'];
    $newarr = new slesh();
    $newarr->concatPath($date);
}
?>

<script src="js/jquery-2.1.3.js"></script>
<script src="js/my.js"></script>
<form method="post" action="index.php">
    <input type="text" name="val[]" class="inp">
    <b>+</b>
    <br>
    <div class="add">

    </div>
    <input type="submit">
</form>