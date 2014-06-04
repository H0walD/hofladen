<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:19:57
         compiled from "include/angelo.b3k/templates/order_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1410435865538cd50f6e5ac4-08308143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2081aa6953f3de72b0e597e64412990ddfe2cd56' => 
    array (
      0 => 'include/angelo.b3k/templates/order_index.tpl',
      1 => 1401905566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1410435865538cd50f6e5ac4-08308143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538cd50f71d796_75094841',
  'variables' => 
  array (
    'new' => 0,
    'cur' => 0,
    'old' => 0,
    'sto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538cd50f71d796_75094841')) {function content_538cd50f71d796_75094841($_smarty_tpl) {?><div class="col-lg-2">
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
