#
# ZCA Bootstrap Colors, uninstall MySQL database changes
#
# Bootstrap Colors: v3.5.2
#
# Note: If you are using phpMyAdmin and use a DB_PREFIX, you will need to add that prefix
# to each of the MySQL tables referenced below!  If you are copying and pasting into the
# Zen Cart admin Tools :: Install SQL Patches, that change is not needed.
#
# Remove the admin_pages entry
#
DELETE FROM admin_pages WHERE page_key = 'toolsZCABootstrapColors' LIMIT 1;
#
# Remove various configuration settings for the colors
#
DELETE FROM configuration
 WHERE configuration_key = 'ZCA_BOOTSTRAP_COLORS_VERSION'
    OR configuration_key LIKE 'ZCA_BODY_%'
    OR configuration_key LIKE 'ZCA_BUTTON_%'
    OR configuration_key LIKE 'ZCA_HEADER_%'
    OR configuration_key LIKE 'ZCA_FOOTER_%'
    OR configuration_key LIKE 'ZCA_SIDEBOX_%'
    OR configuration_key LIKE 'ZCA_CENTERBOX_%'
    OR configuration_key LIKE 'ZCA_ADD_TO_CART_%';
#
# Remove the overall configuration-group for the color-related settings.
#
DELETE FROM configuration_group WHERE configuration_group_title = 'ZCA Bootstrap Colors' LIMIT 1;