<?php 
#   Copyright by: Balthazar3k
#   Support: Balthazar3k.funpic.de

defined ('main') or die ( 'no direct access' );

$design = new design ( $title , $hmenu );
$design->header();

shop_bar();
shop_category();

$categoryID = (empty($menu->get(2)) ? 0 : $menu->get(2));

$categoryInfo = $core->db()
        ->select('*')
        ->from('shop_category')
        ->where('category_id', $categoryID)
        ->row();

$article = $core->db()->queryRows(
    standart_article_sql()  
    ."
    WHERE a.article_category = '".$categoryID."'
    ORDER BY a.article_name ASC;
    "
);

$tpl->assign('info', $categoryInfo);
$tpl->assign('article', $article);

$tpl->display('article.tpl');

$design->footer();
?>