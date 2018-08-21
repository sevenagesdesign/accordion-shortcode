<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://sevenagesdesign.com/
 * @since      1.0.0
 *
 * @package    Acc_Sc
 * @subpackage Acc_Sc/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Acc_Sc
 * @subpackage Acc_Sc/public
 * @author     Seven Ages Design <dev@sevenagesdesign.com>
 */
class Acc_Sc_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Acc_Sc_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Acc_Sc_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/acc-sc-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'font-aweesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Acc_Sc_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Acc_Sc_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/acc-sc-public.js', array( 'jquery' ), $this->version, false );

	}

}

/**
 * Register the shortcode for the plugin.
 *
 * @since	1.0.0
 */
function accordion_func( $atts ) {
	$a = shortcode_atts( array(
		'title'		=> 'Accordion Title',
		'content'	=> 'Accordion Content',
	), $atts);
	return "<div class='accordion-section'><div class='accordion-title'><h3>{$a['title']}</h3></div><div class='accordion-content'><p>{$a['content']}</p></div></div>";
}
add_shortcode( 'accordion', 'accordion_func' );