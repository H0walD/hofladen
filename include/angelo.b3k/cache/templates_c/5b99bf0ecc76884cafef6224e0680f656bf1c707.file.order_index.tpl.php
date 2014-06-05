<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 22:11:08
         compiled from "include\angelo.b3k\templates\order_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9003538f7d5c6f5438-04955883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b99bf0ecc76884cafef6224e0680f656bf1c707' => 
    array (
      0 => 'include\\angelo.b3k\\templates\\order_index.tpl',
      1 => 1401898320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9003538f7d5c6f5438-04955883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new' => 0,
    'cur' => 0,
    'old' => 0,
    'sto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538f7d5c724231_96262796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f7d5c724231_96262796')) {function content_538f7d5c724231_96262796($_smarty_tpl) {?><div class="col-lg-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>Men&uuml;</b>
        </div>
        <ul class="nav nav-pills nav-stacked">
            <li><a href="admin.php?shop-orders-0"><span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['new']->value;?>
</span> Offene Bestellungen</a></li>
            <li><a href="admin.php?shop-orders-1"><span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['cur']->value;?>
</span> In Bearbeitung</a></li>
            <li><a href="admin.php?shop-orders-2"><span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['old']->value;?>
</span> Erledigte Bestellungen</a></li>
            <li><a href="admin.php?shop-orders-3"><span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['sto']->value;?>
</span> Stoniert</a></li>
        </ul>
    </div>
</div><?php }} ?>
