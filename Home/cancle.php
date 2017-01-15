<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/4/17
 * Time: 13:52
 */

session_start();
if(isset($_SESSION['USER_NUM']) && isset($_SESSION['files'])){
    if($_SESSION['files'] == "")
        echo "files == null";
        header("Location: index.php");
    $picNames = explode(";",$_SESSION['files']);
    array_pop($picNames);
    foreach($picNames as $picName){
        echo    unlink("../LostPic/".$picName);
    }
    header("Location: index.php");
}else{
    header("Location: index.php");
}