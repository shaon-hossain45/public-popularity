<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Public_Popularity
 * @subpackage Public_Popularity/public/partials
 */

if ( ! class_exists( 'sliderBase' ) ) {
	class sliderBase {

		/**
		 * Shortcode public
		 *
		 * @return void
		 */
		public function wpb_demo_shortcode() {
			$message = '';

			$args = array(
				'post_type'   => 'public_slider',
				'post_status' => 'publish',
				'order'       => 'DESC',
				'orderby'     => 'ID',
			);

			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {
				$message .= '<div class="owl-carousel">';

				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					$message .= '<div><img src="' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . '" alt="Girl in a jacket"></div>';
				endwhile;
				/* Restore original Post Data */
				wp_reset_postdata();
				$message .= '</div>';
			} else {
				// no posts found
				$message .= 'No posts found';
			}

			// Output needs to be return
			return $message;
		}

	}
}
