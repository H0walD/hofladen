<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:19:45
         compiled from "include/angelo.b3k/templates/order_confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4547819255386f690ba9f93-93995326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '875cb1c2ec9dd85027517f6791c340047c4d8175' => 
    array (
      0 => 'include/angelo.b3k/templates/order_confirm.tpl',
      1 => 1401905566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4547819255386f690ba9f93-93995326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f690c4f553_53550921',
  'variables' => 
  array (
    'article' => 0,
    'i' => 0,
    'menu' => 0,
    'order' => 0,
    'payment' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f690c4f553_53550921')) {function content_5386f690c4f553_53550921($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_price')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.price.php';
?><div id="article" class="col-lg-8">
    <?php if (!empty($_smarty_tpl->tpl_vars['article']->value)) {?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>Warenkorb</b> | <?php echo count($_smarty_tpl->tpl_vars['article']->value);?>
 Artikel
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-right">Art.-Nr.</th>
                    <th>Artikelname</th>
                    <th class="text-center">Preis - Menge</th>
                    <th class="text-center table-bordered" colspan="4">&Auml;nderungen</th>
                    <th class="text-right">Preis</th>
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
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
</td>
                    <td><b><?php echo $_smarty_tpl->tpl_vars['i']->value['article_name'];?>
</b></td>
                    <td class="text-center small"><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_grossprice']);?>
 f&uuml;r <?php echo $_smarty_tpl->tpl_vars['i']->value['article_amount'];?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['unit_short'];?>
 </td>
                    <td class="text-center table-bordered"><a class="btn btn-success btn-xs" href="index.php?shop-order-recalc&data=p&<?php echo http_build_query($_smarty_tpl->tpl_vars['i']->value);?>
#article-<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
"><i class="fa fa-plus-circle"></i></a></td>
                    <td class="text-center table-bordered"><b><?php echo $_SESSION['shop']['cart'][$_smarty_tpl->tpl_vars['i']->value['article_id']]['user_amount'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['i']->value['unit_unit'];?>
</td>
                    <td class="text-center table-bordered"><a class="btn btn-warning btn-xs"  href="index.php?shop-order-recalc&data=m&<?php echo http_build_query($_smarty_tpl->tpl_vars['i']->value);?>
#article-<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
"><i class="fa fa-minus-circle"></i></a></td>
                    <td class="text-center table-bordered"><a class="btn btn-danger btn-xs"  href="index.php?shop-order-delete-<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
"><i class="fa fa-trash-o"></i></a></td>
                    <td class="text-right info"><?php echo smarty_modifier_price($_SESSION['shop']['cart'][$_smarty_tpl->tpl_vars['i']->value['article_id']]['user_price']);?>
</td>
                </tr>
            <?php } ?>
            </tbody>
            <tfood>
                <tr>
                    <td colspan="6"><span class="small"><i>alle Angaben inkl. MwSt.</i></span> </td>
                    <td class="text-right" >Total</td>
                    <td class="text-right"><b><?php echo smarty_modifier_price($_SESSION['shop']['price']);?>
</b></td>
                </tr>
            </tfood>
        </table>        
    </div>
    <form class="form form-horizontal" action="index.php?shop-order-success" method="post">
        <div class="pull-left">
            <label for="agb">
                <input id="agb" type="checkbox" name="agb" value="1" onclick="$('button[type=submit]').toggleClass('disabled');">
                Hier mit Best&auml;tige ich die <a href="index.php?agb">AGB</a>
            </label>
        </div>
        <div class="pull-right">
            <button type="submit" class="btn btn-success disabled">Bestellung abschicken</button>
        </div>
    </form>
    <?php } else { ?>
        <br style="clear: both;" />
        <div class="alert alert-info">
            <i class="fa fa-info-circle fa-2x pull-left"></i> 
            <p class="pull-left">
                Es sind keine Artikel im Warenkorb<br />
                <a class="btn btn-default" href="index.php?shop-article-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
"><i class="fa fa-reply-all"></i> Einkaufen gehen</a>
            </p>
            <br style="clear: both;" />
        </div>
    <?php }?>
</div>

<div id="article" class="col-lg-4">
    <ul class="list-group list-group-default">
        <a class="list-group-item list-group-item-info text-center" href="index.php?shop-order-reset-order_type">
            <b><?php echo $_smarty_tpl->tpl_vars['order']->value['type'];?>
</b>
            <i class="fa fa-edit pull-right"></i>
            <br style="clearboth">
        </a>
        <li class="list-group-item text-center">
            <b><?php echo $_smarty_tpl->tpl_vars['order']->value['title'];?>
</b>
            <hr>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['order']->value['message'];?>

            </p>
        </li>
        <a class="list-group-item list-group-item-info" href="index.php?shop-order-reset-order_payment">
            <i class="fa fa-dollar fa-lg"></i> <b>Zahlungsmethode: <?php echo $_smarty_tpl->tpl_vars['payment']->value['type'];?>
</b>
            <i class="fa fa-edit pull-right"></i>
            <br style="clearboth">
        </a>
        <li class="list-group-item text-center">
            <b><?php echo $_smarty_tpl->tpl_vars['payment']->value['title'];?>
</b>
            <hr>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['payment']->value['message'];?>

            </p>
        </li>
        <a class="list-group-item list-group-item-info" href="index.php?shop-order-reset-order_address">
            <i class="fa fa-home fa-lg"></i> <b>Lieferadresse</b>
            <i class="fa fa-edit pull-right"></i>
            <br style="clearboth">
        </a>
        <li class="list-group-item">
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

        </li>
        
    </ul>
</div>
<?php }} ?>
