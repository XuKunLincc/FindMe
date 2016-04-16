<?php /* Smarty version 3.1.27, created on 2016-01-05 15:34:44
         compiled from "F:\web\www\Smarty\templates\peopleList.html" */ ?>
<?php
/*%%SmartyHeaderCode:235568b72145963f4_17852292%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd03d63965bcf1ee356ef660b6efde0c6de4ec9b7' => 
    array (
      0 => 'F:\\web\\www\\Smarty\\templates\\peopleList.html',
      1 => 1451979040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235568b72145963f4_17852292',
  'variables' => 
  array (
    'array' => 0,
    'id' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568b72145ceb47_03897643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568b72145ceb47_03897643')) {
function content_568b72145ceb47_03897643 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '235568b72145963f4_17852292';
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
        ul li a{
            display: block;
            float: left;
            width: 200px;
        }
    </style>
    <?php echo '<script'; ?>
>
        function post(id){
            var temp = document.createElement("form");
            temp.method = "post";
            temp.style.display = "none";
            var opt = document.createElement("textarea");
            opt.name="id";
            opt.value = id;
            temp.appendChild(opt);
            document.body.appendChild(temp);
            temp.submit();
        }
    <?php echo '</script'; ?>
>
</head>
<body>
    <a href="..\select.php">返回</a>
    <a href="peopleInfo.php?statu=add">添加</a>
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['array']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
            <li><a href="peopleInfo.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
        <?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
?>
    </ul>
</body>
</html><?php }
}
?>