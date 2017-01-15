<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/3/30
 * Time: 21:09
 */
require_once("../phpInclude/looked.class.php");
require_once("../phpInclude/lost.class.php");
session_start();
if(!isset($_SESSION['USER_NUM']))
    header("Location: index.php");

if($_POST['num'] == $_SESSION['USER_NUM']){
    $lookedSql = new Ckl_looked();
    $lostSql = new Ckl_lost();
    $lookedSql->add(date("y-m-d h:i:s",time()),$_POST['lostId'],$_SESSION['USER_NUM']);
    echo $lostSql->getPhoneNumById($_POST['lostId']);
}
else
    echo 404;