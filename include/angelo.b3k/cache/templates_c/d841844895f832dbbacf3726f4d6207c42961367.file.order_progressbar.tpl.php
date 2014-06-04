<?php /* Smarty version Smarty-3.1.17, created on 2014-06-04 20:19:20
         compiled from "include/angelo.b3k/templates/order_progressbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12931011995386f65d3cbd64-00167665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd841844895f832dbbacf3726f4d6207c42961367' => 
    array (
      0 => 'include/angelo.b3k/templates/order_progressbar.tpl',
      1 => 1401905566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12931011995386f65d3cbd64-00167665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386f65d40bc84_14884421',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386f65d40bc84_14884421')) {function content_5386f65d40bc84_14884421($_smarty_tpl) {?><div class="col-lg-12">
    <div class="progress active" style=" height: 40px!important;">
        <div class="progress-bar progress-bar-success" style="width: <?php echo (count($_SESSION['shop']['order'])-1)*100/5;?>
%;">
            <h4 style="margin-top: 10px;"><b>Schritt <?php echo count($_SESSION['shop']['order'])-1;?>
 von 5</b></h4>
        </div>
    </div>
</div>
<br /><?php }} ?>
