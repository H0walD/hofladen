<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:19:33
         compiled from "include/angelo.b3k/templates/order_address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14685315095386f65fa64596-90399948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04105041c2bc3b21ff755eccdbcd8877be522c4d' => 
    array (
      0 => 'include/angelo.b3k/templates/order_address.tpl',
      1 => 1401905566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14685315095386f65fa64596-90399948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f65fb1fd43_28560947',
  'variables' => 
  array (
    'address' => 0,
    'i' => 0,
    'edit' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f65fb1fd43_28560947')) {function content_5386f65fb1fd43_28560947($_smarty_tpl) {?><div class="alert alert-info">
    <i class="fa fa-info-circle fa-2x pull-left"></i> 
    <div class="pull-left">
        W&auml;hlen Sie bitte Ihre Adresse aus, die wird auch f&uuml;r eine Selbstabholung ben&ouml;tigt.<br>
        Bedenken Sie bitte das bei einer Hauslieferung, zus&auml;tzliche Kosten anfallen.
    </div>
    <br style="clear: both;" />
</div>

<div class="col-lg-6">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['address']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body" style="padding: 4px!important;">
                    <a href="index.php?shop-order-address-<?php echo $_smarty_tpl->tpl_vars['i']->value['address_id'];?>
">
                        <div class="alert alert-info" style="margin-bottom: 4px!important;">
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['address_company']) {?><?php echo $_smarty_tpl->tpl_vars['i']->value['address_company'];?>
<br><?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['i']->value['address_first_name'];?>

                            <?php echo $_smarty_tpl->tpl_vars['i']->value['address_last_name'];?>
<br>
                            <?php echo $_smarty_tpl->tpl_vars['i']->value['address_street'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['address_street_nr'];?>
<br>
                            <?php echo $_smarty_tpl->tpl_vars['i']->value['address_zipcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['address_place'];?>
<br><br>
                            <?php echo $_smarty_tpl->tpl_vars['i']->value['address_phone'];?>

                        </div>
                    </a>
                    <div class="btn-group btn-group-justified">	
                        <a class="btn btn-success" href="index.php?shop-order-address-<?php echo $_smarty_tpl->tpl_vars['i']->value['address_id'];?>
">Benutzen</a>
                    </div><br />
                    <div class="btn-group btn-group-justified">	
                        <a class="btn btn-success" href="index.php?shop-order-editAddress-<?php echo $_smarty_tpl->tpl_vars['i']->value['address_id'];?>
"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger" href="index.php?shop-order-deleteAddress-<?php echo $_smarty_tpl->tpl_vars['i']->value['address_id'];?>
"><i class="fa fa-trash-o"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<div class="col-lg-6">
    <form class="form" action="index.php?shop-order-saveAddress<?php if (!empty($_smarty_tpl->tpl_vars['edit']->value['address_id'])) {?>-<?php echo $_smarty_tpl->tpl_vars['edit']->value['address_id'];?>
<?php }?>" method="post" />
        <div class="panel panel-default">
            <div class="panel-heading">Adresse Erstellen</div>   
            <div class="panel-body">
                
                <?php if (is_array($_smarty_tpl->tpl_vars['status']->value)) {?>
                <div class="alert alert-danger">
                    <i class="fa fa-info-circle pull-left"></i>
                    <div class="pull-left small">Alle Felder sind Pflicht, bitte f&uuml;llen Sie alle Rot eingerahmten felder aus.</div>
                    <br style="clear: both;" />
                </div>
                <?php }?>

                <div class="col-lg-12">
                    
                    <div class="form-group <?php if (is_array($_smarty_tpl->tpl_vars['status']->value)&&!$_smarty_tpl->tpl_vars['status']->value['address_company']) {?>has-error<?php }?>">
                        <label for="address_company">Firma</label>
                        <input class="form-control" type="text" placeholder="Firmenname" name="address_company" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['address_company'];?>
" />
                    </div>
                    
                    <div class="form-group <?php if (is_array($_smarty_tpl->tpl_vars['status']->value)&&!$_smarty_tpl->tpl_vars['status']->value['address_last_name']) {?>has-error<?php }?>">
                        <label for="address_last_name">Nachname</label>
                        <input class="form-control" type="name" placeholder="Nachname" name="address_last_name" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['address_last_name'];?>
" />
                    </div>
                    
                    <div class="form-group <?php if (is_array($_smarty_tpl->tpl_vars['status']->value)&&!$_smarty_tpl->tpl_vars['status']->value['address_first_name']) {?>has-error<?php }?>">
                        <label>Vorname</label>
                        <input class="form-control" type="name" placeholder="Vorname" name="address_first_name" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['address_first_name'];?>
" />
                    </div>
                    
                </div>

                <label class="col-xs-9">Strasse</label>
                <label class="col-xs-3">Haus-Nr.</label>
                <div class="col-xs-9">
                    <div class="form-group <?php if (is_array($_smarty_tpl->tpl_vars['status']->value)&&!$_smarty_tpl->tpl_vars['status']->value['address_street']) {?>has-error<?php }?>">
                        <input class="form-control" type="name" placeholder="Strasse" name="address_street" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['address_street'];?>
" />
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group <?php if (is_array($_smarty_tpl->tpl_vars['status']->value)&&!$_smarty_tpl->tpl_vars['status']->value['address_street_nr']) {?>has-error<?php }?>">
                        <input class="form-control " type="name" placeholder="Hausnummer" name="address_street_nr" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['address_street_nr'];?>
" />
                    </div>
                </div>

                <label class="col-xs-4">PLZ</label>
                <label class="col-xs-8">Stadt</label>
                <div class="col-xs-4">
                    <div class="form-group <?php if (is_array($_smarty_tpl->tpl_vars['status']->value)&&!$_smarty_tpl->tpl_vars['status']->value['address_zipcode']) {?>has-error<?php }?>">
                        <input class="form-control" type="name" placeholder="PLZ" name="address_zipcode" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['address_zipcode'];?>
" />
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="form-group <?php if (is_array($_smarty_tpl->tpl_vars['status']->value)&&!$_smarty_tpl->tpl_vars['status']->value['address_place']) {?>has-error<?php }?>">
                        <input class="form-control " type="name" placeholder="Stadt" name="address_place" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['address_place'];?>
" />
                    </div>
                </div>
                <br style="clear: both;" /><br><br>

                <div class="col-lg-12">
                    <div class="form-group <?php if (is_array($_smarty_tpl->tpl_vars['status']->value)&&!$_smarty_tpl->tpl_vars['status']->value['address_phone']) {?>has-error<?php }?>">
                        <label>Telefon / Mobil</label>
                        <input class="form-control" type="name" placeholder="Telefonnummer" name="address_phone" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['address_phone'];?>
" />
                    </div>
                </div>

            </div>
            <div class="panel-footer">
                <button class="btn btn-info" type="submit">Speichern</button>
            </div>
        </div>
    </form>
</div><?php }} ?>
