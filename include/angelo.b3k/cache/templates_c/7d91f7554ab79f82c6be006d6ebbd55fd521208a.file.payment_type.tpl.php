<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:19:41
         compiled from "include/angelo.b3k/templates/payment_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5995396285386f68c06c4a5-63456294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d91f7554ab79f82c6be006d6ebbd55fd521208a' => 
    array (
      0 => 'include/angelo.b3k/templates/payment_type.tpl',
      1 => 1401905567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5995396285386f68c06c4a5-63456294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f68c0b3798_90055688',
  'variables' => 
  array (
    'type' => 0,
    'i' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f68c0b3798_90055688')) {function content_5386f68c0b3798_90055688($_smarty_tpl) {?><div class="alert alert-info">
    <i class="fa fa-info-circle fa-2x pull-left"></i> 
    <div class="pull-left">
        Wie m&ouml;chten Sie Bezahlen?<br>
    </div>
    <br style="clear: both;" />
</div>

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
    <?php if ($_SESSION['authright']<=$_smarty_tpl->tpl_vars['i']->value['permission']) {?>
    <div class="col-lg-4">
        <div class="thumbnail">
            <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</h4>
            <hr>
            <div class="btn-group btn-group-justified">	
                <a class="btn btn-success btn-justified" href="index.php?shop-order-payment-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><b><?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
</b></a>
            </div>
            <hr>
            <p class="text-center well well-sm small" style="margin-bottom: 0px!important"><?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
</p>
        </div>
    </div>
    <?php }?>
<?php } ?><?php }} ?>
