<?php
define ( 'main' , TRUE );
require_once('include/includes/config.php');
require_once('include/includes/func/db/mysql.php');
db_connect();

$sql_statements = array();

$sql_statements[] = "CREATE TABLE IF NOT EXISTS `ic1_shop_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img` text CHARACTER SET utf8 NOT NULL,
  `titel` varchar(200) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='powered by www.howald-design.ch' AUTO_INCREMENT=1 ;";

$sql_statements[] = "INSERT INTO `prefix_modules` ( `url`, `name`, `gshow`, `ashow`, `fright`) VALUES ('shopinfo', 'Shop-Info', '1', '1', '1');";

foreach ( $sql_statements as $sql_statement ) {
  if ( trim($sql_statement) != '' ) {
    echo '<pre>'.$sql_statement.'</pre>';
    $e = db_query($sql_statement);
    if (!$e) { echo '<font color="#FF0000"><b>Es ist ein Fehler aufgetreten</b></font>, bitte alles auf dieser Seite kopieren und auf ilch.de im Forum fragen...:<div style="border: 1px dashed grey; padding: 5px; background-color: #EEEEEE">'. mysql_error().'<hr>'.$sql_statement.'</div><br /><b>Es sei denn,</b> es ist ein Fehler mit <i>duplicate entry</i> aufgetreten, das liegt einfach nur daran, dass du die Installdatei mehrmals ausgeführt hast.<br />'; }
    echo '<hr>';
	}
}

echo "Tabellen wurden erfolgreich angelegt.<br> Bitte die Datei Löschen !!!";
db_close();
?>