<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-11 16:24:05
  from 'C:\wamp64\www\InMoov_Web\InMoovYnov_Web\views\home.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a2eb1255596d5_06652449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4926895bfcada731a133017ebc16f2a88680d9b4' => 
    array (
      0 => 'C:\\wamp64\\www\\InMoov_Web\\InMoovYnov_Web\\views\\home.php',
      1 => 1513009444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./components/header.php' => 1,
    'file:./components/footer.php' => 1,
  ),
),false)) {
function content_5a2eb1255596d5_06652449 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\InMoov_Web\\InMoovYnov_Web\\tpl\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:./components/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> Accueil </h1>

<!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_news']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>-->

<!--<strong><?php echo $_smarty_tpl->tpl_vars['news']->value['titre'];?>
</strong> écrit le <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d/%m/%Y");?>
<br />-->

<!--<?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
<br /><br />-->
<!--<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->

<?php $_smarty_tpl->_subTemplateRender("file:./components/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
