<?php
/**
 * Created by IntelliJ IDEA.
 * User: ckl
 * Date: 2016/3/20
 * Time: 15:49
 */
require_once '../Smarty/configs/config.php';
require_once '../phpInclude/pic.class.php';
require_once '../phpInclude/lostSql.class.php';

session_start();
if (isset($_SESSION['STATE']) && $_SESSION["STATE"] == "neusoftss") {
    $unlogin = "hidden";
    $logined = "show";
    $userName = $_SESSION['USER_NAME'];
} else {
    $unlogin = "show";
    $logined = "hidden";
    $userName = '未登录';
}
if (isset($_POST['info'])) {
    add();
    exit(1);
}

$_SESSION['files'] = null;
$smarty->assign('unlogin', $unlogin);
$smarty->assign('logined', $logined);
$smarty->assign('userName', $userName);
$smarty->display('Home/new.html');

function add()
{
    $picDb = new Ckl_pic();
    $lostDb = new Ckl_lost();
    $picId = $picDb->addOnePics($_POST['picNum'],$_SESSION['files'],"test");
    $_SESSION['files'] = null;
    $date = date("y-m-d h:i:s");
    $lostId =  $lostDb->addOneLostInfo($_POST['title'], $_POST['info'], $_POST['htime'], $_POST['local'], "1121", 0, $_POST['phoneNum'], $picId, $_POST['lostType'], 1, $date, $_POST['main']);
    $picDb->setLostIdById($lostId,$picId);
}
