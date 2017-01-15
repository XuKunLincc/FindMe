<?php /* Smarty version 3.1.27, created on 2016-05-05 17:36:02
         compiled from "F:\web\www\Smarty\templates\Home\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:471572b1402e91ba4_41482769%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f6a8d62b306fa08a01666f65dcc7d9529e0a0a8' => 
    array (
      0 => 'F:\\web\\www\\Smarty\\templates\\Home\\index.html',
      1 => 1462440808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '471572b1402e91ba4_41482769',
  'variables' => 
  array (
    'unlogin' => 0,
    'logined' => 0,
    'userName' => 0,
    'pageIndex' => 0,
    'allPageIndex' => 0,
    'lostInfoList' => 0,
    'info' => 0,
    'picNoStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_572b1402ed6ed6_83925001',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572b1402ed6ed6_83925001')) {
function content_572b1402ed6ed6_83925001 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '471572b1402e91ba4_41482769';
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 rel="script" src="../js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 rel="script" src="../js/jquery.color.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 rel="script" src="js/index.js"><?php echo '</script'; ?>
>
    <title>广东东软学院失物招领系统</title>
</head>
<header>
    <nav class=" navbar navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span style="font-size: large">失物招领</span></a>
            <div class="user" >
                <ul class="nav navbar-nav <?php echo $_smarty_tpl->tpl_vars['unlogin']->value;?>
">
                    <li><a href="../Login/index.html">登录</a></li>
                    <li><a href="../Home/about.html">关于</a></li>
                </ul>
                <ul class="nav navbar-nav <?php echo $_smarty_tpl->tpl_vars['logined']->value;?>
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
    <div class="search">
        <p>快速筛选</p>

        <form method="post" class="form-horizontal" action="index.php">
            <label for="exampleInputName2" style="padding-bottom: 4px">输入相应关键字进行快速查找</label>

            <div class="form-group">
                <input type="text" name="search" class="form-control" id="exampleInputName2" placeholder="关键字查询">
                <button type="submit" class="btn btn-success" style="display: inline-block">Search</button>
            </div>
        </form>
    </div>
</header>
<body onload="isLastOrFirst(<?php echo $_smarty_tpl->tpl_vars['pageIndex']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['allPageIndex']->value;?>
)">
<button onclick="newLost()" class="btn btn-danger center-block" id="new">发布失物信息</button>
<div class="container list">
    <?php
$_from = $_smarty_tpl->tpl_vars['lostInfoList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$foreach_info_Sav = $_smarty_tpl->tpl_vars['info'];
?>
    <div class="col-md-4 col">
        <a class="row-content" href="info.php?id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
            <div class="thumbnail">
                <p class="my-img" style="background: url(<?php echo $_smarty_tpl->tpl_vars['info']->value['pic'];?>
); background-size: cover; background-position: center"> </p>
                <div class="caption">
                    <h3 class="text-nowrap overflow-hidden"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h3>

                    <p class="text-nowrap overflow-hidden"><span>时间：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['htime'];?>
</p>

                    <p class="text-nowrap overflow-hidden"><span>地点：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['local'];?>
</p>
                </div>
            </div>
        </a>
    </div>
    <?php
$_smarty_tpl->tpl_vars['info'] = $foreach_info_Sav;
}
?>
    <img src="pic/no.png" style="display: <?php echo $_smarty_tpl->tpl_vars['picNoStatus']->value;?>
; width: 100%;">

    <ul class="pager" style="clear: both; float: right;">
        <li style="float: left;padding-top: 8px;margin-right: 10px">当前 <?php echo $_smarty_tpl->tpl_vars['pageIndex']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['allPageIndex']->value;?>
</li>
        <li class="previous disabled"><a href="index.php?pageIndex=<?php echo $_smarty_tpl->tpl_vars['pageIndex']->value-1;?>
"><span aria-hidden="true">&larr;</span> 上一页</a>
        </li>
        <li style="margin-left: 10px;" class="next disabled"><a href="index.php?pageIndex=<?php echo $_smarty_tpl->tpl_vars['pageIndex']->value+1;?>
">下一页<span
                aria-hidden="true">&rarr;</span></a></li>
    </ul>
</div>
</body>
<footer>
    <p>技术支持：广东东软学院安全服务队</p>

    <p>服务提供：广东东软学院安全服务队</p>

    <p>©2016 广东东软学院</p>
</footer>
</html><?php }
}
?>