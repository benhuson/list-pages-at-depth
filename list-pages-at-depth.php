<?php

/*

Plugin Name: List Pages at Depth
Plugin URI: http://wordpress.org/plugins/list-pages-at-depth/
Description: Enhanced wp_list_pages function so you can specify a start depth. Useful for showing secondary and tertiary navigation independently from primary navigation.
Version: 1.3.1
Author: Ben Huson
Author URI: https://github.com/benhuson/list-pages-at-depth

Released under the GPL:
http://www.opensource.org/licenses/gpl-license.php

*/

global $List_Pages_At_Depth;
$List_Pages_At_Depth = new List_Pages_At_Depth();

class List_Pages_At_Depth {

	/**
	 * Constructor
	 */
	function List_Pages_At_Depth() {

		require_once( dirname( __FILE__ ) . '/includes/widget.php' );

		add_shortcode( 'list-pages-at-depth', array( $this, 'shortcode_list_pages_at_depth' ) );

	}

	/**
	 * List pages
	 */
	function list_pages( $args = '' ) {

		global $post;

		if ( ! isset( $args['startdepth'] ) ) {
			$args['startdepth'] = 0;
		}

		if ( is_page() || $args['startdepth'] == 0 ) {
			$result = array();
			$result = $this->list_pages_at_depth_parent( $post->ID, $result );

			if ( $args['startdepth'] < count( $result ) ) {
				$args['child_of'] = $result[ $args['startdepth'] ];
				return wp_list_pages( $args );
			}
		}

	}

	/**
	 * List pages at depth parent
	 */
	function list_pages_at_depth_parent( $page_id, $result ) {

		$page = get_page( $page_id );

		if ( ! in_array( $page->ID, $result ) ) {
			array_unshift( $result, $page->ID );
		}
		if ( ! in_array( $page->post_parent, $result ) ) {
			array_unshift( $result, $page->post_parent );
		}

		if ( $page->post_parent == 0 ) {
			return $result;
		} else {
			return $this->list_pages_at_depth_parent( $page->post_parent, $result );
		}

	}

	/**
	 * Shortcode [list_pages_at_depth]
	 */
	function shortcode_list_pages_at_depth( $atts, $content, $tag ) {

		$atts['echo'] = 0;
		$pages = list_pages_at_depth( $atts );
		$class = isset( $atts['class'] ) ? ' class="list-pages-at-depth ' . $atts['class'] . '"' : 'list-pages-at-depth';

		return '<ul' . $class . '>' . $pages . '</ul>';

	}

}

/**
 * List pages at depth
 */
function list_pages_at_depth( $args = '' ) {

	global $List_Pages_At_Depth;

	return $List_Pages_At_Depth->list_pages( $args );

}
