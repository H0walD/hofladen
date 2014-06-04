<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:13:57
         compiled from "include/angelo.b3k/templates/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20705673115386f601b9da33-66035429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b6332679e1c9d285bae90039e1d78762f1388d' => 
    array (
      0 => 'include/angelo.b3k/templates/article.tpl',
      1 => 1401905565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20705673115386f601b9da33-66035429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f601bf6747_66348798',
  'variables' => 
  array (
    'article' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f601bf6747_66348798')) {function content_5386f601bf6747_66348798($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_price')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.price.php';
?><div id="article">
    <?php if (!empty($_smarty_tpl->tpl_vars['article']->value)) {?>
    <div class="col-lg-12">
        <ul class="list-group">
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <li class="list-group-item">
                <div class="col-lg-2">
                    <img class="img-thumbnail" src="
                         <?php if (file_exists($_smarty_tpl->tpl_vars['i']->value['article_image'])) {?>
                             <?php echo $_smarty_tpl->tpl_vars['i']->value['article_image'];?>

                         <?php } elseif (file_exists($_smarty_tpl->tpl_vars['i']->value['category_image'])) {?>
                             <?php echo $_smarty_tpl->tpl_vars['i']->value['category_image'];?>

                         <?php } else { ?>
                             include/angelo.b3k/images/placeholder.png
                         <?php }?>
                    ">
                </div>
                <div class="col-lg-6">
                    <h3 style="margin-top: 5px;"><?php echo $_smarty_tpl->tpl_vars['i']->value['article_name'];?>
 <b class="small">- <?php echo $_smarty_tpl->tpl_vars['i']->value['category_name'];?>
</b></h3>
                    <p>  
                        <hr>
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['article_description'],128);?>

                    </p>
                </div>
                <div class="col-lg-4">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info text-center"><b><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_grossprice']);?>
</b> - <?php echo $_smarty_tpl->tpl_vars['i']->value['article_amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['unit_unit'];?>
 | <?php echo $_smarty_tpl->tpl_vars['i']->value['article_tax'];?>
% MwSt.</li>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['article_discount']!=0) {?>
                            <li class="list-group-item list-group-item-success text-center">
                                <b>Rabatt: <?php echo $_smarty_tpl->tpl_vars['i']->value['article_discount'];?>
% | <span style="text-decoration: line-through;"><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_taxnetprice']);?>
</span></b>
                            </li>
                        <?php }?>
                        <li class="list-group-item">
                            <form id="standart" action="index.php?shop-ajax-shoppingCart">
                                <input type="hidden" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
" />
                                <input type="hidden" name="article_amount" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['article_amount'];?>
" />
                                <input type="hidden" name="article_grossprice" value="<?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_grossprice']);?>
" /> <!-- <?php echo (round(20*$_smarty_tpl->tpl_vars['i']->value['article_grossprice'])/20);?>
 -->
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <a data-amount="+<?php echo $_smarty_tpl->tpl_vars['i']->value['article_amount'];?>
" class="btn btn-default" href="#">&nbsp;<i class="fa fa-plus-circle"></i></a>
                                        <a data-amount="-<?php echo $_smarty_tpl->tpl_vars['i']->value['article_amount'];?>
" class="btn btn-default" href="#"><i class="fa fa-minus-circle"></i>&nbsp;</a>
                                    </div>
                                    <input type="text" class="form-control text-center" name="user_amount" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['article_amount'];?>
">
                                    <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['i']->value['unit_short'];?>
</span>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-success" href="">&nbsp;<i class="fa fa-shopping-cart"></i>&nbsp;</button>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <br style="clear: both;" />
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php } else { ?>
        <br style="clear: both;" />
        <div class="alert alert-info">
            <i class="fa fa-info-circle fa-2x pull-left"></i> 
            <p class="pull-left">
                In dieser Kategorie sind keine Artikel vorhanden,<br>
                bitte w&auml;hlen Sie eine andere Kategorie aus.
            </p>
            <br style="clear: both;" />
        </div>
    <?php }?>
</div>
<?php }} ?>
