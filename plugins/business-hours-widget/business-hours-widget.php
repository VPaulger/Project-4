<?php
/**
 * RED WordPress Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   business_hours_widget
 * @author    Vaughn Paulger <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2019 Vaughn Paulger
 *
 * @wordpress-plugin
 * Plugin Name:       Business Hours Widget
 * Plugin URI:        Business Hours Widget
 * Description:       Business Hours Widget
 * Version:           1.0.0
 * Author:            Vaughn Paulger
 * Author URI:        https://github.com/VPaulger
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

function Business_Hours_Widget() {
  //start by checking if we're on a page
  if( is_page() ) {
    
    global $post;

      // next check if the page has parents
      if ( $post->post_parent ){
       
        // fetch the list of ancestors
        $parents = array_reverse( get_post_ancestors( $post->ID ) );
           
        // get the top level ancestor
        return $parents[0];     
      }   
      // return the id  - this will be the topmost ancestor if there is one, or the current page if not
      return $post->ID;     
  }
}

// TODO: change 'Widget_Name' to the name of your plugin
class Business_Hours_Widget extends WP_Widget {

    /**
     * @TODO - Rename "widget-name" to the name your your widget
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'business-hours-widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			'Business Hours Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Short description of the widget goes here.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		// $title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
    $monday_friday_hours = empty( $instance['monday_friday_hours'] ) ? '' : apply_filters( 'widget_title', $instance['monday_friday_hours'] );
    $saturday_hours = empty( $instance['saturday_hours'] ) ? '' : apply_filters( 'widget_title', $instance['saturday_hours'] );
    $sunday_hours = empty( $instance['sunday_hours'] ) ? '' : apply_filters( 'widget_title', $instance['sunday_hours'] );
    // TODO: other fields go here...
    
		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

    $instance['monday_friday_hours'] = strip_tags( $new_instance['monday_friday_hours'] );
    $instance['saturday_hours'] = strip_tags( $new_instance['saturday_hours'] );
    $instance['sunday_hours'] = strip_tags( $new_instance['sunday_hours'] );
		// TODO: Here is where you update the rest of your widget's old values with the new, incoming values

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
        'title' => 'Business Hours',
        'monday_friday_hours' => '',
        'saturday_hours' => '',
        'sunday_hours' => ''
			)
		);

    $title = strip_tags( $instance['title'] );
    $monday_friday_hours = strip_tags( $instance['monday_friday_hours'] );
    $saturday_hours = strip_tags( $instance['saturday_hours'] );
    $sunday_hours = strip_tags( $instance['sunday_hours'] );

    // TODO: Store the rest of values of the widget in their own variables

    // Display the admin form
    include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'Business_Hours_Widget' );
});
