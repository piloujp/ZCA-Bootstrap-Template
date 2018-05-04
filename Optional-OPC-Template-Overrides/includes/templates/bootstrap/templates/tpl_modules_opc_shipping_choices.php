<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2013-2017, Vinos de Frutas Tropicales.  All rights reserved.
//
?>
<!--bof shipping-method choices -->
  <div id="checkoutShippingMethod">   
<?php
// -----
// If the order contains only virtual products, the shipping block contains only a hidden field that
// identifies the "free" shipping method; otherwise, display the full shipping block.
//
if ($is_virtual_order) {
    echo zen_draw_hidden_field('shipping', $_SESSION['shipping']['id']) . PHP_EOL;
} else {
    if (zen_count_shipping_modules() > 0) {
?>
<div id="opcShippingChoices" class="card p-0 mb-3">
  <h4 class="card-header">
  <?php echo TABLE_HEADING_SHIPPING_METHOD; ?>
  </h4>
  <div class="card-body p-3">

<?php
        if (count($quotes) > 1 && count($quotes[0]) > 1) {
            $checkout_one->debug_message("CHECKOUT_ONE_TEMPLATE_SHIPPING_QUOTES:\n" . var_export($_SESSION['shipping'], true) . "\n" . var_export($quotes, true));
?>

<div id="opcShippingChoices-content" class="content py-3"><?php echo TEXT_CHOOSE_SHIPPING_METHOD; ?></div>

<?php
        } elseif ($free_shipping == false) {
?>
<div id="opcShippingChoices-content-one" class="content py-3"><?php echo TEXT_ENTER_SHIPPING_INFORMATION; ?></div>

<?php
        }
?>
<?php
        if ($free_shipping == true) {
?>
        <div id="opcShippingChoices-content-two" class="content py-3"><?php echo FREE_SHIPPING_TITLE; ?></div>
        <div id="opcShippingChoices-content-three" class="content py-3"><?php echo sprintf(FREE_SHIPPING_DESCRIPTION, $currencies->format(MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER)) . zen_draw_hidden_field('shipping', 'free_free'); ?></div>

<?php
        } else {
?>
        <div id="checkoutShippingChoices">
<?php
            require ($template->get_template_dir('tpl_modules_checkout_one_shipping.php', DIR_WS_TEMPLATE, $current_page_base, 'templates'). '/tpl_modules_checkout_one_shipping.php');
?>
        </div>
<?php
        }
?>
  </div>
</div>
<?php
    } else {
?>
    <h2 id="checkoutShippingHeadingMethod"><?php echo TITLE_NO_SHIPPING_AVAILABLE; ?></h2>
<?php
//-bof-product_delivery_by_postcode (PDP) integration
        $chk_local_delivery_only = $_SESSION['cart']->in_cart_check('product_is_local_delivery', '1');
        if ($chk_local_delivery_only) {
?>
    <div id="cartLocalText"><?php echo TEXT_PRODUCT_LOCAL_DELIVERY_ONLY; ?></div>
<?php
        }
//-eof-product_delivery_by_postcode (PDP) integration
?>
    <div id="checkoutShippingContentChoose" class="important"><?php echo TEXT_NO_SHIPPING_AVAILABLE; ?></div>
<?php
    }
}  //-Order is not "virtual", display full shipping-method block
?>
  </div>
<!--eof shipping-method choices -->
