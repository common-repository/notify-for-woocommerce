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

<?php settings_fields( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES ); ?>
<?php do_settings_sections( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES ); ?>

<p><?php _e('You can use TAGs when you create the SMS text: {name} {address} {amount} {ordernumber}', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?></p>

<div class="nfw-form">
    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_TOGGLE; ?>">
                <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_TOGGLE; ?>" type="checkbox" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_TOGGLE; ?>" value="1" <?php checked( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_TOGGLE) == 1 ); ?> />
                <?php _e('Pending Payment', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <textarea placeholder="Your message here" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_MESSAGE ?>"><?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_MESSAGE) ); ?></textarea>
        </div>
    </div>

    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_TOGGLE; ?>">
                <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_TOGGLE; ?>" type="checkbox" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_TOGGLE; ?>" value="1" <?php checked( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_TOGGLE) == 1 ); ?> />
                <?php _e('Processing', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <textarea placeholder="Your message here" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_MESSAGE ?>"><?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_MESSAGE) ); ?></textarea>
        </div>
    </div>

    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_TOGGLE; ?>">
                <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_TOGGLE; ?>" type="checkbox" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_TOGGLE; ?>" value="1" <?php checked(get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_TOGGLE) == 1); ?> />
                <?php _e('On Hold', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <textarea placeholder="Your message here" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_MESSAGE ?>"><?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_MESSAGE) ); ?></textarea>
        </div>
    </div>

    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_TOGGLE; ?>">
                <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_TOGGLE; ?>" type="checkbox" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_TOGGLE; ?>" value="1" <?php checked( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_TOGGLE) == 1 ); ?> />
                <?php _e('Completed', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <textarea placeholder="Your message here" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_MESSAGE ?>"><?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_MESSAGE) ); ?></textarea>
        </div>
    </div>

    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_TOGGLE; ?>">
                <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_TOGGLE; ?>" type="checkbox" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_TOGGLE; ?>" value="1" <?php checked( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_TOGGLE) == 1 ); ?> />
                <?php _e('Cancelled', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <textarea placeholder="Your message here" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_MESSAGE ?>"><?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_MESSAGE) ); ?></textarea>
        </div>
    </div>

    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_TOGGLE; ?>">
                <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_TOGGLE; ?>" type="checkbox" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_TOGGLE; ?>" value="1" <?php checked( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_TOGGLE) == 1 ); ?> />
                <?php _e('Refunded', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <textarea placeholder="Your message here" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_MESSAGE ?>"><?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_MESSAGE) ); ?></textarea>
        </div>
    </div>

    <div class="nfw-field">
        <div class="nfw-field-label">
            <label for="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_TOGGLE; ?>">
                <input id="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_TOGGLE; ?>" type="checkbox" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_TOGGLE; ?>" value="1" <?php checked( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_TOGGLE) == 1 ); ?> />
                <?php _e('Failed', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?>
            </label>
        </div>

        <div class="nfw-field-input">
            <textarea placeholder="Your message here" name="<?php echo NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_MESSAGE ?>"><?php echo esc_attr( get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_MESSAGE) ); ?></textarea>
        </div>
    </div>
</div>
