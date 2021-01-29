<?php
/**
 * Template for Mobile Header Drop Down
 * 
 * BOOTSTRAP v3.1.0
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */
?>
<li class="nav-item dropdown d-lg-none">
    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo BOX_HEADING_CATEGORIES; ?>
    </a>
    <div class="dropdown-menu" aria-labelledby="categoryDropdown">
        <ul class="m-0 p-0">
<?php
$categories_tab = $db->Execute(
    "SELECT c.categories_id, cd.categories_name 
       FROM " . TABLE_CATEGORIES . " c 
            INNER JOIN " . TABLE_CATEGORIES_DESCRIPTION . " cd
                ON cd.categories_id = c.categories_id 
               AND cd.language_id = " . (int)$_SESSION['languages_id'] . "
      WHERE c.categories_status = 1
        AND c.parent_id = 0
      ORDER BY c.sort_order, cd.categories_name"
);

foreach ($categories_tab as $category_tab) {
    $cat_tab_link = zen_href_link(FILENAME_DEFAULT, 'cPath=' . $category_tab['categories_id']);
    $cat_tab_name = htmlspecialchars($category_tab['categories_name'], ENT_COMPAT, CHARSET, true);
    if (isset($cPath) && ((int)$cPath == $category_tab['categories_id'])) {
        $cat_tab_name = '<span class="category-subs-selected">' . $cat_tab_name . '</span>';
    }
?>
            <li><a class="dropdown-item" href="<?php echo $cat_tab_link; ?>"><?php echo $cat_tab_name; ?></a></li>
<?php
}
?>
        </ul>
<?php
if (SHOW_CATEGORIES_BOX_SPECIALS == 'true') {
   $show_this = $db->Execute("SELECT s.products_id FROM " . TABLE_SPECIALS . " s WHERE s.status = 1 LIMIT 1");
   if (!$show_this->EOF) {
?>
        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo zen_href_link(FILENAME_SPECIALS); ?>'"><?php echo CATEGORIES_BOX_HEADING_SPECIALS; ?></a>
<?php
    }
}

if (SHOW_CATEGORIES_BOX_PRODUCTS_NEW == 'true') {
      // display limits
//    $display_limit = zen_get_products_new_timelimit();
    $display_limit = zen_get_new_date_range();
    $show_this = $db->Execute("SELECT p.products_id FROM " . TABLE_PRODUCTS . " p WHERE p.products_status = 1 " . $display_limit . " LIMIT 1");
    if (!$show_this->EOF) { 
?>
        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo zen_href_link(FILENAME_PRODUCTS_NEW); ?>"><?php echo CATEGORIES_BOX_HEADING_WHATS_NEW; ?></a>
<?php
    }
}

if (SHOW_CATEGORIES_BOX_FEATURED_PRODUCTS == 'true') {
    $show_this = $db->Execute("SELECT products_id FROM " . TABLE_FEATURED . " WHERE status = 1 LIMIT 1");
    if (!$show_this->EOF) {
?>
        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo zen_href_link(FILENAME_FEATURED_PRODUCTS); ?>"><?php echo CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS; ?></a>
<?php
    }
}

if (SHOW_CATEGORIES_BOX_PRODUCTS_ALL == 'true') {
?>
        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo zen_href_link(FILENAME_PRODUCTS_ALL); ?>"><?php echo CATEGORIES_BOX_HEADING_PRODUCTS_ALL; ?></a>
<?php
}
?>
    </div>
</li>

<li class="nav-item dropdown d-lg-none">
    <a class="nav-link dropdown-toggle" href="#" id="infoDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo BOX_HEADING_INFORMATION; ?>
    </a>
    <div class="dropdown-menu" aria-labelledby="infoDropdown">
<?php
    echo '<ul class="m-0 p-0">';
if (DEFINE_SHIPPINGINFO_STATUS <= 1) {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_SHIPPING) . '">'. BOX_INFORMATION_SHIPPING.'</a></li>';
}
if (DEFINE_PRIVACY_STATUS <= 1) {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_PRIVACY) . '">'. BOX_INFORMATION_PRIVACY.'</a></li>';
}
if (DEFINE_CONDITIONS_STATUS <= 1) {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_CONDITIONS) . '">'. BOX_INFORMATION_CONDITIONS.'</a></li>';
}
if (!empty($external_bb_url) && !empty($external_bb_text)) { // forum/bb link
        echo '<li><a class="dropdown-item" href="' . $external_bb_url . '" rel="noopener" target="_blank">' . $external_bb_text . '</a></li>';
}
if (DEFINE_SITE_MAP_STATUS <= 1) {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_SITE_MAP) . '">'. BOX_INFORMATION_SITE_MAP.'</a></li>';
}
  if (defined('MODULE_ORDER_TOTAL_GV_STATUS') && MODULE_ORDER_TOTAL_GV_STATUS == 'true') {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_GV_FAQ) . '">'. BOX_INFORMATION_GV.'</a></li>';
}
  if (DEFINE_DISCOUNT_COUPON_STATUS <= 1 && defined('MODULE_ORDER_TOTAL_COUPON_STATUS') && MODULE_ORDER_TOTAL_COUPON_STATUS == 'true') {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_DISCOUNT_COUPON) . '">'. BOX_INFORMATION_DISCOUNT_COUPONS.'</a></li>';
}
if (SHOW_NEWSLETTER_UNSUBSCRIBE_LINK == 'true') {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_UNSUBSCRIBE) . '">'. BOX_INFORMATION_UNSUBSCRIBE.'</a></li>';
}
if (DEFINE_PAGE_2_STATUS <= 1) {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_PAGE_2) . '">'. BOX_INFORMATION_PAGE_2.'</a></li>';
}
if (DEFINE_PAGE_3_STATUS <= 1) {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_PAGE_3) . '">'. BOX_INFORMATION_PAGE_3.'</a></li>';
}
if (DEFINE_PAGE_4_STATUS <= 1) {
        echo '<li><a class="dropdown-item" href="'.zen_href_link(FILENAME_PAGE_4) . '">'. BOX_INFORMATION_PAGE_4.'</a></li>';
}
    echo '</ul>';
?>
    </div>
</li>  
<?php
  // test if ez-pages links should display
if (EZPAGES_STATUS_SIDEBOX == '1' or (EZPAGES_STATUS_SIDEBOX== '2' && zen_is_whitelisted_admin_ip())) {
?>

<?php
    if (isset($var_linksList)) {
        unset($var_linksList);
    }

// BOE - Bootstrap for 1.5.6     
    $page_query = $db->Execute(
        "SELECT e.*, ec.*
           FROM " . TABLE_EZPAGES . " e
                INNER JOIN " . TABLE_EZPAGES_CONTENT . " ec
                    ON ec.pages_id = e.pages_id
                   AND ec.languages_id = " . (int)$_SESSION['languages_id'] . "
          WHERE e.status_sidebox = 1
            AND e.sidebox_sort_order > 0
          ORDER BY e.sidebox_sort_order, ec.pages_title"
    );   
    
// old code for 1.5.5:
//    $page_query = $db->Execute("select * from " . TABLE_EZPAGES . " where status_sidebox = 1 and sidebox_sort_order > 0 order by sidebox_sort_order, pages_title");
// EOE - Bootstrap for 1.5.6  

    if (!$page_query->EOF) {
        $page_query_list_sidebox = array();
        foreach ($page_query as $next_page) {
            $next_page_entry = array(
                'name' => htmlspecialchars($next_page['pages_title'], ENT_COMPAT, CHARSET, true),
            );
            
            switch (true) {
                // external link new window or same window
                case ($next_page['alt_url_external'] != ''):
                    $offcanvasAltURL = $next_page['alt_url_external'];
                    break;

                // internal link new window or same window
                case ($next_page['alt_url'] != ''):
                    if (strpos($next_page['alt_url'], 'http') === 0) {
                        $offcanvasAltURL = $next_page['alt_url'];
                    } else {
                        $offcanvasAltURL =  zen_href_link($next_page['alt_url'], '', ($next_page['page_is_ssl'] == '0') ? 'NONSSL' : 'SSL', true, true, true);
                    }
                    break;

                default:
                    $offcanvasAltURL = '';
                    break;
            }
            
            // if altURL is specified, use it; otherwise, use EZPage ID to create link
            if ($offcanvasAltURL == '') {
                $toc_chapter = ($next_page['toc_chapter'] > 0) ? ('&chapter=' . $next_page['toc_chapter']) : '';
                $next_page_entry['link'] = zen_href_link(FILENAME_EZPAGES, 'id=' . $next_page['pages_id'] . $toc_chapter, ($next_page['page_is_ssl'] == '0') ? 'NONSSL' : 'SSL');
            } else {
                $next_page_entry['link'] = $offcanvasAltURL;
            }

            $next_page_entry['link'] .= ($next_page['page_open_new_window'] == '1') ? '" target="_blank" rel="noopener"' : '';
            
            $page_query_list_sidebox[] = $next_page_entry;
        }
    }
    if (!empty($page_query_list_sidebox)) {
?>
<li class="nav-item dropdown d-lg-none">
    <a class="nav-link dropdown-toggle" href="#" id="ezpagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo BOX_HEADING_EZPAGES; ?>
    </a>
    <div class="dropdown-menu mb-2" aria-labelledby="ezpagesDropdown">
        <ul class="m-0 p-0">
<?php
        foreach ($page_query_list_sidebox as $next_entry) {
?>
            <li><a class="dropdown-item" href="<?php echo $next_entry['link']; ?>"><?php echo $next_entry['name']; ?></a></li>
<?php
        } // end FOR loop
?>
        </ul>
    </div>
</li>  
<?php
    }
} // eof ezpages
