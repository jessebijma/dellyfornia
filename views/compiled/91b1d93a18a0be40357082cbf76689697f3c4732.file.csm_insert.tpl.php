<?php /* Smarty version Smarty-3.1.18, created on 2016-11-23 10:56:51
         compiled from "views\csm_insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174745835727e602725-34423954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91b1d93a18a0be40357082cbf76689697f3c4732' => 
    array (
      0 => 'views\\csm_insert.tpl',
      1 => 1479898605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174745835727e602725-34423954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5835727e62bbe5_08279369',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835727e62bbe5_08279369')) {function content_5835727e62bbe5_08279369($_smarty_tpl) {?><form method="get">
    <input type="hidden" name="action" value="admin">
    Title
    <input type="text" name="title">

    Content
    <input type="text" name="content">
    <input type="submit" name="submit" value="Send">

</form><?php }} ?>
