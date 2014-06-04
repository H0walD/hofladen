<?php 
#   Copyright by: Manuel Staechele
#   Support: www.ilch.de


defined ('main') or die ( 'no direct access' );

$title = $allgAr['title'].' :: User :: '.$lang['listofmembers'];
$hmenu = $extented_forum_menu.'User <b> &raquo; </b> '.$lang['listofmembers'].$extented_forum_menu_sufix;
$design = new design ( $title , $hmenu, 1);
$design->header();
$tpl = new tpl ( 'omember.htm' );
# für die geordnete memberliste gibts keine sites!

$limit = 10;  // Limit 
$page = ($menu->getA(1) == 'p' ? $menu->getE(1) : 1 );
$MPL = db_make_sites ($page , "" , $limit , '?omember' , 'user' );
$anfang = ($page - 1) * $limit;


$tpl->set_out ( 'SITELINK', $MPL, 0);

$filtername = isset($_GET['filtername']) ? " AND prefix_user.name LIKE '%".escape($_GET['filtername'],'string')."%'" : "";

$tpl->out(0);
# alle anzuzeigenden rechte holen:
$qry = db_query('SELECT `id`, `name` FROM `prefix_grundrechte` WHERE `show` = 1 ORDER BY `id` ASC');
while ($gr = db_fetch_assoc($qry)) {
$erg = db_query("SELECT
  posts,
  icq,
  staat,
  email,
  llogin,
  prefix_user.id,
  prefix_grundrechte.name as recht_name,
  regist,
  prefix_user.name,
  recht
FROM prefix_user
LEFT JOIN prefix_grundrechte ON prefix_user.recht = prefix_grundrechte.id
WHERE recht = ".$gr['id'].$filtername."
ORDER by prefix_user.posts DESC LIMIT ".$anfang.",".$limit);

# wenn die gruppe leer ist, wird sie automatisch ausgeblendet:
if(db_num_rows($erg)==0) continue;
$tpl->set('group_id', $gr['id']);
$tpl->set('group_name', $gr['name']);
$tpl->out(1);

$class = '';
while ($row = db_fetch_object($erg)) {
if($row->icq == ""){ 
	$icq = "";
	} else {
	$icq = "<a href=\"http://wwp.icq.com/scripts/search.dll?to=".str_replace("-","",$row->icq)."\" target=\"_blank\"><img src=\"http://status.icq.com/online.gif?web=".str_replace("-","",$row->icq)."&img=5\" border=\"0\"></a>";
	}
	if ($class == 'Cmite') { $class = 'Cnorm'; } else { $class = 'Cmite'; }
	$ar = array ( 'NAME' => $row->name,
	                'RANG' => userrang($row->posts,$row->id),
									'CLASS' => $class,
									'POSTS' => $row->posts,
									'ICQ' => $icq,
									'UID'   => $row->id,
									'DATE' => date('d.m.Y',$row->regist),
									'GRUPE' => $row->recht_name,
									'STAAT' => ($row->staat!="" ? $row->staat : "na.gif"),
									'EMAIL' => $row->email,
									'LLOGIN' => date('d.m.Y <b\r> H:i',$row->llogin).' Uhr'
	);
	$tpl->set_ar_out($ar,2);
}
}
$tpl->set_out('filtername',escape(isset($_GET['filtername'])?$_GET['filtername']:'','string'),3);



$design->footer();
?>
