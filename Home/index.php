<?php
/**
 * Created by IntelliJ IDEA.
 * User: ckl
 * Date: 2016/3/16
 * Time: 21:36
 */

require_once '../Smarty/configs/config.php';
require_once '../phpInclude/pic.class.php';
require_once '../phpInclude/lostSql.class.php';
session_start();

$picDb = new Ckl_pic();
$lostDb = new Ckl_lost();
$lostCount = $lostDb->getListNum();
$allPageIndex = ceil($lostCount/PAGE_INDEX);


if(isset($_SESSION['STATE']) && $_SESSION["STATE"] == "neusoftss"){
    $unlogin = "hidden";
    $logined = "show";
    $userName = $_SESSION['USER_NAME'];
}else{
    $unlogin = "show";
    $logined = "hidden";
    $userName = "未登录";
}

if(isset($_GET['pageIndex'])){
    $pageIndex = $_GET['pageIndex'];
    if($pageIndex <= 0)
        $pageIndex = 1;
    if($pageIndex > $allPageIndex)
        $pageIndex = $allPageIndex;
}else{
    $pageIndex = 1;
}

$lostList = $lostDb->getPageByIndex($pageIndex);
foreach($lostList as $key => $row){
    $lostInfoList[$key]["htime"] = $row['htime'];
    $lostInfoList[$key]["local"] = $row['local'];
    $lostInfoList[$key]['id'] = $row['_id'];
    $lostInfoList[$key]['title'] = $row['title'];
    $lostInfoList[$key]['pic'] = "../LostPic/".$picDb->getPicListById($row['picsId'])[0];
}

$smarty->assign('unlogin',$unlogin);
$smarty->assign('logined',$logined);
$smarty->assign('userName',$userName);
$smarty->assign('pageIndex',$pageIndex);
$smarty->assign('allPageIndex',$allPageIndex);
$smarty->assign('lostInfoList',$lostInfoList);
$smarty->display('Home/index.html');
?>