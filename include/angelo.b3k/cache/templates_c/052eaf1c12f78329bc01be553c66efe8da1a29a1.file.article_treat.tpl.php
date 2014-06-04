<?php /* Smarty version Smarty-3.1.17, created on 2014-06-02 22:36:29
         compiled from "include/angelo.b3k/templates/article_treat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19559028915386f468dea9b6-61782834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '052eaf1c12f78329bc01be553c66efe8da1a29a1' => 
    array (
      0 => 'include/angelo.b3k/templates/article_treat.tpl',
      1 => 1401738446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19559028915386f468dea9b6-61782834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f468f25779_12864215',
  'variables' => 
  array (
    'menu' => 0,
    'category' => 0,
    'cat' => 0,
    'article' => 0,
    'i' => 0,
    'edit' => 0,
    'units' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f468f25779_12864215')) {function content_5386f468f25779_12864215($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_price')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.price.php';
if (!is_callable('smarty_modifier_config')) include '/var/www/web136/html/hofladen/include/angelo.b3k/libs/smarty/plugins/modifier.config.php';
?><div class="col-lg-8">
    <ul class="list-group">
        <li class="list-group-item list-group-item-info">
            <div class="pull-left"><i class="fa fa-list fa-lg"></i> <b>Kategorie</b></div>
            <div class="pull-right">
                <a class="btn btn-success btn-xs" href="?shop-category-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
"><i class="fa fa-plus-circle"></i> </a>
            </div>
            <br style="clear: both;" />
        </li>
        <a class="list-group-item list-group-item-warning" href="?shop-article-<?php echo $_SESSION['shop']['last_category'];?>
">
            <div class="col-lg-6"><i class="fa fa-mail-reply-all"></i> <b>Zur&uuml;ck</b></div>
            <div class="col-lg-6"></div>
            <br style="clear:both" />
        </a>
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
        <a class="list-group-item" href="?shop-article-<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
">
            <div class="col-lg-6"><?php echo $_smarty_tpl->tpl_vars['cat']->value['category_name'];?>
</div>
            <div class="col-lg-6"></div>
            <br style="clear:both" />
        </a>
        <?php } ?>
    </ul>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['menu']->value)&&$_smarty_tpl->tpl_vars['menu']->value[2]!='0') {?>
    <div class="panel panel-success">
        <div class="panel-heading">
            <?php if (is_array($_smarty_tpl->tpl_vars['article']->value)) {?>
                <b><?php echo count($_smarty_tpl->tpl_vars['article']->value);?>
</b> Artikel<br>
            <?php } else { ?>
                Keine Artikel Vorhanden
            <?php }?>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-right">Art.-Nr.</th>
                    <th>Name</th>
                    <th class="text-center">Bild</th>
                    <th class="text-center">Menge</th>
                    <th class="text-center">Verk.Menge</th>
                    <th class="text-center">Netto</th>
                    <th class="text-center">Brutto</th>
                    <th class="text-center">MwSt.</th>
                    <th class="text-center">Rabatt</th>
                    <th class="text-right">Optionen</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                <tr <?php if ($_smarty_tpl->tpl_vars['menu']->value[3]=='edit'&&$_smarty_tpl->tpl_vars['menu']->value[4]==$_smarty_tpl->tpl_vars['i']->value['article_id']) {?>class="info"<?php }?> data-view="<?php echo $_smarty_tpl->tpl_vars['i']->value['article_name'];?>
">
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
</td>
                    <td><b><?php echo $_smarty_tpl->tpl_vars['i']->value['article_name'];?>
</b></td>
                    <td class="text-center"><?php if (!empty($_smarty_tpl->tpl_vars['i']->value['article_image'])) {?><i class="fa fa-check-square"></i><?php } else { ?><?php }?></td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['article_number'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['unit_short'];?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['article_amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['unit_short'];?>
</td>
                    <td class="text-center"><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_netprice']);?>
</td>
                    <td class="text-center success"><b><?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_grossprice']);?>
</b></td>
                    <td class="text-center"><?php if (!empty($_smarty_tpl->tpl_vars['i']->value['article_tax'])) {?><?php echo $_smarty_tpl->tpl_vars['i']->value['article_tax'];?>
% | +<?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_taxprice']);?>
<?php }?></td>
                    <?php if (!empty($_smarty_tpl->tpl_vars['i']->value['article_discount'])) {?><td class="text-center danger"><?php echo $_smarty_tpl->tpl_vars['i']->value['article_discount'];?>
% | -<?php echo smarty_modifier_price($_smarty_tpl->tpl_vars['i']->value['article_discountprice']);?>
</td><?php } else { ?><td></td><?php }?>
                    <td>
                        <div  class="btn-group pull-right">
                            <a class="btn btn-success btn-xs" href="?shop-article-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-edit-<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger btn-xs" href="?shop-article-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-delete-<?php echo $_smarty_tpl->tpl_vars['i']->value['article_id'];?>
"><i class="fa fa-trash-o"></i> </a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>
    <?php }?>
</div>

<div id="articleForm" class="col-lg-4">
    <?php if (!empty($_smarty_tpl->tpl_vars['menu']->value)&&$_smarty_tpl->tpl_vars['menu']->value[2]!='0') {?>
    <div class="panel panel-default">
        <div class="panel-heading">Artikel erstellen/bearbeiten</div>
        <div class="panel-body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="admin.php?shop-article-<?php echo $_smarty_tpl->tpl_vars['menu']->value[2];?>
-save-<?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['article_id'];?>
">
            <div class="col-lg-12 well-sm">
                <div class="input-group">
                    <input 
                        name="article_name"
                        class="form-control"
                        placeholder="Name des Artikel"
                        value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['article_name'];?>
"
                        data-toggle="popover"
                        data-trigger="hover"
                        data-placement="top" 
                        data-title="Name"
                        data-content="Erstellen Sie ein Artikelname f&uuml;r die Ware"
                    >
                    <span class="input-group-addon"><i class="fa fa-info-circle"></i> </span>
                </div><br />

                <div class="input-group">
                <textarea
                    name="article_description"
                    class="form-control"
                    placeholder="Artikel beschreibung"
                    data-container="body" 
                    data-toggle="popover"
                    data-trigger="hover"
                    data-placement="top" 
                    data-title="Beschreibung"
                    data-content="Hier k&ouml;nnen Sie eine artikel Beschreibung erstellen"
                    ><?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['article_description'];?>
</textarea>
                    <span class="input-group-addon"><i class="fa fa-info-circle"></i> </span>
                </div><br />

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-upload"></i> <i class="fa fa-picture-o"></i> </span>
                    <input 
                        name="article_image"
                        type="file" 
                        class="form-control"
                        placeholder="Image"
                        data-container="body" 
                        data-toggle="popover"
                        data-trigger="hover"
                        data-placement="top" 
                        data-title="Bild Hochladen"
                        data-content="Hier k&ouml;nnen Sie ein Bild f&uuml;r Ihren Artikel Hochladen."
                    >
                    <span class="input-group-addon"><i class="fa fa-info-circle"></i> </span>
                </div>

            </div>
            <div class="col-lg-6 well-sm">
                <legend>Mengen</legend>

                <div class="input-group">
                    <span class="input-group-addon" tooltip="Mengeneinheit"><i class="fa fa-list-alt"></i> </span>
                    <select name="article_unit" class="form-control"
                        data-container="body" 
                        data-toggle="popover"
                        data-trigger="hover"
                        data-placement="top" 
                        data-title="Einheit"
                        data-content="Welche einheit hat der Artikel"
                    >
                        <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['u']->value['unit_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['u']->value['unit_id']==$_smarty_tpl->tpl_vars['edit']->value['res']['article_unit']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['u']->value['unit_unit'];?>
</option>
                        <?php } ?>
                    </select>
                </div><br />


                <div class="input-group">
                    <span class="input-group-addon" tooltip="Gesamte Menge"><i class="fa fa-tag"></i> </span>
                    <input 
                        name="article_number"
                        class="form-control"
                        placeholder="Menge Vorr&auml;tig 2000kg"
                        value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['article_number'];?>
"
                        data-container="body" 
                        data-toggle="popover"
                        data-trigger="hover"
                        data-placement="top" 
                        data-title="Gesamte Menge"
                        data-content="Wie viel von den G&uuml;ter sind vorr&auml;tig!"
                    >
                </div><br />

                <div class="input-group">
                    <span class="input-group-addon" tooltip="Mengeneinheit"><i class="fa fa-tags"></i> </span>
                    <input 
                        name="article_amount"
                        class="form-control"
                        placeholder="Verkaufs Menge a 5kg Kiste"
                        value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['article_amount'];?>
"
                        data-container="body" 
                        data-toggle="popover"
                        data-trigger="hover"
                        data-placement="top" 
                        data-title="Verkaufsmenge"
                        data-content="In welchen Mengen sollen die G&uuml;ter verkauft werden"
                    >
                </div>
            </div>
            <div class=" col-lg-6 well-sm">
                <legend>Preis</legend>

                <div class="input-group">
                    <input 
                        type="number"
                        name="article_discount"
                        class="form-control"
                        placeholder="Rabatt"
                        value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['article_discount'];?>
"
                        data-container="body" 
                        data-toggle="popover"
                        data-trigger="hover"
                        data-placement="top" 
                        data-title="Rabatt"
                        data-content="Rabatt als 1-3 stellige Zahl angeben, als Prozent, diese werden sp&auml;ter automatisch vom Nettopreis abgerechnet. Es ist nicht n&ouml;tig ein Prozentzeichen anzuh&auml;ngen."
                    >
                        <span class="input-group-addon" tooltip="Mehrwertsteuer"><b>%</b></span>
                </div>

                <br />
                <div class="input-group">
                    <input 
                        type="number"
                        name="article_tax"
                        class="form-control"
                        placeholder="Mehrwertsteuer"
                        value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['article_tax'];?>
"
                        data-container="body" 
                        data-toggle="popover"
                        data-trigger="hover"
                        data-placement="top" 
                        data-title="Mehrwertsteuer"
                        data-content="Artikel haben verschiedene Steuer s&auml;tze, k&ouml;nnen somit hier Deffiniert werden. Als 1-2 stellige Zahl ohne Prozentzeichen"
                    >
                    <span class="input-group-addon" tooltip="Mehrwertsteuer"><b>%</b></span>
                </div>

                <br />
                <div class="input-group">
                    <input 
                        name="article_netprice"
                        class="form-control"
                        placeholder="Nettopreis"
                        value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['article_netprice'];?>
"
                        data-container="body" 
                        data-toggle="popover"
                        data-trigger="hover"
                        data-placement="top" 
                        data-title="Nettopreis"
                        data-content="Hier k&ouml;nnen Sie den Nettopreis eingeben (z.B. 13.50 oder einfach nur 1 f&uuml;r ein 1,00 <?php echo smarty_modifier_config('currency');?>
 Nettopreis). Die W&auml;hrung wird automatisch gesetzt."
                    >
                    <span class="input-group-addon" tooltip="Nettopreis"><b><?php echo smarty_modifier_config('currency');?>
</b></span>
                </div>
            </div>

            <div class="col-lg-12">
                <input class="form-control btn btn-success" type="submit" value="Speichern">
            </div>
        </form>
        <?php } else { ?>
            <div class="alert alert-warning"><i class="fa fa-info-circle fa-2x pull-left"></i> Bitte w&auml;hlen Sie eine Kategorie aus!<br>um ein Artikel zu erstellen.</div>
        <?php }?>
    </div>
</div>

<br style="clear: both;"><?php }} ?>
