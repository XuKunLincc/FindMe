<?php
/**
 * Created by IntelliJ IDEA.
 * User: ckl
 * Date: 2016/2/14
 * Time: 20:30
 */

require_once("../phpInclude/user.class.php");
session_start();
if(isset($_GET['status']))
{
    // 退出登录
    if($_GET['status'] == "unlogin")
        unlogin();
    else
        exit();

} else if (isset($_POST['username']) || isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userDb = new Ckl_user();
    $id = $userDb->login($username, $password);
    if ($id != "error") {
        $name= $userDb->getNameById($id);
        $permissions = $userDb->getPermissionsByNum($username);
        validate($id,$name,$permissions);
        echo "200";
    } else {
        echo "404";
    }
} else {
    header("Location: index.html");
}

function validate($requse, $name, $permissions)
{
    $_SESSION['_ID'] = $requse;
    $_SESSION["STATE"] = "neusoftss";
    $_SESSION['USER_NAME'] = $name;
    $_SESSION['USER_NUM'] =  $_POST['username'];
    $_SESSION['PERMISSIONS'] = $permissions;    // 是管理员
}

function unlogin(){
    session_unset();
    session_destroy();
    header("Location: ../Home/index.php");
}
?>