<?php /* Smarty version Smarty-3.1.18, created on 2016-11-24 21:37:18
         compiled from "views/videos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55794163158374f7e5d8f09-98232272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f6828a259e58aa1421b9116988c5b1f654ff231' => 
    array (
      0 => 'views/videos.tpl',
      1 => 1478182320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55794163158374f7e5d8f09-98232272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result1' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58374f7e6456e4_28374657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58374f7e6456e4_28374657')) {function content_58374f7e6456e4_28374657($_smarty_tpl) {?><section>


        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <div class="videos">
          <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
<br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['url'];?>
" frameborder="0" allowfullscreen></iframe>
            <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['description'];?>
</p>
                </div>
        <?php } ?>


   </section>



<?php }} ?>
