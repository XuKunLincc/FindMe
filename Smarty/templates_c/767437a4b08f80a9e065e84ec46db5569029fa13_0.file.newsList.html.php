<?php /* Smarty version 3.1.27, created on 2016-01-07 11:20:06
         compiled from "F:\web\www\Smarty\templates\newsList.html" */ ?>
<?php
/*%%SmartyHeaderCode:16770568dd9661b8435_72101180%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767437a4b08f80a9e065e84ec46db5569029fa13' => 
    array (
      0 => 'F:\\web\\www\\Smarty\\templates\\newsList.html',
      1 => 1452136804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16770568dd9661b8435_72101180',
  'variables' => 
  array (
    'classify' => 0,
    'newsArray' => 0,
    'title' => 0,
    'id' => 0,
    'nowPage' => 0,
    'allPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568dd9661f6327_22754563',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568dd9661f6327_22754563')) {
function content_568dd9661f6327_22754563 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16770568dd9661b8435_72101180';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        *{
            overflow: hidden;
            white-space: nowrap;
        }

        body{
            width: 700px;
            margin: 0 auto;
        }

        ul{
            height: 600px;
        }

        span{
            width: 500px;
            display: block;
            float: left;
            margin-right: 100px;
        }
    </style>
    <?php echo '<script'; ?>
>
        function del(id){
            var temp = document.createElement("form");
            temp.method = "post";
            temp.action = "del.php";
            temp.style.display = "none";
            var opt = document.createElement("textarea");
            opt.name="id";
            opt.value = id;
            var opt1 = document.createElement("textarea");
            opt1.name="state";
            opt1.value = 'del';
            var opt2 = document.createElement("textarea");
            opt2.name="classify";
            opt2.value = '<?php echo $_smarty_tpl->tpl_vars['classify']->value;?>
';
            temp.appendChild(opt);
            temp.appendChild(opt1);
            temp.appendChild(opt2);
            document.body.appendChild(temp);
            temp.submit();
        }
    <?php echo '</script'; ?>
>
</head>

<body>
    <p>选择新闻：<form>
        <select name="classify">
            <option value="1">收盘点评</option>
            <option value="2">炒股心态</option>
            <option value="3">技术选股</option>
            <option value="4">客户见证</option>
        </select>
        <input type="submit" value="确定">
    </form>
    </p>
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['newsArray']->value;
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
        <li><p style="border-bottom: 1px solid black"><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span><button class="test" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" onclick="del(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)">删除</button></p></li>
        <?php
$_smarty_tpl->tpl_vars['title'] = $foreach_title_Sav;
}
?>
    </ul>

    <p>当前<?php echo $_smarty_tpl->tpl_vars['nowPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['allPage']->value;?>
 &nbsp;&nbsp;&nbsp;&nbsp; <a href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['nowPage']->value-1;?>
&classify=<?php echo $_smarty_tpl->tpl_vars['classify']->value;?>
">上一页</a><a href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['nowPage']->value+1;?>
&classify=<?php echo $_smarty_tpl->tpl_vars['classify']->value;?>
">下一页</a></p>
    <a href="releaseNews.html">发布新闻</a>
</body>
</html><?php }
}
?>