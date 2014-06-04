<?php 
#   Copyright by: Manuel
#   Support: www.ilch.de


defined ('main') or die ( 'no direct access' );

$title = $allgAr['title'].' :: AGB';
$hmenu = 'AGB';
$design = new design ( $title , $hmenu );
$design->header();





//-----------------------------------------------------------|


  $erg = db_query('SELECT zahl,titel,text FROM `prefix_agb` ORDER BY zahl');
	while ($row = db_fetch_row($erg)) {
			echo '<div class="thumbnail"><table class="table table-hover">';
		  	echo '<thead><tr class="success"><td><b>&sect;'.$row[0].'. &nbsp; '.$row[1].'</b></td></tr></thead>';
			echo '<tbody><tr><td><b>'.bbcode($row[2]).'<b></td></tr></tbody>'; 
			echo '</table><hr></div>';
  } 


$design->footer();

?>

