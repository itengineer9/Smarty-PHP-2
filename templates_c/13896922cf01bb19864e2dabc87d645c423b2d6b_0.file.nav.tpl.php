<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 13:15:02
  from 'C:\xampp2\htdocs\SmartCSSWebsite2\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc8d6c6337711_24170003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13896922cf01bb19864e2dabc87d645c423b2d6b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\SmartCSSWebsite2\\templates\\nav.tpl',
      1 => 1606987528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kontakt.tpl' => 1,
    'file:impressum.tpl' => 1,
    'file:startseite.tpl' => 2,
  ),
),false)) {
function content_5fc8d6c6337711_24170003 (Smarty_Internal_Template $_smarty_tpl) {
?>                                                                 <?php if ((isset($_smarty_tpl->tpl_vars['smart']->value['get']['nav']))) {?>
                                                                               <?php if ($_GET['nav'] == 'kontakt') {?>
                                                                                   <?php $_smarty_tpl->_subTemplateRender('file:kontakt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                                               <?php } elseif ($_GET['nav'] == 'impressum') {?>
                                                                                       <?php $_smarty_tpl->_subTemplateRender('file:impressum.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                                                <?php } else { ?>
                                                                                    <?php $_smarty_tpl->_subTemplateRender('file:startseite.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                                                <?php }?>   
                                                                   <?php } else { ?>
                                                                       <?php $_smarty_tpl->_subTemplateRender('file:startseite.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                                  <?php }
}
}
