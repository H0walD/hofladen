<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:13:57
         compiled from "include/angelo.b3k/templates/shop_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12130027675386f601af1cb9-70418475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b49d5a9f67c51e629fc4e894226f94fab9fc89a2' => 
    array (
      0 => 'include/angelo.b3k/templates/shop_bar.tpl',
      1 => 1401905567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12130027675386f601af1cb9-70418475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f601b4d691_29002113',
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f601b4d691_29002113')) {function content_5386f601b4d691_29002113($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_config')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.config.php';
?><div class="col-lg-12">
    <div class="input-group">
        <span class="input-group-btn ">
            <a class="btn btn-success" href="?shop-article-0"><i class="fa fa-mail-reply-all"></i> Zur&uuml;ck</a>
            <a class="btn btn-info" href="?shop"><i class="fa fa-inbox"></i>&nbsp;Produkte</a>
        </span>
        <span class="input-group-addon"><i class="fa fa-search fa-lg search-icon"></i></span>
        <input type="text" data-search="index.php?shop-ajax-search" data-set="#article" class="form-control" name="search" placeholder="Suchen">
        <span class="input-group-btn">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-shopping-cart fa-lg"></i>&nbsp; &nbsp;
                <b id="articleNum"><?php echo $_smarty_tpl->tpl_vars['cart']->value['articleNum'];?>
</b>x Artikel |  
                <b id="priceSum"><?php echo $_smarty_tpl->tpl_vars['cart']->value['priceSum'];?>
</b> <?php echo smarty_modifier_config('currency');?>

                &nbsp; &nbsp;<span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right">
              <li><a href="?shop-shoppingcart">Zum Warenkorb</a></li>
              <li class="divider"></li>
              <li><a href="index.php?shop-ajax-clearShoppingCart"><i class="fa fa-trash"></i> Warenkorb Leeren</a></li>
            </ul>
        </span>
    </div>
</div>
<br /><br /><?php }} ?>
