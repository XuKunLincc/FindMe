<?php
/**
 * Created by IntelliJ IDEA.
 * User: ckl
 * Date: 2016/3/22
 * Time: 11:18
 */
//save files php
//ͨ��session�������ϴ��ļ���

session_start();
if (!isset($_SESSION['files'])) {
    $_SESSION['files'] = "";
}
$fileName = md5(date("ymdhis")) . ".png";
$_SESSION['files'] .= $fileName.';';
$fileName = "../LostPic/" . $fileName;
$fileTmp = file_get_contents("php://input");
file_put_contents($fileName, $fileTmp, true);
?>