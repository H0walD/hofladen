<?php 
#   Copyright by Manuel
#   Support www.ilch.de $check_pm


defined ('main') or die ( 'no direct access' );

$tpl = new tpl ( 'user/boxen_login.htm' );

 if ( !loggedin() ) { 
  if (empty($_POST['login_name'])) { $_POST['login_name'] = 'Nickname'; }
	if (empty($_POST['login_pw'])) { $_POST['login_pw'] = 'הההההההה'; }
	$regist = '';
	if ( $allgAr['forum_regist'] == 1 ) {
	  $regist = 'index.php?user-regist';
	}
	$tpl->set_ar_out ( array ( 
		'regist' => $regist, 
		'wdlink' => '?'.$allgAr['smodul'], 
		'PASS' => $_POST['login_pw'], 
		'NAME' => $_POST['login_name'] 
	) , 0 );
 }
unset($tpl);
?>
