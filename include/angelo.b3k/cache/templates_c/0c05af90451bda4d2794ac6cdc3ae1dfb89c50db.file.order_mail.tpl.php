<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:19:49
         compiled from "include/angelo.b3k/templates/order_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12766347855386f6ae4e7134-36094314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c05af90451bda4d2794ac6cdc3ae1dfb89c50db' => 
    array (
      0 => 'include/angelo.b3k/templates/order_mail.tpl',
      1 => 1401905566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12766347855386f6ae4e7134-36094314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f6ae56b710_46201231',
  'variables' => 
  array (
    'address' => 0,
    'order_id' => 0,
    'payment_type' => 0,
    'order_type' => 0,
    'article' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f6ae56b710_46201231')) {function content_5386f6ae56b710_46201231($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_price')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.price.php';
?><link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<div style="margin: 25px; color: #000;">
    <div style="float: left;">
        <img src="http://nigg.howald-design.ch/include/hpbilder/shop/onlineshop.png" border="0">
    </div>
    <br style="clear: both;">
    <br style="clear: both;">
    
    <div style="float: left;">
        <div style=" background-color: #95c0ad; border: 1px solid rgba(0,0,0,0.3); -webkit-border-radius: 6px;-moz-border-radius: 6px;border-radius: 6px;padding: 25px" >
            <p style="font-size:16px;font-family: 'Ubuntu', sans-serif;font-weight: bold;">Ihre Anschrift:</p>
            </br>
                <?php if ($_smarty_tpl->tpl_vars['address']->value['address_company']) {?><?php echo $_smarty_tpl->tpl_vars['address']->value['address_company'];?>
<br><?php }?>
                <?php echo $_smarty_tpl->tpl_vars['address']->value['address_first_name'];?>

                <?php echo $_smarty_tpl->tpl_vars['address']->value['address_last_name'];?>
<br>
                <?php echo $_smarty_tpl->tpl_vars['address']->value['address_street'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['address_street_nr'];?>
<br>
                <?php echo $_smarty_tpl->tpl_vars['address']->value['address_zipcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['address_place'];?>
<br><br>
                <?php echo $_smarty_tpl->tpl_vars['address']->value['address_phone'];?>

        </div>
    </div>

    <div style="float:right">
        <div style=" background-color: #CCC; border: 1px solid rgba(0,0,0,0.3); -webkit-border-radius: 6px;-moz-border-radius: 6px;border-radius: 6px;padding: 25px">
            Nigg's Hofladen<br>
            Auelen 1<br>
            FL - 9496 Balzers<br>
            <br><hr>
            Tel: +423 384 24 86<br>
            Fax +423 384 24 93<br>
        </div>
    </div>

    <br style="clear: both;">
    
    <h4>
        Rechnungsnummer: <?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
, Kundennummer: <?php echo $_SESSION['authid'];?>

    </h4>
	
	Zahlungstyp: <?php echo $_smarty_tpl->tpl_vars['payment_type']->value['title'];?>
<br>
	Bestellungstyp: <?php echo $_smarty_tpl->tpl_vars['order_type']->value['title'];?>
<br><br>

        <table width="100%" border="1" cellpadding="5" cellspacing="0" style="font-family: 'Ubuntu', sans-serif;">
        <thead>
            <tr bgcolor="#95c0ad">
                <td align="right">Art.-Nr.</td>
                <td>Artikel</td>
                <td align="center">Preis - Menge</td>
                <td align="center">MwSt.</td>
                <td align="center">Menge</td>
                <td align="center">Preis</td>
            </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <tr id="article<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
">
                <td bgcolor="#d4d5d6" align="right"><?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
</td>
                <td><b><?php echo $_smarty_tpl->tpl_vars['i']->value['article_name'];?>
</b></td>
                <td align="center"><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_grossprice']);?>
 f&uuml;r <?php echo $_smarty_tpl->tpl_vars['i']->value['article_amount'];?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['unit_short'];?>
 </td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['article_tax'];?>
%</td>
                <td align="center"><b><?php echo $_SESSION['shop']['cart'][$_smarty_tpl->tpl_vars['i']->value['article_id']]['user_amount'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['i']->value['unit_unit'];?>
</td>
                <td align="center"><?php echo smarty_modifier_price($_SESSION['shop']['cart'][$_smarty_tpl->tpl_vars['i']->value['article_id']]['user_price']);?>
</td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr bgcolor="#95c0ad">
                <td colspan="4"><span class="small"><i>alle Angaben inkl. MwSt.</i></span> </td>
                <td align="right">Total</td>
                <td align="center"><b><?php echo smarty_modifier_price($_SESSION['shop']['price']);?>
</b></td>
            </tr>
        </tfoot>
    </table>
            <div style="font-size:16px;font-family: 'Ubuntu', sans-serif;font-weight: bold;">
                Besten Dank f�r Ihre Bestellung bei www.hofladen.li
                <br style="clear: both;"> 
                Sobald der Status Ihrer Bestellung sich �ndern werden Sie per Mail eine Info erhalten.
                <br style="clear: both;">
                Wir freuen uns, Sie schon bald wieder in unserem Shop begr��en zu d�rfen!
                <br style="clear: both;">
            </div>
</div><?php }} ?>
