<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:27:04
         compiled from "include/angelo.b3k/templates/orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:444418813538cd51396e110-19265337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec953663972ccd00d303aa73edc3f4f89903ac38' => 
    array (
      0 => 'include/angelo.b3k/templates/orders.tpl',
      1 => 1401906391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '444418813538cd51396e110-19265337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538cd5139f85b6_75442965',
  'variables' => 
  array (
    'i' => 0,
    'orders' => 0,
    'sum_price' => 0,
    'payment_type' => 0,
    'order_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538cd5139f85b6_75442965')) {function content_538cd5139f85b6_75442965($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_price')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.price.php';
if (!is_callable('smarty_modifier_config')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.config.php';
?><div class="col-lg-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>
                <?php if ($_smarty_tpl->tpl_vars['i']->value['order_process']==0) {?>
                    Neue Bestellungen
                <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['order_process']==1) {?>
                    In Bearbeitung
                <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['order_process']==2) {?>
                    Alte Bestellungen
                <?php }?>
            </b>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-right"></th>
                    <th class="text-right"></th>
                    <th class="text-center">Datum</th>
                    <th class="text-center">Best.Nr.</th>
                    <th class="text-center">Kdn.Nr.</th>
                    <th class="text-center">Zahlung</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Artikel Anzahl</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $_smarty_tpl->tpl_vars['sum_price'] = new Smarty_variable('0', null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['sum_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['sum_price']->value+$_smarty_tpl->tpl_vars['i']->value['order_price'], null, 0);?>
                <tr>
                    <td class="text-center">
                        <a href="admin.php?shop-print-<?php echo $_smarty_tpl->tpl_vars['i']->value['order_id'];?>
" target="_blank"><i class="fa fa-print fa-2x"></i> </a>
                    </td>
                    <td class="text-center">
                        <a href="admin.php?shop-details-<?php echo $_smarty_tpl->tpl_vars['i']->value['order_id'];?>
">
                            <i class="fa fa-edit fa-2x"></i>
                        </a>
                    </td>
                    <td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['order_date'],'%a %d.%m.%Y um %H:%M Uhr');?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['order_id'];?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['order_user'];?>
 | <?php echo $_smarty_tpl->tpl_vars['i']->value['order_name'];?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['payment_type']->value[$_smarty_tpl->tpl_vars['i']->value['order_payment']]['type'];?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['order_type']->value[$_smarty_tpl->tpl_vars['i']->value['order_type']]['type'];?>
 | <?php echo $_smarty_tpl->tpl_vars['order_type']->value[$_smarty_tpl->tpl_vars['i']->value['order_type']]['city'];?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['num'];?>
</td>
                    <td class="text-center info"><b><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['order_price']);?>
 <?php echo smarty_modifier_config('currency');?>
</b></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="7">Summe aller auftr&auml;ge</th>
                    <th class="text-right">Total:</th>
                    <th class="text-center success"><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['sum_price']->value);?>
 <?php echo smarty_modifier_config('currency');?>
</th>
                </tr>
            </foot>
        </table>
    </div>
</div><?php }} ?>
