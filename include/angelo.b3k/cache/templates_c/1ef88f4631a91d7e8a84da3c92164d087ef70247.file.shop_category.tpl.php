<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:13:57
         compiled from "include/angelo.b3k/templates/shop_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6253799405386f601b64123-54079812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ef88f4631a91d7e8a84da3c92164d087ef70247' => 
    array (
      0 => 'include/angelo.b3k/templates/shop_category.tpl',
      1 => 1401905567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6253799405386f601b64123-54079812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f601b8a9f3_72643123',
  'variables' => 
  array (
    'category' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f601b8a9f3_72643123')) {function content_5386f601b8a9f3_72643123($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
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
