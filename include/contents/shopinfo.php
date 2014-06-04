<?php 
#   Copyright by: Manuel
#   Support: www.ilch.de


defined ('main') or die ( 'no direct access' );

$title = $allgAr['title'].' :: Shop Info';
$hmenu = 'Shop Info';
$design = new design ( $title , $hmenu );
$design->header();

//-----------------------------------------------------------|
echo '<div class="panel panel-default">
	<div class="panel-body"><h1>Shop Info</h1></div><hr><br class="clear">';

  $erg = db_query('SELECT img,titel,txt FROM `prefix_shop_info` ORDER BY id');
	while ($row = db_fetch_assoc($erg)) {
            echo '<table class="table table-bordered" style="margin-bottom:2px">';
            echo '<thead><tr class="success"><td colspan="2"><b style="font-size:20px">'.$row['titel'].'</b></td></tr></thead>';
            echo '<tbody><tr class="active"><td class="col-lg-2 col-md-2 col-xs-2 "><img class="img-thumbnail" src="'.( file_exists( $row['img'] ) ? $row['img'] : 'include/images/shopinfo/0.png').'"/></td><td class="col-lg-10 col-md-10 col-xs-10"><b>'.bbcode($row['txt']).'</b></td></tr></tbody>';
            echo '</table>';
  } 
echo '</div>';


$design->footer();

?>

