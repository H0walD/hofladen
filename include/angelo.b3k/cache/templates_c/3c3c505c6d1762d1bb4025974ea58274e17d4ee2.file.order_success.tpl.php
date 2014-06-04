<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:19:49
         compiled from "include/angelo.b3k/templates/order_success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3297677055386f6ae647534-58025798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c3c505c6d1762d1bb4025974ea58274e17d4ee2' => 
    array (
      0 => 'include/angelo.b3k/templates/order_success.tpl',
      1 => 1401905566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3297677055386f6ae647534-58025798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f6ae651a25_77996070',
  'variables' => 
  array (
    'order_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f6ae651a25_77996070')) {function content_5386f6ae651a25_77996070($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['order_status']->value) {?>
    <div class="alert alert-success">
        <i class="fa fa-check-circle fa-3x pull-left"></i>
        <div class="pull-left">
            Vielen dank f&uuml;r Ihren einkauf.
            
            Ihnen wird in k&uuml;rze eine Best&auml;tiguns Mail &uuml;ber Ihren einkauf geschickt.
        </div>
        <br class="clearboth" />
    </div>
<?php } else { ?>
    <div class="alert alert-danger">
        <i class="fa fa-check-circle fa-3x pull-left"></i>
        <div class="pull-left">
            Es ist ein Fehler aufgetreten, bitte versuchen Sie es Sp&auml;ter erneut.
        </div>
        <br class="clearboth" />
    </div>
<?php }?><?php }} ?>
