<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 22:46
 */
require_once '../Smarty/configs/config.php';
require_once '../phpInclude/pic.class.php';
require_once '../phpInclude/lost.class.php';

session_start();
$picDb = new Ckl_pic();
$lostDb = new Ckl_lost();

if(!isset($_GET['id'])){
    header("Location: index.php");
    exit;
}

if(isset($_SESSION['STATE']) && $_SESSION["STATE"] == "neusoftss"){
    $unlogin = "hidden";
    $logined = "show";
    $userName = $_SESSION['USER_NAME'];
}else{
    $unlogin = "show";
    $logined = "hidden";
    $userName = "未登录";
}

if(isset($_SESSION['PERMISSIONS'])){
    $permissions = $_SESSION;
    if($permissions)
        $permissions = "block";
    else
        $permissions = "None";
}
else
    $permissions = "None";


$picsId = $lostDb->getPicIdById($_GET['id']);

$picList = $picDb->getPicListById($picsId);
$artList = $picDb->getPicArtListById($picsId);
$picNum = $picDb->getPicNumById($picsId);

$lostPdoStm = $lostDb->getPDOStmById($_GET['id']);

$time = $lostDb->getByPDOStm($lostPdoStm,'time');
$state = $lostDb->getStateById($_GET['id']);
$info = $lostDb->getInfoById($_GET['id']);
$title = $lostDb->getTitleById($_GET['id']);

switch($state){
    case 1:
        $stateShow = "已找回";
        break;
    case 0:
        $stateShow = "寻找中";
        break;
    case 2:
        $stateShow = "托管安全服务队";
}

for($i = 0; $i < $picNum; $i++){
    $picInfoList[$i]['pic'] = '../LostPic/'.$picList[$i];
//    $picInfoList[$i]['art'] = $artList[$i];
}

$smarty->assign('unlogin',$unlogin);
$smarty->assign('logined',$logined);
$smarty->assign('userName',$userName);
$smarty->assign('picList',$picInfoList);
$smarty->assign('time',$time);
$smarty->assign('state',$stateShow);
$smarty->assign('info',$info);
$smarty->assign('title',$title);
$smarty->assign('permissions',$permissions);
$smarty->display("Home/info.html");