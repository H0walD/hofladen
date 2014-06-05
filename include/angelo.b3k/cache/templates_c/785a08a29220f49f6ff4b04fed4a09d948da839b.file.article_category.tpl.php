<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 22:23:53
         compiled from "include\angelo.b3k\templates\article_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15962538f80590f1681-57099233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785a08a29220f49f6ff4b04fed4a09d948da839b' => 
    array (
      0 => 'include\\angelo.b3k\\templates\\article_category.tpl',
      1 => 1401898320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15962538f80590f1681-57099233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'item' => 0,
    'edit' => 0,
    'category_sub' => 0,
    'sub' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538f805917e0a9_36245472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f805917e0a9_36245472')) {function content_538f805917e0a9_36245472($_smarty_tpl) {?><div class="col-lg-6">
    <div class="col-lg-12">
        <a class="btn btn-default" href="?shop-category-<?php echo $_SESSION['shop']['last_category'];?>
"><i class="fa fa-reply"></i> Zur&uuml;ck</a>
        <h4 class="pull-right">
            <?php if (is_array($_smarty_tpl->tpl_vars['category']->value)) {?>
                <b><?php echo count($_smarty_tpl->tpl_vars['category']->value);?>
</b> Kategorien<br>
            <?php } else { ?>
                Keine Kategorie Vorhanden
            <?php }?>
        </h4>
    </div>
    <br style="clear: both;"><br>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="admin.php?shop-category-<?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['category_image']!='') {?><img class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['category_image'];?>
"><?php }?>
                        <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>
</h4>
                        <hr>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['category_description'];?>

                        </p>
                    </a>
                    <div class="btn-group btn-group-justified">
                        <a class="btn btn-success btn-sm" href="admin.php?shop-category-<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
-edit-<?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-default btn-sm"><i class="fa fa-plus-circle"></i> </a>
                        <a class="btn btn-danger btn-sm" href="admin.php?shop-category-<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
-delete-<?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
"><i class="fa fa-trash-o"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<div class="col-lg-3">
    <legend>Formular</legend>
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="admin.php?shop-category-<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
-save-<?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['category_id'];?>
">
        <!--<div class="form-group">
            <div class="col-lg-12">
                <select
                    name="category_sub"
                    class="form-control"
                    >
                        <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_sub']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['category_name'];?>
</option>
                            <?php } ?>
                        <?php } ?>
                </select>
            </div> 
        </div>-->
        <div class="form-group">
            <div class="col-lg-12">
                <input 
                    name="category_name"
                    class="form-control"
                    placeholder="Name der neuen Kategorie"
                    value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['category_name'];?>
"
                >
            </div> 
        </div>
        <div class="form-group">
            <div class="col-lg-12">
                <textarea
                    name="category_description"
                    class="form-control"
                    placeholder="Beschreibung der Kategorie"
                    ><?php echo $_smarty_tpl->tpl_vars['edit']->value['res']['category_description'];?>
</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12">
                <input 
                    name="category_image"
                    type="file" 
                    class="form-control"
                    placeholder="Image"
                >
            </div> 
        </div>
        <div class="form-group">
            <div class="col-lg-12">
                <input class="form-control" type="submit" value="Speichern">
            </div> 
        </div>
    </form>
</div>

<br style="clear: both;"><?php }} ?>
