<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://notify.biz
 * @since      1.0.0
 *
 * @package    Notify_For_Woocommerce
 * @subpackage Notify_For_Woocommerce/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Notify_For_Woocommerce
 * @subpackage Notify_For_Woocommerce/admin
 * @author     notify <hello@notify.biz>
 */
class Notify_For_Woocommerce_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Notify_For_Woocommerce_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Notify_For_Woocommerce_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/notify-for-woocommerce-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Notify_For_Woocommerce_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Notify_For_Woocommerce_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/notify-for-woocommerce-admin.js', array( 'jquery' ), $this->version, false );

	}

    /**
     * Display the navigation button in the admin area.
     *
     * @since    1.0.0
     */
    public function show_in_menu() {
        add_submenu_page(
            'woocommerce',
            NOTIFY_FOR_WOOCOMMERCE_PLUGIN_NAME,
            NOTIFY_FOR_WOOCOMMERCE_PLUGIN_MENU_NAME,
            'manage_options',
            NOTIFY_FOR_WOOCOMMERCE_PAGE_PATH_FULL
        );
    }

    /**
     * Register all plugin settings.
     *
     * @since    1.0.0
     */
    public function initialize_settings() {
        /**
         * Plugin authentication and setup
         */
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTINGS, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_API_KEY);
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTINGS, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_SLOT_SIM);
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTINGS, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_DEVICE_ID);

        /**
         * Plugin feature flags by WooCommerce statuses
         */
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_TOGGLE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_TOGGLE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_TOGGLE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_TOGGLE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_TOGGLE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_TOGGLE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_TOGGLE );

        /**
         * Plugin status messages for WooCommerce statuses
         */
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_MESSAGE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_MESSAGE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_MESSAGE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_MESSAGE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_MESSAGE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_MESSAGE );
        register_setting( NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES, NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_MESSAGE );
    }

    /**
     * Do the actions when the WooCommerce hooks are triggered.
     *
     * @since    1.0.0
     */
    function woocommerce_actions($order_id, $checkout = null) {
        global $woocommerce;

        $order = wc_get_order( $order_id );
        $full_name = $order->get_billing_first_name().' '.$order->get_billing_last_name();
        $address = $order->get_billing_address_1().' '.$order->get_billing_address_2();
        $total = wc_format_decimal($order->get_total(), 2);
        $ordernumber = $order->get_order_number();
        $phone = (strpos($order->get_billing_phone(), '+4') === false)
            ? '+4'. $order->get_billing_phone()
            : $order->get_billing_phone();

        if (get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_TOGGLE) == 1 && $order->get_status() == "pending") {
            $final_order= str_replace("{name}", $full_name, get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_MESSAGE));
            $final_order= str_replace("{address}", $address, $final_order);
            $final_order= str_replace("{amount}", $total, $final_order);
            $final_order= str_replace("{ordernumber}", $ordernumber, $final_order);
        }

        if (get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_TOGGLE) == 1 && $order->get_status() == "processing") {
            $final_order= str_replace("{name}", $full_name, get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_MESSAGE));
            $final_order= str_replace("{address}", $address, $final_order);
            $final_order= str_replace("{amount}", $total, $final_order);
            $final_order= str_replace("{ordernumber}", $ordernumber, $final_order);
        }

        if (get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_TOGGLE) == 1 && $order->get_status() == "on-hold") {
            $final_order= str_replace("{name}", $full_name, get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_MESSAGE));
            $final_order= str_replace("{address}", $address, $final_order);
            $final_order= str_replace("{amount}", $total, $final_order);
            $final_order= str_replace("{ordernumber}", $ordernumber, $final_order);
        }

        if (get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_TOGGLE) == 1 && $order->get_status() == "completed"){
            $final_order= str_replace("{name}", $full_name, get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_MESSAGE));
            $final_order= str_replace("{address}", $address, $final_order);
            $final_order= str_replace("{amount}", $total, $final_order);
            $final_order= str_replace("{ordernumber}", $ordernumber, $final_order);
        }

        if (get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_TOGGLE) == 1 && $order->get_status() == "cancelled"){
            $final_order= str_replace("{name}", $full_name, get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_MESSAGE));
            $final_order= str_replace("{address}", $address, $final_order);
            $final_order= str_replace("{amount}", $total, $final_order);
            $final_order= str_replace("{ordernumber}", $ordernumber, $final_order);
        }

        if (get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_TOGGLE) == 1 && $order->get_status() == "refunded"){
            $final_order= str_replace("{name}", $full_name, get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_MESSAGE));
            $final_order= str_replace("{address}", $address, $final_order);
            $final_order= str_replace("{amount}", $total, $final_order);
            $final_order= str_replace("{ordernumber}", $ordernumber, $final_order);
        }

        if (get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_TOGGLE) == 1 && $order->get_status() == "failed"){
            $final_order= str_replace("{name}", $full_name, get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_MESSAGE));
            $final_order= str_replace("{address}", $address, $final_order);
            $final_order= str_replace("{amount}", $total, $final_order);
            $final_order= str_replace("{ordernumber}", $ordernumber, $final_order);
        }

        $body = array(
            'message' => $final_order,
            'phone' => $phone,
            'device' => get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_DEVICE_ID),
            'sim'	=> get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_SLOT_SIM)
        );

        $response = wp_remote_post( 'https://api.notify.biz/v1/send?key=' . get_option(NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_API_KEY), array(
            'body' => $body
        ) );
        $body = wp_remote_retrieve_body( $response );
        $responseData = ( ! is_wp_error( $response ) ) ? json_decode( $body, true ) : null;
    }
}
