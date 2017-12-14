<?php /* Smarty version Smarty-3.1.18, created on 2016-12-06 13:47:50
         compiled from "views/csm_insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13261849745846b3764f8db7-29249762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af018434bb1566b9d6ec151534108fca3962f58' => 
    array (
      0 => 'views/csm_insert.tpl',
      1 => 1479898605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13261849745846b3764f8db7-29249762',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5846b376805d40_29392968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846b376805d40_29392968')) {function content_5846b376805d40_29392968($_smarty_tpl) {?><form method="get">
    <input type="hidden" name="action" value="admin">
    Title
    <input type="text" name="title">

    Content
    <input type="text" name="content">
    <input type="submit" name="submit" value="Send">

</form><?php }} ?>
