<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/3/30
 * Time: 21:09
 */

session_start();
if($_POST['num'] == $_SESSION['USER_NUM'])
    echo $_SESSION['USER_NUM'];
else
    echo 404;