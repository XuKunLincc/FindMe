<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/5/5
 * Time: 17:42
 */

/*
 * ��֤�Ƿ��¼
 * �ѵ�¼�򷵻�false
 * δ��¼���� true
 */
function isLogin(){
    session_start();
    if(isset($_SESSION['USER_NUM']) && isset($_SESSION['USER_NUM']) &&  isset($_SESSION['_ID'])
    && isset($_SESSION['STATE']) &&  isset($_SESSION['PERMISSIONS'])) return false;else return true;
}

