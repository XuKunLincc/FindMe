<?php /* Smarty version 3.1.27, created on 2016-01-06 15:54:57
         compiled from "F:\web\www\Smarty\templates\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:28365568cc851b74f13_38992783%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6431efbfb703425d8af3c96f8fbe333ef43976d8' => 
    array (
      0 => 'F:\\web\\www\\Smarty\\templates\\index.html',
      1 => 1452066883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28365568cc851b74f13_38992783',
  'variables' => 
  array (
    'arrShow' => 0,
    'row' => 0,
    'picNameArray' => 0,
    'peopleArray' => 0,
    'infoArray' => 0,
    'oneArry' => 0,
    'oneId' => 0,
    'oneTitle' => 0,
    'twoArry' => 0,
    'twoId' => 0,
    'twoTitle' => 0,
    'threeArry' => 0,
    'threeId' => 0,
    'threeTitle' => 0,
    'fourArry' => 0,
    'fourId' => 0,
    'fourTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568cc851c25168_99540477',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568cc851c25168_99540477')) {
function content_568cc851c25168_99540477 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28365568cc851b74f13_38992783';
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
    <title>炒股Web</title>
</head>
<body>
<header>
    <a name="top"></a>
    <div class="top">
        <div class="container">
            <button class="btn btn-default">注册</button>
            <button class="btn btn-default">登录</button>
        </div>
    </div>
    <div class="hear">
        <table style="width: 100%;">
            <tr>
                <td style="padding-left: 100px">
                    <img id="logo" src="pic/logo.png">
                </td>
                <td style="padding-top: 20px">
                    <!--<img src="pic/weTeam.png">-->
                </td>
                <td style="margin-right: 100px;padding-top: 10px; float: right">
                    <img src="pic/phone.png">
                </td>
            </tr>
        </table>
        <!--<button class="btn-red-square about-btn">关于我们</button>-->
    </div>
    <div class="nav">
        <ul>
            <li><a href="#">首页</a></li>
            <li><a href="pages/dkcgIndex.html">代客炒股</a></li>
            <li><a href="people/index.php">我们团队</a></li>
            <li><a href="pages/aboutIndex.html" id="aboutOur">关于我们</a></li>
        </ul>
    </div>
</header>
<div class="body">
    <div id="content1">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="pic/show/show1.jpg">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="pic/show/show2.jpg" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="pic/show/show3.jpg" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <a name="stock"></a>
        <table class="ask-table">
            <tr>
                <td>
                    <div class="ask-for">
                        <div class="title" style="background-color: #ffa402">
                            <h1>九 一</h1>

                            <h2>九成赢利归您</h2>
                        </div>
                        <div class="ask-info">
                            <p>盈利九成归您，一成归我们，若亏损</p>
                            <br>
                            <p> 则全部由您承担，我们只负责操盘</p>
                        </div>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3353128347&site=qq&menu=yes"><button>立即咨询</button></a>
                    </div>
                </td>
                <td>
                    <div class="ask-for">
                        <div class="title" style="background-color: #785d9b">
                            <h1>七 三</h1>

                            <h2>同富贵 共风险</h2>
                        </div>
                        <div class="ask-info">
                            <p>盈利七成归您三成归我们若亏损您承</p>

                            <p> 担七成，我们承担三成，同富贵共风</p>
                            <p> 险</p>
                        </div>

                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3353128347&site=qq&menu=yes"><button>立即咨询</button></a>
                    </div>
                </td>
                <td>
                    <div class="ask-for">
                        <div class="title" style="background-color: #e52f2f">
                            <h1>五 五</h1>

                            <h2>你出资 我挡风险</h2>
                        </div>
                        <div class="ask-info">
                            <p>盈利五成归您五成归我们若亏损则由</p>
                            <p>我们全部承担，您虽出资但享安全我</p>
                            <p>们操盘却承担风险</p>
                        </div>

                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3353128347&site=qq&menu=yes"><button>立即咨询</button></a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="content2">
        <img class="title" src="pic/content2/title.png">
        <img class="content" src="pic/content2/content.png">
    </div>
    <div id="content3">
        <img src="pic/content3/content.png">
    </div>
    <div id="content4">
        <img src="pic/content4/content.png">
    </div>
    <div id="content5">
        <img src="pic/content5/content.png">
        <div class="show">
            <div class="left">
                <table class="table-title">
                    <tr>
                        <td>地区</td>
                        <td>姓名</td>
                        <td>开户</td>
                        <td>账号</td>
                        <td>周收益率</td>
                        <td>月收益率</td>
                        <td>电话</td>
                    </tr>
                </table>
                <div class="showBody" style="overflow: hidden">
                    <table class="showOne">
                        <?php
$_from = $_smarty_tpl->tpl_vars['arrShow']->value[0];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['loacl'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['opena'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['acc_num'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['week'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['month'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone_num'];?>
</td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                    </table>
                    <table class="showTwo">
                        <?php
$_from = $_smarty_tpl->tpl_vars['arrShow']->value[1];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['loacl'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['opena'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['acc_num'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['week'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['month'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone_num'];?>
</td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                    </table>
                </div>
            </div>
            <div class="right">
                <table class="table-title">
                    <tr>
                        <td>地区</td>
                        <td>姓名</td>
                        <td>开户</td>
                        <td>账号</td>
                        <td>周收益率</td>
                        <td>月收益率</td>
                        <td>电话</td>
                    </tr>
                </table>
                <div class="showBody" style="overflow: hidden">
                    <table class="showOne">
                        <?php
$_from = $_smarty_tpl->tpl_vars['arrShow']->value[2];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['loacl'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['opena'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['acc_num'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['week'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['month'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone_num'];?>
</td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                    </table>
                    <table class="showTwo">
                        <?php
$_from = $_smarty_tpl->tpl_vars['arrShow']->value[3];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['loacl'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['opena'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['acc_num'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['week'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['month'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone_num'];?>
</td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                    </table>
                </div>
            </div>
        </div>
        <div class="down">
            <div class="left">
                    <span>一、我想买某只股，可以买吗？什么时候介入？<br/>
                    二、手中的股票是持有还是出局？<br/>
                    三、已经被套，后市如何操作，怎样自救？<br/>
                    四、有什么好股票，能否推荐？</span>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3353128347&site=qq&menu=yes"><button class="red-btn">免费咨询</button></a>
            </div>
            <div class="right">
                <div class="login">
                    <form>
                        登录名:<input type="email" placeholder="手机/邮箱/用户名"/> <br/><br/>
                        <span>密码:&nbsp;&nbsp;&nbsp;&nbsp;</span> <input type="password" placeholder="请输入密码"/> <br/>
                        <button>登录</button>
                        <a>忘记密码？</a>
                    </form>
                    <p>
                        <button><img src="pic/content5/qq.png"/>QQ账号登录</button>
                        <button><img src="pic/content5/sina.png">微博账号登录</button>
                    </p>
                </div>
                <div class="zhuce">
                    <h1>注册会员赠送牛股</h1>
                    <button class="red-btn">免费注册</button>
                </div>
            </div>
        </div>
    </div>
    <div id="content6">
        <img src="pic/content6/content.png">
    </div>
    <div id="content-new">
        <div class="red-block"></div>
        <img src="pic/contentNew/content.png">
    </div>
    <div id="content7">
        <img src="pic/content7/content.png">
    </div>
    <div id="content8">
        <img src="pic/content8/title.png">
        <div class="team">
            <a name="team"></a>
            <h3 class="title-h3">我们的团队</h3>
            <table>
                <tbody>
                <tr>
                    <td>
                        <div class="table-team">
                            <img src="pic/people/<?php echo $_smarty_tpl->tpl_vars['picNameArray']->value[0];?>
">

                            <div class="info">
                                <h4><?php echo $_smarty_tpl->tpl_vars['peopleArray']->value[0];?>
</h4>

                                <p><?php echo $_smarty_tpl->tpl_vars['infoArray']->value[0];?>
</p>
                                <button class="red-btn"><a style="color: white" href="people/index.php?id=1">查看更多</a></button>
                            </div>
                        </div>
                    </td>
                    <td style="padding-left: 100px">
                        <div class="table-team">
                            <img src="pic/people/<?php echo $_smarty_tpl->tpl_vars['picNameArray']->value[1];?>
">

                            <div class="info">
                                <h4><?php echo $_smarty_tpl->tpl_vars['peopleArray']->value[1];?>
</h4>

                                <p><?php echo $_smarty_tpl->tpl_vars['infoArray']->value[1];?>
</p>
                                <button class="red-btn"><a style="color: white" href="people/index.php?id=2">查看更多</a></button>
                            </div>
                        </div>
                    </td>
                    <td style="float: right">
                        <div class="table-team">
                            <img src="pic/people/<?php echo $_smarty_tpl->tpl_vars['picNameArray']->value[2];?>
">

                            <div class="info">
                                <h4><?php echo $_smarty_tpl->tpl_vars['peopleArray']->value[2];?>
</h4>

                                <p><?php echo $_smarty_tpl->tpl_vars['infoArray']->value[2];?>
</p>
                                <button class="red-btn"><a style="color: white" href="people/index.php?id=3">查看更多</a></button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-team">
                            <img src="pic/people/<?php echo $_smarty_tpl->tpl_vars['picNameArray']->value[3];?>
">

                            <div class="info">
                                <h4><?php echo $_smarty_tpl->tpl_vars['peopleArray']->value[3];?>
</h4>

                                <p><?php echo $_smarty_tpl->tpl_vars['infoArray']->value[3];?>
</p>
                                <button class="red-btn"><a style="color: white" href="people/index.php?id=4">查看更多</a></button>
                            </div>
                        </div>
                    </td>
                    <td style="padding-left: 100px">
                        <div class="table-team">
                            <img src="pic/people/<?php echo $_smarty_tpl->tpl_vars['picNameArray']->value[4];?>
">

                            <div class="info">
                                <h4><?php echo $_smarty_tpl->tpl_vars['peopleArray']->value[4];?>
</h4>

                                <p><?php echo $_smarty_tpl->tpl_vars['infoArray']->value[4];?>
</p>
                                <button class="red-btn"><a style="color: white" href="people/index.php?id=5">查看更多</a></button>
                            </div>
                        </div>
                    </td>
                    <td style="float: right">
                        <div class="table-team">
                            <img src="pic/people/<?php echo $_smarty_tpl->tpl_vars['picNameArray']->value[5];?>
">

                            <div class="info">
                                <h4><?php echo $_smarty_tpl->tpl_vars['peopleArray']->value[5];?>
</h4>

                                <p><?php echo $_smarty_tpl->tpl_vars['infoArray']->value[5];?>
</p>
                                <button class="red-btn"><a style="color: white" href="people/index.php?id=6">查看更多</a></button>
                            </div>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="news">
            <table>
                <tr>
                    <td>
                        <div class="table-news">
                            <img src="pic/content8/news.png">

                            <div class="info">
                                <h3>收盘点评</h3>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['oneArry']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['oneTitle'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['oneTitle']->_loop = false;
$_smarty_tpl->tpl_vars['oneId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['oneId']->value => $_smarty_tpl->tpl_vars['oneTitle']->value) {
$_smarty_tpl->tpl_vars['oneTitle']->_loop = true;
$foreach_oneTitle_Sav = $_smarty_tpl->tpl_vars['oneTitle'];
?>
                                    <li><span>&gt;</span><a href="news\index.php?classify=1&page=1&news_id=<?php echo $_smarty_tpl->tpl_vars['oneId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['oneTitle']->value;?>
</a></li>
                                    <?php
$_smarty_tpl->tpl_vars['oneTitle'] = $foreach_oneTitle_Sav;
}
?>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td style="float: right">
                        <div class="table-news">
                            <img src="pic/content8/xintai.png" alt="">

                            <div class="info">
                                <h3>炒股心态</h3>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['twoArry']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['twoTitle'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['twoTitle']->_loop = false;
$_smarty_tpl->tpl_vars['twoId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['twoId']->value => $_smarty_tpl->tpl_vars['twoTitle']->value) {
$_smarty_tpl->tpl_vars['twoTitle']->_loop = true;
$foreach_twoTitle_Sav = $_smarty_tpl->tpl_vars['twoTitle'];
?>
                                    <li><span>&gt;</span><a href="news\index.php?classify=2&page=1&news_id=<?php echo $_smarty_tpl->tpl_vars['twoId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['twoTitle']->value;?>
</a></li>
                                    <?php
$_smarty_tpl->tpl_vars['twoTitle'] = $foreach_twoTitle_Sav;
}
?>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-news">
                            <img src="pic/content8/jishu.png">

                            <div class="info">
                                <h3>技术选股</h3>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['threeArry']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['threeTitle'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['threeTitle']->_loop = false;
$_smarty_tpl->tpl_vars['threeId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['threeId']->value => $_smarty_tpl->tpl_vars['threeTitle']->value) {
$_smarty_tpl->tpl_vars['threeTitle']->_loop = true;
$foreach_threeTitle_Sav = $_smarty_tpl->tpl_vars['threeTitle'];
?>
                                    <li><span>&gt;</span><a href="news\index.php?classify=3&page=1&news_id=<?php echo $_smarty_tpl->tpl_vars['threeId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['threeTitle']->value;?>
</a>
                                    </li>
                                    <?php
$_smarty_tpl->tpl_vars['threeTitle'] = $foreach_threeTitle_Sav;
}
?>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td style="float: right">
                        <div class="table-news" >
                            <img src="pic/content8/look.png" alt="">

                            <div class="info">
                                <h3>客户见证</h3>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['fourArry']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['fourTitle'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['fourTitle']->_loop = false;
$_smarty_tpl->tpl_vars['fourId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['fourId']->value => $_smarty_tpl->tpl_vars['fourTitle']->value) {
$_smarty_tpl->tpl_vars['fourTitle']->_loop = true;
$foreach_fourTitle_Sav = $_smarty_tpl->tpl_vars['fourTitle'];
?>
                                    <li><span>&gt;</span><a href="news\index.php?classify=4&page=1&news_id=<?php echo $_smarty_tpl->tpl_vars['fourId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fourTitle']->value;?>
</a>
                                    </li>
                                    <?php
$_smarty_tpl->tpl_vars['fourTitle'] = $foreach_fourTitle_Sav;
}
?>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="partner" id="par">
            <h3 class="title-h3">合作案例</h3>
            <ul class="logo-ground">
                <li><a href="http://store.gf.com.cn"><img src="pic/logo/1.png"></a></li>
                <li><a href="http://www.chinastock.com.cn"><img src="pic/logo/2.png"></a></li>
                <li><a href="http://www.chinastock.com.cn"><img src="pic/logo/3.png"></a></li>
                <li><a href="http://www.essence.com.cn"><img src="pic/logo/4.png"></a></li>
                <li><a href="http://www.cs.ecitic.com"><img src="pic/logo/5.png"></a></li>
                <li><a href="http://www.htsc.com.cn"><img src="pic/logo/6.jpg"></a></li>
                <li><a href="http://kh.htsec.com"><img src="pic/logo/7.png"></a></li>
                <li><a href="http://www.wlzq.cn"><img src="pic/logo/8.png"></a></li>
                <li><a href="http://www.95579.com"><img src="pic/logo/9.png"></a></li>
                <li><a href="http://www.foundersc.com"><img src="pic/logo/10.png"></a></li>
                <li><a href="http://www.csc108.com/newsite/index.jsp"><img src="pic/logo/11.png"></a></li>
                <li><a href="http://www.dfzq.com.cn/dfzq/index.jsp"><img src="pic/logo/12.png"></a></li>
                <li><a href="https://www.swsc.com.cn/xnsecu/index.html"><img src="pic/logo/13.png"></a></li>
                <li><a href="http://www.bocichina.com/boci/pagestatic/index/index.html"><img src="pic/logo/14.png"></a></li>
                <li><a href="http://www.newone.com.cn/ws/html?arg=2personal/95565/index&"><img src="pic/logo/15.png"></a></li>
                <li><a href="http://www.china-invs.cn/"><img src="pic/logo/16.png"></a></li>
                <li><a href="http://www.westsecu.com/xbzq/index.html?classid=000200010006"><img src="pic/logo/17.png"></a></li>
                <li><a href="http://www.guosen.com.cn/gxzq/index.jsp"><img src="pic/logo/18.png"></a></li>
                <li><a href="http://www.gjzq.com.cn/main/index.shtml"><img src="pic/logo/19.png"></a></li>
                <li><a href="http://www.xyzq.com.cn/xyzq/index.html"><img src="pic/logo/20.png"></a></li>
            </ul>
        </div>
    </div>
</div>
<footer>
    <a name="about"></a>
    <div class="about">
        <table>
            <tr>
                <th>关于我们</th>
                <th>基金专栏</th>
                <th>关注我们</th>
                <th>客服热线</th>
            </tr>
            <tr>
                <td class="about">
                    <ul>
                        <li><a>公司介绍</a></li>
                        <li><a>股东背景</a></li>
                        <li><a>媒体报道</a></li>
                        <li><a>最新动态</a></li>
                    </ul>
                </td>
                <td class="jijin">
                    <ul>
                        <li><a>公司介绍</a></li>
                        <li><a>股东背景</a></li>
                        <li><a>媒体报道</a></li>
                        <li><a>最新动态</a></li>
                    </ul>
                </td>
                <td class="lookme">
                    <ul style="margin-left: 70px">
                        <li style="float: left"><img src="pic/logo/sina.png">

                            <p>新浪微博</p></li>
                        <li style="float: left"><img src="pic/logo/wechat.png">

                            <p>微信公众号</p></li>
                        <li style="float: left"><img src="pic/logo/txwb.png">

                            <p>腾讯微博</p></li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li><img src="pic/footer/phone.png" class="phone"><span id="phone">4000-123-123</span></li>
                        <li><h4>在线咨询</h4></li>
                        <li><img src="pic/footer/qq.png" class="phone"><span id="qq">在线咨询时间 8:00-21:00</span></li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
    <div class="friend">
        <p>友情链接：<a>和讯理财</a><a>同花顺股票</a><a>和讯信托</a><a>资管产品</a><a>基金</a>
            <a>金投保险网</a><a>中央理财</a><a>数米基金</a><a>沃保保险网</a><a>乐耕众筹</a>
            <a>瞄股网</a><a>A股中国</a><a>爱股股票网</a><a>信托公司</a><a>期货开户</a>
            <a>银行网点查询</a><a>北京证券网</a><a>国内期货公司</a><a>福汇</a><a>私募产品</a>
            <a>证券公司查询</a></p>
    </div>
    <div class="copyright">
        <p>版权所有@王子鑫 &nbsp;&nbsp;&nbsp;粤ICP备09037229号 &nbsp;&nbsp;&nbsp;网站建设:&nbsp;&nbsp;&nbsp;<a
                href="http://www.atqiao.cn">安乔</a></p>
    </div>
</footer>
<nav>

    <div class="tw">
        <img id="tw-qq" src="pic/nav/qqTw.png">
        <img id="tw-wechat" src="pic/nav/weChatTw.png">
    </div>
    <div class="logo" style="float: right">
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3353128347&site=qq&menu=yes">
            <img id="nav-qq" src="pic/nav/nav_qq.png">
        </a><br/>
        <img id="nav-wechat" src="pic/nav/nav_wechat.png"><br/>
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3353128347&site=qq&menu=yes">
            <img id="nav-kefu" src="pic/nav/nav_kefu.png"></a><br/>
        <a href="#top" id="nav-top"><img src="pic/nav/nav_top.png"></a>
    </div>
</nav>
</body>
</html><?php }
}
?>