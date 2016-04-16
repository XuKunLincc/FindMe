<?php
/**
 * Created by IntelliJ IDEA.
 * User: ckl
 * Date: 2016/2/14
 * Time: 20:30
 */

require_once("../phpInclude/user.class.php");

if (isset($_POST['username']) || isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userDb = new Ckl_user();
    $id = $userDb->login($username, $password);
    if ($id != "error") {
        $name= $userDb->getNameById($id);
        validate($id,$name);
        echo "200";
    } else {
        echo "404";
    }
} else {
    header("Location: index.html");
}

function validate($requse, $name)
{
    session_start();
    $_SESSION['_ID'] = $requse;
    $_SESSION["STATE"] = "neusoftss";
    $_SESSION['USER_NAME'] = $name;
    $_SESSION['USER_NUM'] =  $_POST['username'];
}

?>