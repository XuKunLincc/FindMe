<?php /* Smarty version 3.1.27, created on 2016-01-05 15:54:35
         compiled from "F:\web\www\Smarty\templates\peopleInfo.html" */ ?>
<?php
/*%%SmartyHeaderCode:6307568b76bb19b651_49724154%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32b6a8278f287dffa3cba0ff959b95334061bb07' => 
    array (
      0 => 'F:\\web\\www\\Smarty\\templates\\peopleInfo.html',
      1 => 1451980471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6307568b76bb19b651_49724154',
  'variables' => 
  array (
    'name' => 0,
    'info' => 0,
    'picName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568b76bb2d8ba7_28523435',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568b76bb2d8ba7_28523435')) {
function content_568b76bb2d8ba7_28523435 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6307568b76bb19b651_49724154';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <a href="peopleList.php">返回列表</a>
    <div class="info">
        <form method="post" enctype="multipart/form-data">
            选择头像：png格式<input type="file"  name="upfile"><br>
            <textarea style="width: 300px" name="name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</textarea><br>
            <textarea cols="3" style="width:300px; height: 200px;" name="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</textarea><br>
            <input type="text" name="picName" value="<?php echo $_smarty_tpl->tpl_vars['picName']->value;?>
" style="display: none">
            <input type="submit">
        </form>
    </div>
</body>
</html><?php }
}
?>