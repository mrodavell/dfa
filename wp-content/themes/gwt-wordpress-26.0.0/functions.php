<?php
/**
 * gwt_wp functions and definitions
 *
 * @package gwt_wp
 */

/**
 * Template Initialize
 */
require get_template_directory() . '/inc/function-initialize.php';

/**
 * Register widgetized area
 */
require get_template_directory() . '/inc/function-widget.php';

/**
 * Breadcrumbs
 */
require get_template_directory() . '/inc/function-breadcrumbs.php';

/**
 * Govph Excerpt
 */
require get_template_directory() . '/inc/function-excerpt.php';

/**
 * Enqueue scripts and styles
 */
require get_template_directory() . '/inc/function-enqueue_scripts.php';

/**
 * Disable comment functions
 */
require get_template_directory() . '/inc/function-disable_comments.php';

/**
 * GovPH default widgets
 */
require get_template_directory() . '/inc/govph-widget.php';

/**
 * Default sidebar contents
 */
require get_template_directory() . '/inc/sidebar.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// require get_template_directory() . '/inc/jetpack.php';

/**
 * Theme Options Page.
 */
require get_template_directory() . '/inc/function-options.php';

/**
 * Custom Post Types
 */
// require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Envato Flexslider
 */
require get_template_directory() . '/inc/vendors/envato-flex-slider/envato-flex-slider.php';

/**
 * Disable rest api for users additions.
 */
require get_template_directory() . '/inc/function-disable_api.php';

/**
 * GWT only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

function block_frames() {
	header( 'X-FRAME-OPTIONS: SAMEORIGIN' );
}
add_action( 'send_headers', 'block_frames', 10 );


/**
 * Enable classic widgets or disabled gutenberg style for widgets.
 */
require get_template_directory() . '/inc/function-enable-classic-widgets.php';

/**
 * Enable classic posts or disabled gutenberg style for posts.
 */
require get_template_directory() . '/inc/function-enable-classic-posts.php';


/** MY FUNCTIONS **/

function display_latest_blog_post() {
    // Query the latest blog post
    $latest_post = new WP_Query(array(
        'posts_per_page' => 1,  // Number of posts to display (in this case, 1)
        'post_status' => 'publish',  // Show only published posts
    ));

    // Check if there are any posts
    if ($latest_post->have_posts()) {
        while ($latest_post->have_posts()) {
            $latest_post->the_post();

            // Display the post title and content
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<div>' . get_the_content() . '</div>';
        }

        // Reset post data
        wp_reset_postdata();
    } else {
        // If no posts are found
        echo 'No posts found.';
    }
}

// Add a shortcode to easily display the latest blog post in a post or page
function latest_blog_post_shortcode() {
    ob_start();
    display_latest_blog_post();
    return ob_get_clean();
}
add_shortcode('latest_blog_post', 'latest_blog_post_shortcode');



?>