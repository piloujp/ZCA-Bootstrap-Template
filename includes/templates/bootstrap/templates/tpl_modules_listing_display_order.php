<?php
/**
 * Module Template
 * 
 * BOOTSTRAP 3.6.3
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_modules_listing_display_order.php 3369 2006-04-03 23:09:13Z drbyte $
 */
$disp_order = (int)($disp_order ?? 0);
$disp_order_default = (int)($disp_order_default ?? 0);
if ($disp_order <= 0 || $disp_order > 8) {
    $disp_order = ($disp_order_default > 0 && $disp_order_default < 8) ? $disp_order_default : 1;
}

// NOTE: to remove a sort order option add a PHP comment around the option to be removed
$display_order_options = [
    ['id' => '1', 'text' => TEXT_INFO_SORT_BY_PRODUCTS_NAME],
    ['id' => '2', 'text' => TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC],
    ['id' => '3', 'text' => TEXT_INFO_SORT_BY_PRODUCTS_PRICE],
    ['id' => '4', 'text' => TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC],
    ['id' => '5', 'text' => TEXT_INFO_SORT_BY_PRODUCTS_MODEL],
    ['id' => '6', 'text' => TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC],
    ['id' => '7', 'text' => TEXT_INFO_SORT_BY_PRODUCTS_DATE],
];

if ($disp_order !== $disp_order_default) {
    array_unshift($display_order_options, ['id' => $disp_order_default, 'text' => PULL_DOWN_ALL_RESET]);
}
?>
<div id="listingDisplayOrderSorter" class="row mb-3">
    <label for="disp-order-sorter" class="mx-2"><?php echo TEXT_INFO_SORT_BY; ?></label>
<?php
echo
    zen_draw_form('sorter_form', zen_href_link($_GET['main_page']), 'get', 'class="form-inline"') .
    zen_draw_hidden_field('main_page', $_GET['main_page']) .
    zen_hide_session_id();
if (isset($_GET['cPath'], $cPath)) {
    echo zen_draw_hidden_field('cPath', $cPath);
}

echo
    zen_draw_pull_down_menu('disp_order', $display_order_options, $disp_order, 'id="disp-order-sorter" onchange="this.form.submit();"') .
    '</form>';
?>
</div>
