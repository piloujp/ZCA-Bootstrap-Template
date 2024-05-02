<?php
?>
<script src="<?= $template->get_template_dir($script_name, DIR_WS_TEMPLATE, $current_page_base, 'jscript') . '/jquery.matchHeight.min.js' ?>"></script>
<script>
$(document).ready(function() {
    $('.sideBoxContent .carousel-item').matchHeight();
});
</script>
