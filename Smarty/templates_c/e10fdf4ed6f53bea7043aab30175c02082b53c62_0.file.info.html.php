<?php /* Smarty version 3.1.27, created on 2016-05-03 18:23:44
         compiled from "F:\web\www\Smarty\templates\Home\info.html" */ ?>
<?php
/*%%SmartyHeaderCode:1907957287c306b7cb1_24230177%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e10fdf4ed6f53bea7043aab30175c02082b53c62' => 
    array (
      0 => 'F:\\web\\www\\Smarty\\templates\\Home\\info.html',
      1 => 1462270860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1907957287c306b7cb1_24230177',
  'variables' => 
  array (
    'unlogin' => 0,
    'logined' => 0,
    'userName' => 0,
    'title' => 0,
    'time' => 0,
    'state' => 0,
    'info' => 0,
    'picList' => 0,
    'permissions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57287c306f4a82_12931831',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57287c306f4a82_12931831')) {
function content_57287c306f4a82_12931831 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1907957287c306b7cb1_24230177';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/info.css" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 rel="script" src="../js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 rel="script" src="js/index.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 rel="script" src="js/info.js"><?php echo '</script'; ?>
>
    <title></title>
</head>
<nav class=" navbar navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><span style="font-size: large">失物招领</span></a>
        <!--<ul class="nav navbar-nav navbar-left">-->
        <!--<li><a href="index.php">首页</a></li>-->
        <!--<li><a href="">卡类</a></li>-->
        <!--<li><a href="">钥匙</a></li>-->
        <!--<li><a href="">贵重物品</a></li>-->
        <!--<li><a href="">其他</a></li>-->
        <!--</ul>-->
        <div class="user">
            <ul class="nav navbar-nav navbar-right <?php echo $_smarty_tpl->tpl_vars['unlogin']->value;?>
">
                <li><a href="../Login/index.html">登录</a></li>
                <li><a href="../Home/about.html">关于</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right <?php echo $_smarty_tpl->tpl_vars['logined']->value;?>
">
                <li class="logined"><a href="../Login/index.html"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</a>
                    <ul id="user-info">
                        <li><a href="">个人中心</a></li>
                        <li><a href="">账号设置</a></li>
                        <li><a href="../Login/validate.php?status=unlogin">退出</a></li>
                    </ul>
                </li>
                <li><a href="../Home/about.html">关于</a></li>
            </ul>
        </div>
    </div>
</nav>
<body>
<div class="container info">
    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

    <p><span>发布时间：<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 &nbsp;&nbsp;</span>状态：<span style="color: green; font-weight: bolder"><?php echo $_smarty_tpl->tpl_vars['state']->value;?>
</span></p>

    <p style="width:60%; margin: 10px auto; color: black; text-align: start;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

    </p>
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['picList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$foreach_info_Sav = $_smarty_tpl->tpl_vars['info'];
?>
        <li class="about"><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['pic'];?>
">

            <?php
$_smarty_tpl->tpl_vars['info'] = $foreach_info_Sav;
}
?>
    </ul>
    <div class="function" style="float: right">
        <ul>
            <li><a id="top" style="background-color: #de5aff; cursor: pointer">TOP</a></li>
            <li onclick="deleteInfo()" style="cursor: pointer; display: <?php echo $_smarty_tpl->tpl_vars['permissions']->value;?>
"><a>删除</a></li>
            <li onclick="showPhoneNum()" style="cursor: pointer"><a style="background-color: #50de2d">联系方式</a></li>
            <!--<li><a href="" style="background-color: #ff5b8b">举报</a></li>-->
        </ul>
    </div>
</div>

<div class="phoneNum">
    <p id="showNum" style="display: none;"><input style="padding: 4px; width: 300px" id="num" placeholder="请输入您的学号进行确认">
        <button class="btn btn-info" onclick="postNum()">确认</button>
        <button class="btn btn-danger" onclick="hiddenPhoneNum()">取消</button>
    </p>
    <p id="showPhoneNum" style="font-size: larger; color: #888888; display:none">
        <span></span>
        <button class="btn btn-default" style="margin-left: 100px" onclick="hiddenPhoneNum()">确定</button>
    </p>
    <p id="error" style="font-size: larger; color: #888888; display: none;">
        验证错误
        <button class="btn btn-default" style="margin-left: 100px" onclick="hiddenPhoneNum()">确定</button>
    </p>
</div>
<footer>
    <p>技术支持：广东东软学院安全服务队</p>

    <p>服务提供：广东东软学院安全服务队</p>

    <p>©2016 广东东软学院</p>
</footer>
</body>
</html><?php }
}
?>