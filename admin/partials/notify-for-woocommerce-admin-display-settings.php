<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://notify.biz
 * @since      1.0.0
 *
 * @package    Notify_For_Woocommerce
 * @subpackage Notify_For_Woocommerce/admin/partials
 */
?>

<?php settings_fields( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTINGS ); ?>
<?php do_settings_sections( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTINGS ); ?>

<p><?php _e('General settings for the plugin', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?></p>

<div class="nfw-form">
    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_SLOT_SIM ?>">
                <?php _e('API Key', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_SLOT_SIM ?>" type="text" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_API_KEY ?>" value="<?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_API_KEY) ); ?>" />
        </div>
    </div>

    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_SLOT_SIM ?>">
                <?php _e('Slot SIM', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_SLOT_SIM ?>" type="text" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_SLOT_SIM ?>" value="<?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_SLOT_SIM) ); ?>" />
        </div>
    </div>

    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_DEVICE_ID ?>">
                <?php _e('Device ID', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_DEVICE_ID ?>" type="text" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_DEVICE_ID ?>" value="<?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_DEVICE_ID) ); ?>" />
        </div>
    </div>
</div>
