<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/5/5
 * Time: 17:42
 */

/*
 * 验证是否登录
 * 已登录则返回false
 * 未登录返回 true
 */
function isLogin(){
    session_start();
    if(isset($_SESSION['USER_NUM']) && isset($_SESSION['USER_NUM']) &&  isset($_SESSION['_ID'])
    && isset($_SESSION['STATE']) &&  isset($_SESSION['PERMISSIONS'])) return false;else return true;
}

