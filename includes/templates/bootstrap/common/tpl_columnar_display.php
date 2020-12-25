<?php
/**
 * Common Template - tpl_columnar_display.php
 *
 * BOOTSTRAP v3.0.0
 *
 * This file is used for generating tabular output where needed, based on the supplied array of table-cell contents.
 *
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2020 Jul 27 Modified in v1.5.7a $
 */

$zco_notifier->notify('NOTIFY_TPL_COLUMNAR_DISPLAY_START', $current_page_base, $list_box_contents, $title);

?>

<div class="card mb-3">

<?php if ($title) { ?>
<?php echo $title; ?>
<?php } ?>

<div class="card-body text-center">
<?php
if (is_array($list_box_contents)) {
    foreach ($list_box_contents as $row => $cols) {
?>

<div class="card-deck text-center">
<?php
    foreach ($cols as $col) {
      $c_params = "";
      if (isset($col['params'])) $c_params .= ' ' . (string)$col['params'];
      if (isset($col['text'])) {
?>
<?php echo '    <div' . $c_params . '>' . $col['text'] .  '</div>' . "\n"; ?>
<?php
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

<?php $zco_notifier->notify('NOTIFY_TPL_COLUMNAR_DISPLAY_END', $current_page_base, $list_box_contents, $title);
