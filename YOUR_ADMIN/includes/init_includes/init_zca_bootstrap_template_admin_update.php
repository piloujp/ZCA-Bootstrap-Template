<?php
// -----
// Configuration update for the ZCAdditions' bootstrap template.  Required by
// init_zca_bootstrap_template_admin if the current template version isn't yet registered.
//
// The $cgi value contains the configuration_group_id associated with the template's configuration.
// settings.
//
$db->Execute(
    "UPDATE " . TABLE_CONFIGURATION . "
        SET configuration_value = '" . ZCA_BOOTSTRAP_CURRENT_VERSION . "',
            last_modified = now()
      WHERE configuration_key = 'ZCA_BOOTSTRAP_VERSION'
      LIMIT 1"
);

if (!zen_page_key_exists('configBootstrapTemplate')) {
    zen_register_admin_page('configBootstrapTemplate', 'BOX_ZCA_BOOTSTRAP', 'FILENAME_CONFIGURATION', "gID=$cgi", 'configuration', 'Y');
}
