<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:19:17
         compiled from "include/angelo.b3k/templates/shopping_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7081231845386f639af0a28-14668856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ec3cd435d9ad0500ab49af38eb31476acb7b71' => 
    array (
      0 => 'include/angelo.b3k/templates/shopping_cart.tpl',
      1 => 1401905567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7081231845386f639af0a28-14668856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f639b83c55_67537901',
  'variables' => 
  array (
    'article' => 0,
    'menu' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f639b83c55_67537901')) {function content_5386f639b83c55_67537901($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_price')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.price.php';
if (!is_callable('smarty_modifier_config')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.config.php';
?><div id="article">
    <?php if (!empty($_smarty_tpl->tpl_vars['article']->value)) {?>
    <div class="btn-group btn-default pull-right">
        <a class="btn btn-info" href="index.php?shop-article-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
"><i class="fa fa-reply-all"></i> Weiter Einkaufen gehen</a>
        <a class="btn btn-default" href="index.php?shop-shoppingcart-clear"><i class="fa fa-shopping-cart"></i> Warenkorb Leeren</a>
    </div><br style="clear: both;" />
    <hr>
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
                    <th class="text-center">Kategorie</th>
                    <th class="text-center">Brutto - Menge</th>
                    <th class="text-center table-bordered" colspan="4">&Auml;nderungen</th>
                    <th class="text-center">MwSt.</th>
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
                    <td class="small text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['category_name'];?>
</td>
                    <td class="text-center small"><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_grossprice']);?>
 f&uuml;r <?php echo $_smarty_tpl->tpl_vars['i']->value['article_amount'];?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['unit_short'];?>
 </td>
                    <td class="text-center table-bordered"><a class="btn btn-success btn-xs" href="index.php?shop-shoppingcart-recalc&data=p&<?php echo http_build_query($_smarty_tpl->tpl_vars['i']->value);?>
#article-<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
"><i class="fa fa-plus-circle"></i></a></td>
                    <td class="text-center table-bordered"><b><?php echo $_SESSION['shop']['cart'][$_smarty_tpl->tpl_vars['i']->value['article_id']]['user_amount'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['i']->value['unit_unit'];?>
</td>
                    <td class="text-center table-bordered"><a class="btn btn-warning btn-xs"  href="index.php?shop-shoppingcart-recalc&data=m&<?php echo http_build_query($_smarty_tpl->tpl_vars['i']->value);?>
#article-<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
"><i class="fa fa-minus-circle"></i></a></td>
                    <td class="text-center table-bordered"><a class="btn btn-danger btn-xs"  href="index.php?shop-shoppingcart-delete-<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
"><i class="fa fa-trash-o"></i></a></td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['article_tax'];?>
%</td>
                    <td class="text-center info"><?php echo smarty_modifier_price($_SESSION['shop']['cart'][$_smarty_tpl->tpl_vars['i']->value['article_id']]['user_price']);?>
 <?php echo smarty_modifier_config('currency');?>
</td>
                </tr>
            <?php } ?>
            </tbody>
            <tfood>
                <tr>
                    <td colspan="8"><span class="small"><i>alle Angaben inkl. MwSt.</i></span> </td>
                    <td class="text-right" >Total</td>
                    <td class="text-center"><b><?php echo smarty_modifier_price($_SESSION['shop']['price']);?>
 <?php echo smarty_modifier_config('currency');?>
</b></td>
                </tr>
            </tfood>
        </table>        
    </div>
    <a class="btn btn-success pull-right" href="index.php?shop-order">Bestellen</a>
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
<?php }} ?>
