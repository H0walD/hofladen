<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:20:07
         compiled from "include/angelo.b3k/templates/order_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479268358538cd571d2c7a0-84669263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b68377197c0b74459a17cc7d241e0f3e65e3703d' => 
    array (
      0 => 'include/angelo.b3k/templates/order_details.tpl',
      1 => 1401905566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479268358538cd571d2c7a0-84669263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538cd571e0a765_66764391',
  'variables' => 
  array (
    'data' => 0,
    'payment_type' => 0,
    'order_type' => 0,
    'menu' => 0,
    'sum_price' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538cd571e0a765_66764391')) {function content_538cd571e0a765_66764391($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_price')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.price.php';
if (!is_callable('smarty_modifier_config')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.config.php';
?><div class="col-lg-8">
    <div class="panel panel-<?php if ($_smarty_tpl->tpl_vars['data']->value['order']['order_process']==0) {?>warning<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['order']['order_process']==1) {?>info<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['order']['order_process']==2) {?>success<?php }?>">
        <div class="panel-heading">
            <b>Bestellung</b>
        </div>
        <div class="panel-body">
            <div class="col-lg-3">
                <b>Adresse</b>
                <hr style="margin-bottom: 2px; margin-top: 4px;">
                <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['address_company'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['address_last_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['address_first_name'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['address_street'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['address_street_nr'];?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['address_zipcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['address_place'];?>
<br />
                <br />
                <i class="fa fa-phone-square fa-lg"></i> <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['address_phone'];?>
<br />
            </div>
            <div class="col-lg-4">
                <b>Information</b>
                <hr style="margin-bottom: 2px; margin-top: 4px;">
                Bestellt am:
                <b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['order']['order_date'],'%a %d.%m.%Y um %H:%M Uhr');?>
</b><br /><br />
                
                Zahlungstyp:
                <b><?php echo $_smarty_tpl->tpl_vars['payment_type']->value[$_smarty_tpl->tpl_vars['data']->value['order']['order_payment']]['type'];?>
</b><br />
                
                Bestelltyp:
                <b><?php echo $_smarty_tpl->tpl_vars['order_type']->value[$_smarty_tpl->tpl_vars['data']->value['order']['order_type']]['type'];?>
</b><br />
            </div>
            <div class="col-lg-5">
                <b>Optionen</b>
                <hr style="margin-bottom: 2px; margin-top: 4px;">
                <div class="btn-group btn-group-justified">
                    <a href="admin.php?shop-print-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Druckansicht</a>
                </div><br />
                
                Bestellstatus &auml;ndern!
                <div class="btn-group btn-group-justified">
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['order']['order_process']!=0) {?><a href="admin.php?shop-details-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-p0" class="btn btn-warning">Neue Bestellung</a><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['order']['order_process']!=1) {?><a href="admin.php?shop-details-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-p1" class="btn btn-info">Bearbeitung</a><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['order']['order_process']!=2) {?><a href="admin.php?shop-details-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-c2" class="btn btn-success">Erledigt</a><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['order']['order_process']!=3) {?><a href="admin.php?shop-details-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-p3" class="btn btn-danger">Storno</a><?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['order']['order_process']==3) {?><p><br /><a href="admin.php?shop-details-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-d<?php echo $_smarty_tpl->tpl_vars['data']->value['order']['order_id'];?>
" class="btn btn-danger">L&oumlschen</a></p><?php }?>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th class="text-right">Art.Nr.</th>
                    <th>Art.Name</th>
                    <th class="text-center">Einheit</th>
                    <th class="text-center">Einheitspreis</th>
                    <th class="text-center">Menge</th>
                    <th class="text-center">MwSt.</th>
                    <th class="text-center">Gesamt Preis</th>
                </tr>
            </thead>
            <tbody>
                <?php $_smarty_tpl->tpl_vars['sum_price'] = new Smarty_variable('0', null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['sum_price'] = new Smarty_variable($_smarty_tpl->tpl_vars['sum_price']->value+$_smarty_tpl->tpl_vars['i']->value['order']['user_price'], null, 0);?>
                    <tr>
                        <td class="text-center">
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['order']['order_process']>=1) {?>
                                <a class="btn btn-success btn-xs" href="admin.php?shop-details-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-a0-<?php echo $_smarty_tpl->tpl_vars['i']->value['article']['article_id'];?>
"><i class="fa fa-check-square fa-2x"></i></a>
                            <?php } else { ?>
                                <a class="btn btn-info btn-xs" href="admin.php?shop-details-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-a1-<?php echo $_smarty_tpl->tpl_vars['i']->value['article']['article_id'];?>
"><i class="fa fa-square fa-2x"></i></a>
                            <?php }?>
                        </td>
                        <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['i']->value['article']['article_id'];?>
</td>
                        <td>
                            <b><?php echo $_smarty_tpl->tpl_vars['i']->value['article']['article_name'];?>
</b>
                            <div class="small text-justify"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['article']['article_description'],128,'...',true);?>
</div>
                        </td>                       
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['order']['user_amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['article']['unit_short'];?>
</td>
                        <td class="text-center"><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article']['article_grossprice']);?>
 <?php echo smarty_modifier_config('currency');?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['article']['article_amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['article']['unit_short'];?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['article']['article_tax'];?>
%</td>
                        <td class="text-center"><b><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['order']['user_price']);?>
 <?php echo smarty_modifier_config('currency');?>
</b></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6"></td>
                    <td class="text-right">Total:</td>
                    <td class="text-center"><b><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['sum_price']->value);?>
  <?php echo smarty_modifier_config('currency');?>
</b></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div><?php }} ?>
