<?php
#   Copyright by: Manuel
#   Support: www.ilch.de
define ( 'main' , TRUE );

session_name  ('sid');
session_start ();

require_once ('include/includes/config.php');
require_once ('include/includes/loader.php');

db_connect();
$allgAr = getAllgAr ();
$menu = new menu();
user_identification();
site_statistic();

require_once ('include/contents/'.$menu->get_url());

$abf = db_query("SELECT banned FROM prefix_user WHERE id = ".$_SESSION['authid']."");
$row = db_fetch_assoc($abf);
if ($row['banned'] != 0) {
    user_logout();
}

db_close();
if (FALSE) { //debugging aktivieren
	debug('anzahl sql querys: '.$count_query_xyzXYZ);
	debug('',1,true);
}
?>