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

$tab = isset($_GET['tab']) && in_array($_GET['tab'], NOTIFY_FOR_WOOCOMMERCE_TABS)
? sanitize_title_for_query($_GET['tab'])
: '';
?>

<div class="wrap nfw-wrapper">
    <div class="nfw-header">
        <div class="nfw-section">
            <img class="nfw-logo" src="<?php echo plugins_url('', dirname(__DIR__) ).'/admin/images/logo-notify.svg'; ?>">

            <h1><?php _e('Notify for WooCommerce', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?></h1>
        </div>
        <div class="nfw-section nfw-text-right">
            <ul class="nfw-quick-links">
                <li>
                    <a href="https://app.notify.biz" target="_blank"><?php _e('Your account on notify.biz', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?></a>
                </li>
                <li>
                    <a href="https://notify.biz/suport" target="_blank"><?php _e('Support', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/notify.biz" target="_blank"><?php _e('Facebook', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?></a>
                </li>
            </ul>
        </div>
    </div>

    <h2 class="nav-tab-wrapper">
        <a href="?page=<?php echo NOTIFY_FOR_WOOCOMMERCE_PAGE_PATH_RELATIVE ?>" class="nav-tab <?php echo $tab == '' ? 'nav-tab-active' : ''; ?>"><?php _e('Templates', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?></a>
        <a href="?page=<?php echo NOTIFY_FOR_WOOCOMMERCE_PAGE_PATH_RELATIVE ?>&tab=settings" class="nav-tab <?php echo $tab == 'settings' ? 'nav-tab-active' : ''; ?>"><?php _e('Settings', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG); ?></a>
    </h2>

    <form method="post" action="options.php">
        <?php if ($tab === ''): ?>
            <?php include_once plugin_dir_path(__FILE__) . 'notify-for-woocommerce-admin-display-templates.php'; ?>
        <?php elseif ($tab === 'settings'): ?>
            <?php include_once plugin_dir_path(__FILE__) . 'notify-for-woocommerce-admin-display-settings.php'; ?>
        <?php endif; ?>

        <?php submit_button(); ?>
    </form>
</div>

