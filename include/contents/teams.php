<?php
#   Copyright by: Manuel Staechele
#   Support: www.ilch.de
defined ('main') or die ( 'no direct access' );

function show_members ($gid,$tpl) {
                global $allgAr;
    
    # icq team bild, hier die zahl aendern.
    $teams_show_icq_pic = 5;
    $i = 0;
    $z = 2;
    
    $class = 'Cnorm';
                $q = "SELECT b.uid, a.icq, a.yahoo, a.avatar, a.name, c.name as posi, staat FROM prefix_groupusers b LEFT JOIN prefix_user a ON a.id = b.uid LEFT JOIN prefix_groupfuncs c ON b.fid = c.id WHERE b.gid = ".$gid." ORDER BY c.pos ASC, a.name ASC";
                $erg = db_query($q);
                while($row = db_fetch_assoc($erg) ) {
                        $class = ( $class == 'success' ? 'active' : 'success' );
                        $row['class'] = $class;
      if ( $row['staat'] != '' ) {
                                $row['staat'] = '<img src="include/images/flags/'.$row['staat'].'" alt="" border="0">';
                        } else {
        $row['staat'] = '<img src="include/images/flags/empty.gif" alt="" border="0">';
      }

                        if(!empty($row['icq'])){
        $row['icq'] = '<a href="http://www.icq.com/whitepages/cmd.php?uin='.$row['icq'].'&action=add"><img src="http://wwp.icq.com/scripts/online.dll?icq='.$row['icq'].'&img='.$teams_show_icq_pic.'" valign="bottom"  border="0"></a>';
                        } else {
                                $row['icq'] = '<img src="include/images/icq.bmp" />';
                        }
		

      
       if($allgAr['teams_show_list']==1){
       if(empty($row['avatar'])){
                $row['avatar'] = '<img class="img-thumbnail" src="include/images/avatars/gast.png"  border="0">';
                    } else {
                $row['avatar'] = '<img class="img-thumbnail" src="'.$row['avatar'].'" alt="Avatar von '.$row['name'].'" border="0" >';
                                }
                $tpl->set_ar_out($row,3);
                        } else {
                $tpl->set_ar_out($row,5);
                        }
                }
       if($i%$z == $z-1){ $tpl->out(4);  }
                $tpl->out(6);
}



if ($menu->get(1) == 'show') {
        $gid = escape($menu->get(2), 'integer');
        $name = @db_result (db_query("SELECT name FROM prefix_groups WHERE zeigen = 1 AND id =".$gid));
        $bild = @db_result (db_query("SELECT img FROM prefix_groups WHERE zeigen = 1 AND id =".$gid));
  $title = $allgAr['title'].' :: Teams :: '.$name;
        $hmenu = '<a class="smalfont" href="index.php?teams">Teams</a> &raquo; '.$name;
        $design = new design ( $title , $hmenu );
        $design->header();
        $tpl = new tpl ('teams');
        $tpl->out(0);
        if (!empty($bild) ) {
    $show = '<img src="'.$bild.'" title="'.$name.'" alt="'.$name.'" border="0"></a>';
  } else {
          $show = '<b>'.$name.'</b>';
  }
  $tpl->set('name1', $name);
  $tpl->set('show', $show);
  $tpl->out(1);
  $row1['name1'] = $name;
  $tpl->set_ar_out($row1,2);
  show_members ($gid,$tpl);
} else {
        $title = 'Teams :: '. $allgAr['title'];
        $hmenu = 'Teams';
        $design = new design ( $title , $hmenu );
        $design->header();
        $tpl = new tpl ('teams');
        $tpl->out(0);
  $erg1 = db_query("SELECT name,img,id as gid FROM prefix_groups WHERE zeigen = 1 ORDER BY pos");
        while ($row = db_fetch_assoc($erg1) ) {
          if (!empty($row['img']) ) {
                  $row['show'] = '<a href="index.php?teams-show-'.$row['gid'].'"><img class="img-thumbnail" src="'.$row['img'].'" title="'.$row['name'].'" alt="'.$row['name'].'" border="0"></a>';
                } else {
                  $row['show'] = '<a href="index.php?teams-show-'.$row['gid'].'"><b>'.$row['name'].'</b></a>';
                }
                $row['name1'] = $row ['name'];
                $tpl->set_ar_out($row,1);
                $row1['name1'] = $row ['name'];
                $tpl->set_ar_out($row1,2);
    if ($allgAr['teams_show_cat'] == 1) {
      show_members ($row['gid'],$tpl);
    }
  }
}
echo'</br><a href="javascript:history.back(1)" class="btn btn-default"><i class="fa fa-reply-all"></i><b>&nbsp;zur&uuml;ck</b></a>';
$design->footer(0);
?> 