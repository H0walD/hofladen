<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 22:11:17
         compiled from "include\angelo.b3k\templates\print_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14080538f7d65c7d6a9-58652934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac652dfd331f9357cba7c04650ed4a20a80667aa' => 
    array (
      0 => 'include\\angelo.b3k\\templates\\print_order.tpl',
      1 => 1401898320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14080538f7d65c7d6a9-58652934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'payment_type' => 0,
    'order_type' => 0,
    'sum_price' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538f7d65d25654_81494434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f7d65d25654_81494434')) {function content_538f7d65d25654_81494434($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'U:\\Xampp\\htdocs\\hofladen\\include\\angelo.b3k\\libs\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_price')) include 'U:\\Xampp\\htdocs\\hofladen\\include\\angelo.b3k\\libs\\smarty\\plugins\\modifier.price.php';
if (!is_callable('smarty_modifier_config')) include 'U:\\Xampp\\htdocs\\hofladen\\include\\angelo.b3k\\libs\\smarty\\plugins\\modifier.config.php';
?><style type="text/css">
    body, table{
        font-size: 12px;
    }
</style>

<script>

    window.onload=function(){
        window.print();
    };

</script>

<div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>Kommissionsauftrag - <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['order_id'];?>
</b>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <td>
                        <i class="fa fa-home fa-2x"></i> <b>Adresse</b>
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
                    </td>
                    <td>
                        <i class="fa fa-info-circle fa-2x"></i> <b>Information</b>
                        <hr style="margin-bottom: 2px; margin-top: 4px;">
                        Bestellt am:
                        <b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['order']['order_date'],'%a %d.%m.%Y um %H:%M Uhr');?>
</b><br /><br />
                        
                        Auftrags Nr.:
                        <b><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['order_id'];?>
</b><br />
                        
                        Zahlungstyp:
                        <b><?php echo $_smarty_tpl->tpl_vars['payment_type']->value[$_smarty_tpl->tpl_vars['data']->value['order']['order_payment']]['type'];?>
</b><br />

                        Bestelltyp:
                        <b><?php echo $_smarty_tpl->tpl_vars['order_type']->value[$_smarty_tpl->tpl_vars['data']->value['order']['order_type']]['type'];?>
</b><br />
                    </td>
                </tr>
            </table>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th class="text-right">Art.Nr.</th>
                    <th>Art.Name</th>
                    <th class="text-center">Einheit</th>
                    <th class="text-center">Menge</th>
                    <th class="text-center">Einheitspreis</th>
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
                            
                        </td>
                        <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['i']->value['article']['article_id'];?>
</td>
                        <td>
                            <b><?php echo $_smarty_tpl->tpl_vars['i']->value['article']['article_name'];?>
</b>
                        </td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['article']['article_amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['article']['unit_short'];?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['order']['user_amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['article']['unit_short'];?>
</td>
                        <td class="text-center"><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article']['article_grossprice']);?>
 <?php echo smarty_modifier_config('currency');?>
</td>
                        <td class="text-center"><b><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['order']['user_price']);?>
 <?php echo smarty_modifier_config('currency');?>
</b></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5"></td>
                    <td class="text-right">Total:</td>
                    <td class="text-center"><b><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['sum_price']->value);?>
  <?php echo smarty_modifier_config('currency');?>
</b></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>             <?php }} ?>
