<?php /* Smarty version Smarty-3.1.18, created on 2016-11-24 21:37:08
         compiled from "views/fotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197918235158374f747abfa2-67204498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f6f74c06b67f5547c86c429228dab04105010b1' => 
    array (
      0 => 'views/fotos.tpl',
      1 => 1478177164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197918235158374f747abfa2-67204498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result2' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58374f74a982c4_09540946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58374f74a982c4_09540946')) {function content_58374f74a982c4_09540946($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/jesseit195/domains/jessebijma.nl/public_html/myband/libs/plugins/modifier.date_format.php';
?><section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <div class="foto">
            <img src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['src'];?>
">
            <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%D");?>
</p>
        </div>
    <?php } ?>

    <div class="pages">
    <ul>
        <li><a href="?action=fotos&page_nr=1">1</a> </li>
        <li><a href="?action=fotos&page_nr=2">2</a> </li>
        <li><a href="?action=fotos&page_nr=3">3</a> </li>
        <li><a href="?action=fotos&page_nr=4">4</a> </li>
        <li><a href="?action=fotos&page_nr=5">5</a> </li>

    </ul>
        </div>


</section><?php }} ?>
