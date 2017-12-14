<?php /* Smarty version Smarty-3.1.18, created on 2016-11-23 10:14:43
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1226858356c13c85873-37867773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1478181654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1226858356c13c85873-37867773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58356c13e84497_63402314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58356c13e84497_63402314')) {function content_58356c13e84497_63402314($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\jessebijma\\myband\\libs\\plugins\\modifier.date_format.php';
?><section>
<div id="newsarticles">
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <div class="newsarticle">
        <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>

                <br>
        <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content>
        <br>
        <img src="images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
        <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%D");?>
</p>
                    </div>
    <?php } ?>
        </div>



</section>







<?php }} ?>
