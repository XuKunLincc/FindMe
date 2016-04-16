<?php /* Smarty version 3.1.27, created on 2016-03-28 16:31:59
         compiled from "F:\web\www\Smarty\templates\Home\new.html" */ ?>
<?php
/*%%SmartyHeaderCode:259156f8ebff5037e8_79147477%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2c33682ea767320cdcf9576ddd56924637edb4' => 
    array (
      0 => 'F:\\web\\www\\Smarty\\templates\\Home\\new.html',
      1 => 1459153912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259156f8ebff5037e8_79147477',
  'variables' => 
  array (
    'unlogin' => 0,
    'logined' => 0,
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f8ebff53b793_39096786',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f8ebff53b793_39096786')) {
function content_56f8ebff53b793_39096786 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '259156f8ebff5037e8_79147477';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/new.css" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 rel="script" src="../js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 rel="script" src="../js/jquery.color.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 rel="script" src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 rel="script" src="js/new.js" charset="utf-8"><?php echo '</script'; ?>
>
    <title>发布失物信息</title>
</head>
<nav class=" navbar navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span style="font-size: large">失物招领</span></a>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="index.php">首页</a></li>
            <li><a href="">卡类</a></li>
            <li><a href="">钥匙</a></li>
            <li><a href="">贵重物品</a></li>
            <li><a href="">其他</a></li>
        </ul>
        <div class="user">
            <ul class="nav navbar-nav navbar-right <?php echo $_smarty_tpl->tpl_vars['unlogin']->value;?>
">
                <li><a href="../Login/index.html">登录</a></li>
                <li><a href="../Login/index.html">关于</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right <?php echo $_smarty_tpl->tpl_vars['logined']->value;?>
">
                <li class="logined"><a href="../Login/index.html"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</a>
                    <ul id="user-info">
                        <li><a href="">个人中心</a></li>
                        <li><a href="">账号设置</a></li>
                        <li><a href="">退出</a></li>
                    </ul>
                </li>
                <li><a href="../Login/index.html">关于</a></li>
            </ul>
        </div>
    </div>
</nav>
<body onunload="onunload_handler">
<div class="container content">
    <h2 class="center-block" style="text-align: center">发布失物信息</h2>
    <div class="info">
        <p class="center-block" style="text-align: center; margin-top: 15px; margin-bottom: 15px;" >(<span id="type">丢失物品</span>) 记录</p>
        <div class="center-block overlay">
            <input class="form-control" id="title" type="text">

            <p>标题</p>
        </div>
        <div class=" center-block overlay">
            <div class="tooltip right" role="tooltip">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner">
                    Some tooltip text!
                </div>
            </div>
            <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="right" title="卡号之类的" style="float: right; right: -20px; top: 10px;position: absolute; cursor: auto"></span>
            <input class="form-control" id="main" type="text">
            <p>关键信息</p>
        </div>
        <div class="center-block overlay">
            <input class="form-control" id="phoneNum" type="text">

            <p>联系方式</p>
        </div>
        <div class="center-block overlay">
            <input class="form-control" id="local" type="text">

            <p>案发地点</p>
        </div>
        <div class=" center-block overlay">
            <input class="form-control" id="htime" type="datetime-local">

            <p>案发时间</p>
        </div>
        <div class=" center-block overlay" id="content-info">
            <textarea id="info"></textarea>

            <p>详情概要</p>
        </div>
        <div class=""></div>
        <ul class="container picList">
            <li class="pic"><img><p>上传成功</p><button class="btn">删除</button></li>
            <li ><button id="addPic" onclick="file.click()" class="btn btn-default">添加图片</button></li>
        </ul>
        <input type="file" id="file" style="display: none" onchange="addPicList(this)">
        <p class="container" style="width: 400px">
            <button class="btn btn-success" id="submit" style="float: right; width: 100px; margin-left: 10px">发布</button>
            <button class="btn btn-default" id="cancel" style="float: right; width: 100px">取消</button>
        </p>
    </div>
    <p style="float: right">广东东软学院安全服务队</p>
</div>
</body>
</html><?php }
}
?>