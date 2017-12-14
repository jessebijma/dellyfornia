<?php /* Smarty version Smarty-3.1.18, created on 2016-11-24 21:37:17
         compiled from "views/newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155015291258374f7d36dcf5-82054908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a5f4b5596e58361f517860f8b37beb43c98474' => 
    array (
      0 => 'views/newsarticles.tpl',
      1 => 1478181654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155015291258374f7d36dcf5-82054908',
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
  'unifunc' => 'content_58374f7d3e90a5_71735489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58374f7d3e90a5_71735489')) {function content_58374f7d3e90a5_71735489($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/jesseit195/domains/jessebijma.nl/public_html/myband/libs/plugins/modifier.date_format.php';
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
