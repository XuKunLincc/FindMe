<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/5/3
 * Time: 18:24
 */
session_start();
if(isset($_SESSION['USER_NUM']))
    echo "true";
else
    echo "false";