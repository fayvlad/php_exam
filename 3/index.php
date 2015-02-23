<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 23.02.2015
 * Time: 10:54
 */
if (isset($_POST['text'])) {
    include_once "clear.php";
    $clear = new clear();
    $clear->clearlink($_POST['text']);

}
?>
<form method="post">
    <textarea name="text" rows="10">
    </textarea>
    <br>
    <input type="submit">
</form>