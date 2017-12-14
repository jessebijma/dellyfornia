<?php /* Smarty version Smarty-3.1.18, created on 2016-11-23 10:30:18
         compiled from "views\cms_show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:641458356b3ed8eb77-56094224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab15a3e175bcabfae184e3e5bdcdb4b96c17c4f' => 
    array (
      0 => 'views\\cms_show.tpl',
      1 => 1479897015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '641458356b3ed8eb77-56094224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58356b3ee75c97_23495049',
  'variables' => 
  array (
    'result3' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58356b3ee75c97_23495049')) {function content_58356b3ee75c97_23495049($_smarty_tpl) {?>
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
