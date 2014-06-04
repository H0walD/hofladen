<?php
#   Copyright by Manuel Staechele
#   Support www.ilch.de
#   Modded by Mairu für News Extended

defined ('main') or die ( 'no direct access' );

$news_groups = 0;
foreach ($_SESSION['authgrp'] as $id => $bool){
	$news_groups = $news_groups | pow(2, $id);
}

$tpl = new tpl('boxes/newsticker.htm');

$tn_id = intval(@db_result($news_opts = db_query("SELECT v1, v2 FROM prefix_allg WHERE k = 'news' LIMIT 1"),0,0));
$abf = 'SELECT *
        FROM prefix_news
		WHERE (((' . pow(2, abs($_SESSION['authright'])) . " | news_recht) = news_recht) OR
			(news_groups != 0 AND ((news_groups ^ $news_groups) != (news_groups | $news_groups)))) AND `show` > 0 AND `show` <= UNIX_TIMESTAMP() AND news_id != '.$tn_id.' AND archiv != 1 AND (endtime IS NULL OR endtime > UNIX_TIMESTAMP())
              ORDER BY news_time DESC
		LIMIT 0,20";
$erg = db_query($abf);

$tpl->out(0);
while ($row = db_fetch_object($erg)) {
	$tpl->set_ar_out( $row, 1);
}
$tpl->out(2);


?>