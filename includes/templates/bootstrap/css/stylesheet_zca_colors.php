<?php
// -----
// Part of the Bootstrap template, assigning colors based on those configured.
//
// BOOTSTRAP v3.5.2
//
?>
<style>
<?php
//- Body
?>
body {color: <?php echo ZCA_BODY_TEXT_COLOR; ?>;background-color: <?php echo ZCA_BODY_BACKGROUND_COLOR; ?>;}
a {color: <?php echo ZCA_BUTTON_LINK_COLOR; ?>;}
a:hover {color: <?php echo ZCA_BUTTON_LINK_COLOR_HOVER; ?>;}
.form-control::-webkit-input-placeholder,
.form-control::-moz-placeholder,
.form-control:-ms-input-placeholder,
.form-control::-ms-input-placeholder,
.form-control::placeholder,
.required-info,
.alert {
    color: <?php echo ZCA_BODY_PLACEHOLDER; ?>;
}
<?php
//- Buttons
?>
.btn {
    color: <?php echo ZCA_BUTTON_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_BUTTON_COLOR; ?>;
    border-color: <?php echo ZCA_BUTTON_BORDER_COLOR; ?>;
}
.btn:hover {
    color: <?php echo ZCA_BUTTON_TEXT_COLOR_HOVER; ?>;
    background-color: <?php echo ZCA_BUTTON_COLOR_HOVER; ?>;
    border-color: <?php echo ZCA_BUTTON_BORDER_COLOR_HOVER; ?>;
}
<?php
//- Base header
?>
#headerWrapper {
    background-color: <?php echo ZCA_HEADER_WRAPPER_BACKGROUND_COLOR; ?>;
}
#tagline {
    color: <?php echo ZCA_HEADER_TAGLINE_TEXT_COLOR; ?>;
}
<?php
//- Header navbar
?>
nav.navbar {
    background-color: <?php echo ZCA_HEADER_NAV_BAR_BACKGROUND_COLOR; ?>;
}
nav.navbar a.nav-link {
    color: <?php echo ZCA_HEADER_NAVBAR_LINK_COLOR; ?>;
}
nav.navbar a.nav-link:hover {
    color: <?php echo ZCA_HEADER_NAVBAR_LINK_COLOR_HOVER; ?>;
}
nav.navbar .navbar-toggler {
    color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_COLOR; ?>;
    border-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_BORDER_COLOR; ?>;
}
nav.navbar .navbar-toggler:hover {
    color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_TEXT_COLOR_HOVER; ?>;
    background-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_COLOR_HOVER; ?>;
    border-color: <?php echo ZCA_HEADER_NAVBAR_BUTTON_BORDER_COLOR_HOVER; ?>;
}
<?php
//- Header EZ-Pages Bar
?>
#ezpagesBarHeader {
    background-color: <?php echo ZCA_HEADER_EZPAGE_BACKGROUND_COLOR; ?>;
}
#ezpagesBarHeader a.nav-link {
    color: <?php echo ZCA_HEADER_EZPAGE_LINK_COLOR; ?>;
}
#ezpagesBarHeader a.nav-link:hover {
    color: <?php echo ZCA_HEADER_EZPAGE_LINK_COLOR_HOVER; ?>;
}
<?php
//- Header Category Tabs
?>
#navCatTabs a {
    color: <?php echo ZCA_HEADER_TABS_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_HEADER_TABS_COLOR; ?>;
}
#navCatTabs a:hover {
    color: <?php echo ZCA_HEADER_TABS_TEXT_COLOR_HOVER; ?>;
    background-color: <?php echo ZCA_HEADER_TABS_COLOR_HOVER; ?>;
}
<?php
//- Breadcrumbs
?>
#navBreadCrumb ol {
    background-color: <?php echo ZCA_BODY_BREADCRUMBS_BACKGROUND_COLOR; ?>;
}
#navBreadCrumb li {
    color: <?php echo ZCA_BODY_BREADCRUMBS_TEXT_COLOR; ?>;
}
#navBreadCrumb li a {
    color: <?php echo ZCA_BODY_BREADCRUMBS_LINK_COLOR; ?>;
}
#navBreadCrumb li a:hover {
    color: <?php echo ZCA_BODY_BREADCRUMBS_LINK_COLOR_HOVER; ?>;
}
<?php
//- Footer
?>
#footerWrapper {
    color: <?php echo ZCA_FOOTER_WRAPPER_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_FOOTER_WRAPPER_BACKGROUND_COLOR; ?>;
}
.legalCopyright,
.legalCopyright a {
    color: <?php echo ZCA_FOOTER_WRAPPER_TEXT_COLOR; ?>;
}
#ezpagesBarFooter {
    background-color: <?php echo ZCA_FOOTER_EZPAGE_BACKGROUND_COLOR; ?>;
}
#ezpagesBarFooter a.nav-link {
    color: <?php echo ZCA_FOOTER_EZPAGE_LINK_COLOR; ?>;
}
#ezpagesBarFooter a.nav-link:hover {
    color: <?php echo ZCA_FOOTER_EZPAGE_LINK_COLOR_HOVER; ?>;
}
<?php
//- Sideboxes
?>
.leftBoxCard,
.rightBoxCard {
    color: <?php echo ZCA_SIDEBOX_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_SIDEBOX_BACKGROUND_COLOR; ?>;
}

.leftBoxHeading,
.rightBoxHeading {
    color: <?php echo ZCA_SIDEBOX_HEADER_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_SIDEBOX_HEADER_BACKGROUND_COLOR; ?>;
}
.leftBoxHeading a,
.rightBoxHeading a {
    color: <?php echo ZCA_SIDEBOX_HEADER_LINK_COLOR; ?>;
}
.leftBoxHeading a:hover,
.rightBoxHeading a:hover {
    color: <?php echo ZCA_SIDEBOX_HEADER_LINK_COLOR_HOVER; ?>;
}
#categoriesContent .badge,
#documentcategoriesContent .badge {
    color: <?php echo ZCA_SIDEBOX_COUNTS_COLOR; ?>;
    background-color: <?php echo ZCA_SIDEBOX_COUNTS_BACKGROUND_COLOR; ?>;
}
.leftBoxCard .list-group-item,
.rightBoxCard .list-group-item {
    color: <?php echo ZCA_SIDEBOX_LINK_COLOR; ?>;
    background-color: <?php echo ZCA_SIDEBOX_LINK_BACKGROUND_COLOR; ?>;
}
.leftBoxCard .list-group-item:hover,
.rightBoxCard .list-group-item:hover {
    color: <?php echo ZCA_SIDEBOX_LINK_COLOR_HOVER; ?>;
    background-color: <?php echo ZCA_SIDEBOX_LINK_BACKGROUND_COLOR_HOVER; ?>;
}
<?php
//- Centerboxes
?>
.centerBoxContents.card {
    color: <?php echo ZCA_CENTERBOX_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_CENTERBOX_BACKGROUND_COLOR; ?>;
}
.centerBoxHeading {
    color: <?php echo ZCA_CENTERBOX_HEADER_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_CENTERBOX_HEADER_BACKGROUND_COLOR; ?>;
}
<?php
//- Category cards
?>
.categoryListBoxContents.card {
    color: <?php echo ZCA_CENTERBOX_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_CENTERBOX_BACKGROUND_COLOR; ?>;
}
.categoryListBoxContents {
    background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR; ?>;
}
.categoryListBoxContents:hover {
    background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;
}
<?php
//- Pagination links
?>
a.page-link {
    color: <?php echo ZCA_BUTTON_PAGEINATION_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_BUTTON_PAGEINATION_COLOR; ?>;
    border-color: <?php echo ZCA_BUTTON_PAGEINATION_BORDER_COLOR; ?>;
}
a.page-link:hover {
    color: <?php echo ZCA_BUTTON_PAGEINATION_TEXT_COLOR_HOVER; ?>;
    background-color: <?php echo ZCA_BUTTON_PAGEINATION_COLOR_HOVER; ?>;
    border-color: <?php echo ZCA_BUTTON_PAGEINATION_BORDER_COLOR_HOVER; ?>;
}
.page-item.active span.page-link {
    color: <?php echo ZCA_BUTTON_PAGEINATION_ACTIVE_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_BUTTON_PAGEINATION_ACTIVE_COLOR; ?>;
}
<?php
//- Product cards
?>
.sideBoxContentItem {
    background-color: <?php echo ZCA_SIDEBOX_CARD_BACKGROUND_COLOR; ?>;
}
.sideBoxContentItem:hover {
    background-color: <?php echo ZCA_SIDEBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;
}
.centerBoxContents {
    background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR; ?>;
}
.centerBoxContents:hover {
    background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;
}
.centerBoxContentsListing:hover {
    background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;
}
.listingProductImage {
    min-width: <?php echo (int)IMAGE_PRODUCT_LISTING_WIDTH; ?>px;
}
<?php
//- Product reviews
?>
.productReviewCard:hover {
    background-color: <?php echo ZCA_CENTERBOX_CARD_BACKGROUND_COLOR_HOVER; ?>;
}
<?php
//- Product pricing
?>
.productBasePrice {
    color: <?php echo ZCA_BODY_PRODUCTS_BASE_COLOR; ?>;
}
.normalprice {
    color: <?php echo ZCA_BODY_PRODUCTS_NORMAL_COLOR; ?>;
}
.productSpecialPrice {
    color: <?php echo ZCA_BODY_PRODUCTS_SPECIAL_COLOR; ?>;
}
.productPriceDiscount {
    color: <?php echo ZCA_BODY_PRODUCTS_DISCOUNT_COLOR; ?>;
}
.productSalePrice {
    color: <?php echo ZCA_BODY_PRODUCTS_SALE_COLOR; ?>;
}
.productFreePrice {
    color: <?php echo ZCA_BODY_PRODUCTS_FREE_COLOR; ?>;
}
<?php
// -----
// Additional coloring for v3.1.2.
//
if (defined('ZCA_ADD_TO_CART_TEXT_COLOR')) {
?>
#addToCart-card-header {
    color: <?php echo ZCA_ADD_TO_CART_TEXT_COLOR; ?>;
    background-color: <?php echo ZCA_ADD_TO_CART_BACKGROUND_COLOR; ?>;
}
#addToCart-card {
    border-color: <?php echo ZCA_ADD_TO_CART_BORDER_COLOR; ?>;
}
<?php
}

if (defined('ZCA_BUTTON_IN_CART_BACKGROUND_COLOR')) {
?>
.btn.button_add_selected {
    background: <?php echo ZCA_BUTTON_ADD_SELECTED_BACKGROUND_COLOR; ?>;
    color: <?php echo ZCA_BUTTON_ADD_SELECTED_TEXT_COLOR; ?>;
}
.btn.button_add_selected:hover {
    background: <?php echo ZCA_BUTTON_ADD_SELECTED_BACKGROUND_COLOR_HOVER; ?>;
    color:<?php echo ZCA_BUTTON_ADD_SELECTED_TEXT_COLOR_HOVER; ?>;
}
.btn.button_in_cart {
    background: <?php echo ZCA_BUTTON_IN_CART_BACKGROUND_COLOR; ?>;
    color: <?php echo ZCA_BUTTON_IN_CART_TEXT_COLOR; ?>;
}
.btn.button_in_cart:hover {
    background: <?php echo ZCA_BUTTON_IN_CART_BACKGROUND_COLOR_HOVER; ?>;
    color: <?php echo ZCA_BUTTON_IN_CART_TEXT_COLOR_HOVER; ?>;
}
<?php
}
?>
</style>
