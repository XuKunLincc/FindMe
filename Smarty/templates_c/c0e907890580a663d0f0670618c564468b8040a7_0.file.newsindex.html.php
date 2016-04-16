<?php /* Smarty version 3.1.27, created on 2016-01-05 18:56:27
         compiled from "F:\web\www\Smarty\templates\newsindex.html" */ ?>
<?php
/*%%SmartyHeaderCode:12672568ba15b6f3640_16571790%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e907890580a663d0f0670618c564468b8040a7' => 
    array (
      0 => 'F:\\web\\www\\Smarty\\templates\\newsindex.html',
      1 => 1451991385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12672568ba15b6f3640_16571790',
  'variables' => 
  array (
    'classify' => 0,
    'newsArry' => 0,
    'classifyId' => 0,
    'nowPage' => 0,
    'id' => 0,
    'title' => 0,
    'pageCount' => 0,
    '_title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568ba15b73f316_76156114',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568ba15b73f316_76156114')) {
function content_568ba15b73f316_76156114 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12672568ba15b6f3640_16571790';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="css/news_style.css">
    <title></title>
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
                    <img id="logo" src="../pic/logo.png">
                </td>
                <td style="padding-top: 20px">
                    <img src="../pic/weTeam.png">
                </td>
                <td style="padding-right: 100px;padding-top: 10px">
                    <img src="../pic/phone.png">
                </td>
            </tr>
        </table>
    </div>
    <div class="nav">
        <ul>
            <li><a href="../index.php">首页</a></li>
            <li><a href="../pages/dkcgIndex.html">代客炒股</a></li>
            <li><a href="#team">我们团队</a></li>
            <li><a href="#about" id="aboutOur">关于我们</a></li>
        </ul>
    </div>
</header>

<img class="carousel" src="../pic/show/show1.jpg" >

<div class="news-body">
    <div class="news-title">
        <h2><?php echo $_smarty_tpl->tpl_vars['classify']->value;?>
</h2>
    </div>

    <div class="news-contain">
        <div class="news-list">
            <h3>资讯列表</h3>
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['newsArry']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['title']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
$foreach_title_Sav = $_smarty_tpl->tpl_vars['title'];
?>
                <li><a class="li-title" href="index.php?classify=<?php echo $_smarty_tpl->tpl_vars['classifyId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nowPage']->value;?>
&news_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                <li><a class="li-title" href="index.php?classify=<?php echo $_smarty_tpl->tpl_vars['classifyId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nowPage']->value;?>
&news_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">testtesttesttestsssstest</a></li>
                <?php
$_smarty_tpl->tpl_vars['title'] = $foreach_title_Sav;
}
?>
            </ul>
            <p>当前<?php echo $_smarty_tpl->tpl_vars['nowPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pageCount']->value;?>
页 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?classify=<?php echo $_smarty_tpl->tpl_vars['classifyId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nowPage']->value-1;?>
"><button>上一页</button></a>&nbsp;&nbsp;<a href="index.php?classify=<?php echo $_smarty_tpl->tpl_vars['classifyId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nowPage']->value+1;?>
"><button>下一页</button></a></p>
        </div>

        <div class="news-content">
            <h3><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
        </div>
    </div>
</div>
<footer style="clear: both">
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
                        <li style="float: left"><img src="../pic/logo/sina.png">

                            <p>新浪微博</p></li>
                        <li style="float: left"><img src="../pic/logo/wechat.png">

                            <p>微信公众号</p></li>
                        <li style="float: left"><img src="../pic/logo/txwb.png">

                            <p>腾讯微博</p></li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li><img src="../pic/footer/phone.png" class="phone"><span id="phone">4000-123-123</span></li>
                        <li><h4>在线咨询</h4></li>
                        <li><img src="../pic/footer/phone.png" class="phone"><span id="qq">在线咨询时间 8:00-21:00</span></li>
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
</body>
</html><?php }
}
?>