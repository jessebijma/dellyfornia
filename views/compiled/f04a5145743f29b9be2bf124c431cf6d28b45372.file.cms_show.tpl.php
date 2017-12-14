<?php /* Smarty version Smarty-3.1.18, created on 2016-11-24 21:41:47
         compiled from "views/cms_show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9316146555837508b0193c6-97991077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04a5145743f29b9be2bf124c431cf6d28b45372' => 
    array (
      0 => 'views/cms_show.tpl',
      1 => 1479897015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9316146555837508b0193c6-97991077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result3' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5837508b0909d4_32028846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5837508b0909d4_32028846')) {function content_5837508b0909d4_32028846($_smarty_tpl) {?>
<a href="?action=admin&cms_action=insert">New</a>
<table>
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</td>
                <td><content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content></td>
                <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</td>
                <td><a href="?action=admin&cms_action=edit">edit</a></td>
                <td><a  href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a></td>
                </tr>
        <?php } ?>
    </table><?php }} ?>
