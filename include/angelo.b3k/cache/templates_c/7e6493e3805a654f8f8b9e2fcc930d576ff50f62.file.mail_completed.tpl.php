<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:53:07
         compiled from "include/angelo.b3k/templates/mail_completed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1106475182538cd77995cdb2-30335219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e6493e3805a654f8f8b9e2fcc930d576ff50f62' => 
    array (
      0 => 'include/angelo.b3k/templates/mail_completed.tpl',
      1 => 1401905565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106475182538cd77995cdb2-30335219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538cd7799ab384_06102948',
  'variables' => 
  array (
    'payment_type' => 0,
    'order_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538cd7799ab384_06102948')) {function content_538cd7799ab384_06102948($_smarty_tpl) {?><link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<div style="margin: 25px; color: #000;">
    <div style="float: left;">
        <img src="http://nigg.howald-design.ch/include/hpbilder/shop/onlineshop.png" border="0">
    </div>
    <br style="clear: both;">
    <br style="clear: both;">
    
    <h4>
        Betreff: Bearbeitung der Bestellung
    </h4>
	
    Zahlungstyp: <?php echo $_smarty_tpl->tpl_vars['payment_type']->value['title'];?>
<br>
    Bestellungstyp: <?php echo $_smarty_tpl->tpl_vars['order_type']->value['title'];?>
<br><br>
    
    <p>
        Ihre Bestellung wurde so eben Kompletiert, je nach Bestellungsart wird es zu Ihnen geliefert oder Sie k&ouml;nnen es abholen! 
    </p>

       
    <div style="font-size:16px;font-family: 'Ubuntu', sans-serif;font-weight: bold;">
        Besten Dank f&uuml;r Ihre Bestellung bei www.hofladen.li
        <br style="clear: both;"> 
        Sobald der Status Ihrer Bestellung sich $auml;ndern werden Sie per Mail eine Info erhalten.
        <br style="clear: both;">
        Wir freuen uns, Sie schon bald wieder in unserem Shop begr&uuml;ssen zu d&uuml;rfen!
        <br style="clear: both;">
    </div>
</div><?php }} ?>
