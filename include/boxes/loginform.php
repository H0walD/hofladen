<?php 
#   Copyright by Manuel
#   Support www.ilch.de $check_pm


defined ('main') or die ( 'no direct access' );

$tpl = new tpl ( 'user/boxen_loginform.htm' );

if ( loggedin() ) {
  
  if ( user_has_admin_right($menu,false) ) {
    $tpl->set ( 'ADMIN', '<a class="btn btn-default" href="admin.php?admin"><i class="fa fa-puzzle-piece"></i> '.$lang['adminarea'].'</a>' );
  } else {
    $tpl->set ( 'ADMIN', '' );
  }

	  if ( $allgAr['Fpmf'] == 1 ) {
		  $erg = db_query("SELECT COUNT(id) FROM `prefix_pm` WHERE gelesen = 0 AND status < 1 AND eid = ".$_SESSION['authid']);
			$check_pm = db_result($erg,0);
			$nachrichten_link = 'index.php?forum-privmsg';
		} else {
		  $nachrichten_link = '';
		}
		
		$tpl->set ( 'SID' , session_id() );
		$tpl->set ( 'NACHRICHTEN' , $nachrichten_link );
		$tpl->set ( 'NAME', $_SESSION['authname'] );
		$tpl->set ( 'UID', $_SESSION['authid']);
		$tpl->set ( 'NUM_MSG', $check_pm );
    $tpl->out (0);		
}
unset($tpl);
?>