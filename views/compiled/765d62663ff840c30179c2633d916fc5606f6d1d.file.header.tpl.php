<?php /* Smarty version Smarty-3.1.18, created on 2016-11-23 10:52:30
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2246458356a8cd9f986-23014330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1479898349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2246458356a8cd9f986-23014330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58356a8cdb8a76_30462871',
  'variables' => 
  array (
    'headerText' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58356a8cdb8a76_30462871')) {function content_58356a8cdb8a76_30462871($_smarty_tpl) {?><header>

    <div class="headertxt">
  <p> <?php echo $_smarty_tpl->tpl_vars['headerText']->value;?>
 </p>
        </div>

  <div id="nav">
    <ul>
      

      <li> <a href= "?action=fotos">Fotos</a> </li>

      <li><a href="?action=news">Nieuws</a> </li>

      <li><a href="?action=videos">Videos</a> </li>

      

      <li><a href="?action=zoeken">Zoeken</a> </li>

      <li><a href="?action=admin">Admin</a></li>


    </ul>
  </div>
    
  <img src="images/dellyfornia.png">
</a>


</header>
<?php }} ?>
