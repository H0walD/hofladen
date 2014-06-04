<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:19:20
         compiled from "include/angelo.b3k/templates/order_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19683447525386f65d414553-01538003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab99f528aa8358aa1845c411de251534db86681c' => 
    array (
      0 => 'include/angelo.b3k/templates/order_type.tpl',
      1 => 1401905567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19683447525386f65d414553-01538003',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f65d433041_11396593',
  'variables' => 
  array (
    'type' => 0,
    'i' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f65d433041_11396593')) {function content_5386f65d433041_11396593($_smarty_tpl) {?><div class="alert alert-info">
    <i class="fa fa-info-circle fa-2x pull-left"></i> 
    <div class="pull-left">
        W&auml;hlen Sie bitte aus ob die Bestellung, als Selbstabholer oder Lieferung bearbeitet werden soll.<br>
        Bedenken Sie bitte das bei einer Hauslieferung, zus&auml;tzliche Kosten anfallen k&ouml;nnen.
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
    <?php if ($_smarty_tpl->tpl_vars['i']->value['permission']) {?>
    <div class="col-lg-4">
        <div class="thumbnail">
            <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</h4>
            <hr>
            <div class="btn-group btn-group-justified">	
                <a class="btn btn-success btn-justified" href="index.php?shop-order-type-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><b><?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['i']->value['city'])) {?> - <?php echo $_smarty_tpl->tpl_vars['i']->value['city'];?>
<?php }?></b></a>
            </div>
            <hr>
            <p class="text-center well well-sm small" style="margin-bottom: 0px!important"><?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
</p>
        </div>
    </div>
    <?php } else { ?>
    <div class="col-lg-4">
        <div class="thumbnail">
            <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</h4>
            <hr>
            <div class="btn-group btn-group-justified">	
                <a class="btn btn-success btn-justified disabled" href="index.php?shop-order-type-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><b><?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['i']->value['city'])) {?> - <?php echo $_smarty_tpl->tpl_vars['i']->value['city'];?>
<?php }?></b></a>
            </div>
            <hr>
            <p class="text-center well well-sm small" style="margin-bottom: 0px!important"><?php echo $_smarty_tpl->tpl_vars['i']->value['message'];?>
</p>
        </div>
    </div>    
    <?php }?>
<?php } ?><?php }} ?>
