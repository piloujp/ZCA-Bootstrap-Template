<?php
    /**
     * categories_tabs.php module
     *
     * @package   templateSystem
     * @copyright Copyright 2003-2018 Zen Cart Development Team
     * @copyright Portions Copyright 2003 osCommerce
     * @license   http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
     * @version   $Id: Scott C Wilson Sat Aug 25 07:25:23 2018 -0400 Modified in v1.5.6 $
     */
    if (!defined('IS_ADMIN_FLAG')) {
        die('Illegal Access');
    }
    $order_by = " order by c.sort_order, cd.categories_name ";

    $includeAllCategories = $zca_include_zero_product_categories ?? false;

    $categories_tab_query = "select c.sort_order, c.categories_id, cd.categories_name from " .
        TABLE_CATEGORIES . " c, " . TABLE_CATEGORIES_DESCRIPTION . " cd
                          where c.categories_id=cd.categories_id and c.parent_id= '0' and cd.language_id='" . (int)$_SESSION['languages_id'] . "' and c.categories_status='1'" .
        $order_by;
    $categories_tab = $db->Execute($categories_tab_query);

    $links_list = [];
    foreach ($categories_tab as $category) {
        // currently selected category
        if ((int)$cPath == $category['categories_id']) {
//    $new_style = 'category-top';
            $new_style = 'nav-item nav-link m-1 activeLink';
//    $categories_tab_current = '<span class="category-subs-selected">' . $categories_tab->fields['categories_name'] . '</span>';
            $categories_tab_current = $category['categories_name'];
        } else {
            if (!$includeAllCategories) {
                $count = zen_products_in_category_count($category['categories_id']);
                if ($count === 0) {
                    continue;
                }
            }
//    $new_style = 'category-top';
            $new_style = 'nav-item nav-link m-1';
            $categories_tab_current = $category['categories_name'];
        }
        // create link to top level category
        $links_list[] = '<a class="' . $new_style . '" href="' . zen_href_link(FILENAME_DEFAULT, 'cPath=' . (int)$category['categories_id']) . '">' . $categories_tab_current . '</a> ';
    }