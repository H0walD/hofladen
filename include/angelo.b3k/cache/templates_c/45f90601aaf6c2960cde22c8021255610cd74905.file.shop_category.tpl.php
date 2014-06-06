<?php /* Smarty version Smarty-3.1.17, created on 2014-06-06 22:44:09
         compiled from "include\angelo.b3k\templates\shop_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2358353922819487186-79713017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45f90601aaf6c2960cde22c8021255610cd74905' => 
    array (
      0 => 'include\\angelo.b3k\\templates\\shop_category.tpl',
      1 => 1401898320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2358353922819487186-79713017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539228194ae283_06293107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539228194ae283_06293107')) {function content_539228194ae283_06293107($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<a href="index.php?shop-article-<?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
">
    <div class="col-lg-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <img class="img-thumbnail" src="<?php if (file_exists($_smarty_tpl->tpl_vars['item']->value['category_image'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['category_image'];?>
<?php } else { ?>include/angelo.b3k/images/placeholder.png<?php }?>">
                <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>
</h4>
            </div>
        </div>
    </div>
</a>
<?php } ?><?php }} ?>
