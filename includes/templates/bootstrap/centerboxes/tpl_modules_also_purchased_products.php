<?php
/**
 * Module Template
 * 
 * BOOTSTRAP v3.6.4
 *
 * Displays content related to "also-purchased-products"
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_modules_also_purchased_products.php 3206 2006-03-19 04:04:09Z birdbrain $
 */
$zc_show_also_purchased = false;
require DIR_WS_MODULES . zen_get_module_directory('centerboxes/' . FILENAME_ALSO_PURCHASED_PRODUCTS);

if ($zc_show_also_purchased === false) {
    return;
}
?>
<div id="also-purchased" class="card mb-3 centerBoxWrapper">
<?php
    if (!empty($title)) {
        echo $title;
    }
?>
    <div id="also-purchased-card-body" class="card-body text-center">
<?php
    if (is_array($list_box_contents)) {
        for ($row = 0, $n = count($list_box_contents); $row < $n; $row++) {
            $params = '';
?>
        <div class="card-deck text-center">
<?php
            for ($col = 0, $j = count($list_box_contents[$row]); $col < $j; $col++) {
                $r_params = $list_box_contents[$row][$col]['params'];
                if (isset($list_box_contents[$row][$col]['text'])) {
                    echo '<div ' . $r_params . '>' . $list_box_contents[$row][$col]['text'] . '</div>';
                }
            }
?>
        </div>
<?php
        }
    }
?>
    </div>
</div>
