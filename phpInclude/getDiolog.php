<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/5/3
 * Time: 16:27
 */

function getDialog(){
    $fileName = "../Home/dialog.php";
    $fp = fopen($fileName);
    $content = fread($fp, filesize($fileName));
    echo $content;
}

?>
