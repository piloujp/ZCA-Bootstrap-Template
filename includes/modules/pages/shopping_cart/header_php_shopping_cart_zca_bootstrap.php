<?php
// -----
// Loop through the to-be-displayed productArray, changing any submit-type image in
// its 'buttonUpdate' elements to contain a font-awesome glyph instead.
//
// That regex "magic" says find the first '<input type="image"{...}/>', replace it with the
// button and then copy anything else (like the 'hidden' input that follows).
//
// BOOTSTRAP 3.6.1.
//
if (!(function_exists('zca_bootstrap_active') && zca_bootstrap_active())) {
    return;
}

if (!isset($productArray) || !is_array($productArray)) {
    $productArray = [];
}
for ($i = 0, $n = count($productArray); $i < $n; $i++) {
    // -----
    // For whatever reason, the base Zen Cart formatting for the 'buttonUpdate' entry
    // includes a *disabled* update button when a product requires a fixed quantity
    // to be displayed.  If that's the case, just don't include the button.
    //
    if ($productArray[$i]['flagShowFixedQuantity'] === true) {
        $productArray[$i]['buttonUpdate'] = '&nbsp;';
    } else {
        $productArray[$i]['buttonUpdate'] = preg_replace(
            [
                '/<input.*type="image".*?\/?>/',
                '/<button.*type="submit".*?>.*button>/'
            ],
            '<button type="submit" class="btn btn-sm" aria-label="' . ICON_UPDATE_ALT . '" title="' . ICON_UPDATE_ALT . '"><i aria-hidden="true" class="fas fa-sm fa-sync-alt"></i></button>',
            $productArray[$i]['buttonUpdate']
        );
    }
    $productArray[$i]['quantityField'] = str_replace('form-control', 'form-control mx-auto text-center p-0', $productArray[$i]['quantityField']);
}
