<?php
/**
 * ZCA Banners Carousel
 * Plugin Template
 * 
 * BOOTSTRAP v3.5.1
 *
 */
// -----
// If the current page is running on SSL, ensure that the banner can
// be run on SSL, too!
//
$my_banner_filter = ($request_type === 'SSL') ? ' AND banners_on_ssl = 1' : '';

// -----
// The $find_banners value is presumed to be set by the invoking script and is the
// output of that script's call to zen_build_banners_group.
//
$sql =
    "SELECT banners_id
       FROM " . TABLE_BANNERS . "
      WHERE status = 1 " .
           $find_banners .
           $my_banner_filter . "
      ORDER BY banners_sort_order";
$banners = $db->Execute($sql);

// if no active banner in the specified banner group then the box will not show
if ($banners->EOF) {
    return;
}

$banner_group = (int)$banner_group;
?>
<div id="carouselGroup<?php echo $banner_group; ?>" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselGroup<?php echo $banner_group; ?>" data-slide-to="0" class="active"></li>
        <li data-target="#carouselGroup<?php echo $banner_group; ?>" data-slide-to="1"></li>
        <li data-target="#carouselGroup<?php echo $banner_group; ?>" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner rounded">
<?php
// -----
// The first banner in the group is active; all others won't have this class as
// the variable's reset to an empty string at the end of the foreach loop below.
//
$addBannerClass = ' active';
foreach ($banners as $row) {
?>
        <div class="carousel-item<?php echo $addBannerClass; ?>">
            <?php echo zen_display_banner('static', $row['banners_id']); ?>
        </div>
  
<?php
    $addBannerClass = '';
}
?>
    </div>
    <a class="carousel-control-prev" href="#carouselGroup<?php echo (int)$banner_group; ?>" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"><?php echo BUTTON_PREVIOUS_ALT; ?></span>
    </a>
    <a class="carousel-control-next" href="#carouselGroup<?php echo (int)$banner_group; ?>" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"><?php echo BUTTON_NEXT_ALT; ?></span>
    </a>
</div>
