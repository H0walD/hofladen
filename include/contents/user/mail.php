<?php 
#   Copyright by: Manuel
#   Support: www.ilch.de


defined ('main') or die ( 'no direct access' );

$abf = "SELECT * FROM prefix_user WHERE id = ".$menu->get(2);
$erg = db_query($abf);
$DA_IS_WAS_FAUL = FALSE;
if ( @db_num_rows($erg) <> 1 ) {
  $DA_IS_WAS_FAUL = TRUE;
}
$row = db_fetch_assoc($erg);
if ( $row['opt_mail'] == 0 ) {
  $DA_IS_WAS_FAUL = TRUE;
}
if ( $DA_IS_WAS_FAUL === TRUE ) {
  header ( 'location: index.php?'.$allAr['smodul'] );
  exit();
}

$title = $allgAr['title'].' :: Users :: eMail an '.$row['name'];
$hmenu  = $extented_forum_menu.'<a class="smalfont" href="?user">Users</a><b> &raquo; </b> eMail an '.$row['name'].$extented_forum_menu_sufix;
$design = new design ( $title , $hmenu, 1);
$design->header();


if ( ! array_key_exists('klicktime',$_SESSION) ) { 
  $_SESSION['klicktime'] = ''; 
}

# vars definieren
$_POST['email'] = ( isset($_POST['email']) ? trim($_POST['email']) : '' );
$_POST['bet'] = ( isset($_POST['bet']) ? trim($_POST['bet']) : '' );
$_POST['txt'] = ( isset($_POST['txt']) ? trim($_POST['txt']) : '' );

if ( empty($_POST['bet']) OR empty($_POST['email']) OR empty($_POST['txt']) OR $_SESSION['klicktime'] > (time() - 60) ) {
  
	if ( !empty($_POST['send']) ) {
	  $fehler = '<font color="#FF0000">Fehler:</font><br>';
		if ( $_SESSION['klicktime'] > (time() - 60) ) {
		  $fehler .= '&nbsp; - Bitte nicht so schnell eMails Schreiben<br>';
		}
		if ( trim($_POST['bet']) == '' ) {
		  $fehler .= '&nbsp; - Bitte einen Betreff angeben<br>';
		}
    if ( trim($_POST['email']) == '' ) {
		  $fehler .= '&nbsp; - Bitte eine eMail angeben<br>';
		}
		if ( trim($_POST['txt']) == '' ) {
		  $fehler .= '&nbsp; - Bitte eine Nachricht angeben<br>';
		}
	} else {
	  $fehler = '';
	}
	echo $fehler;
  
  ?>
  		<div class="panel panel-default">
			<div class="panel-body">
    		<form action="index.php?user-mail-<?php echo $menu->get(2) ?>" method="POST">
				<table class="table table-bordered">
            		<tr class="warning">
                	<th colspan="2">eMail an Benutzer <?php echo $row['name']; ?></th>
            		</tr>
            		<tr>
                		<td class="success">Betreff</td>
                		<td class="active"><input  class="form-control" type="text" name="bet" placeholder="Dein Betreff" value="<?php echo $_POST['bet']; ?>"></td>
            		</tr>
            		<tr class="active">
						<td class="success">Deine eMail</td>
						<td class="active"><input  class="form-control" type="text" name="email" placeholder="Deine eMail Adresse" value="<?php echo $_POST['email']; ?>"></td>
            		</tr>
            		<tr class="active">
						<td class="success" valign="top">Nachricht</td>
						<td class="active"><textarea  class="form-control" rows="15" name="txt" placeholder="Dein Text"><?php echo $_POST['txt']; ?></textarea></td>
            		</tr>
            		<tr class="warning">
						<td></td>
						<td><button type="submit" class="btn btn-success" name="send">senden&nbsp;&nbsp;<i class="fa fa-sign-out"></i></button></td>
            		</tr>
        		</table>
    		</form>
    		</div>
        </div>
  <?php
} else {
  $_SESSION['klicktime'] = time();
	if ( 1 == $row['opt_mail'] ) {
    icmail ($row['email'],strip_tags($_POST['bet']),strip_tags($_POST['txt']),'SeitenKontakt <'.escape_for_email($_POST['email']).'>');
	  wd ('index.php?teams','Die eMail wurde erfolgreich versendet');
	} else {
    header ( 'location: index.php?'.$allAr['smodul'] );
    exit();
  }
}


$design->footer();

?>