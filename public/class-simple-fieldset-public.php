<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       www.reneecampanilla.com
 * @since      1.0.0
 *
 * @package    Simple_Fieldset
 * @subpackage Simple_Fieldset/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Simple_Fieldset
 * @subpackage Simple_Fieldset/public
 * @author     Renee Campanilla <renee.campanilla@gmail.com>
 */
class Simple_Fieldset_Public {

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
		 * defined in Simple_Fieldset_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Simple_Fieldset_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/simple-fieldset-public.css', array(), $this->version, 'all' );

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
		 * defined in Simple_Fieldset_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Simple_Fieldset_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/simple-fieldset-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Checks Wordpress project if Font Awesome exists
	 *
	 * @since    1.0.0
	 */
	public function check_font_awesome() {
	  global $wp_styles;
	  $srcs = array_map('basename', (array) wp_list_pluck($wp_styles->registered, 'src') );
	  if ( in_array('font-awesome.css', $srcs) || in_array('font-awesome.min.css', $srcs)  ) {
	    //font awesome already exists
	  } else {
	    wp_enqueue_style('font-awesome', plugin_dir_url( __FILE__ ) . 'css/font-awesome.css' );
	  }
	}

	/**
	 * Renders simple fieldset with Font Awesome icon
	 *
	 * @since    1.0.0
	 */
	public function simplefieldset_func($atts = [], $content = null) {
		$fieldset = '<fieldset class="simplefieldset"><legend><i class="fa ';
		$fieldset .= isset($atts['fa'])?$atts['fa']:'fa-font-awesome';
		$fieldset .= '" aria-hidden="true"></i> ';
		$fieldset .= isset($atts['title'])?$atts['title']:'';
		$fieldset .= '</legend>' . $content . '</fieldset>';
		return $fieldset ;
	}

}
