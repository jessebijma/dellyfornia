<?php /* Smarty version Smarty-3.1.18, created on 2016-11-24 21:17:14
         compiled from "views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57158698158374acaa60282-52629933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060abf0b97e0af3d1307708ca95b6c89fd7a5b4a' => 
    array (
      0 => 'views/header.tpl',
      1 => 1479898349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57158698158374acaa60282-52629933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headerText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58374acaa6c754_17644311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58374acaa6c754_17644311')) {function content_58374acaa6c754_17644311($_smarty_tpl) {?><header>

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
