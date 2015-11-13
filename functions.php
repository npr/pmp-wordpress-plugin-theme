<?php
/**
 * PMP Megaphone functions and definitions
 *
 * @package PMP Megaphone
 */

if ( ! function_exists( 'pmp_megaphone_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pmp_megaphone_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on PMP Topic Site, use a find and replace
	 * to change 'pmp_megaphone' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pmp_megaphone', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Main Navigation', 'pmp_megaphone' ),
		'secondary' => esc_html__( 'Footer Navigation', 'pmp_megaphone' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Define necessary global variables used through out the theme.
	 */

	global $pmp_megaphone_js_head;
	global $pmp_megaphone_js_footer;

	/* Used to access various fonts variables to get Google work */

	global $fm_family;		/* Masthead Font Family */
    global $fm_googleapi;	/* Masthead Font Call */
    global $fm_weight;		/* Masthead Font Weight */

	global $fd_family;		/* Display Font Family */
    global $fd_googleapi;	/* Display Font Call */
    global $fd_weight;		/* Display Font Weight */

	global $fb_family;		/* Body Font Family */
    global $fb_googleapi;	/* Body Font Call */

}
endif; // pmp_megaphone_setup
add_action( 'after_setup_theme', 'pmp_megaphone_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function pmp_megaphone_widgets_init() {
	/* Primary Sidebar */
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'pmp_megaphone' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	/* Tertiary Sidebar */
	register_sidebar( array(
		'name'          => esc_html__( 'Tertiary Sidebar', 'pmp_megaphone' ),
		'id'            => 'sidebar-tertiary-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	/* Tertiary Sidebar */
	register_sidebar( array(
		'name'          => esc_html__( 'Archive Sidebar', 'pmp_megaphone' ),
		'id'            => 'sidebar-archive-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	/* Widget to the right of the Navigation */
	register_sidebar( array(
		'name'          => esc_html__( 'Right Nav', 'pmp_megaphone' ),
		'id'            => 'nav-right-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	/* Front Page Widgets */

	register_sidebar( array(
		'name'          => esc_html__( 'Front Page Sidebar 1', 'pmp_megaphone' ),
		'id'            => 'sidebar-front-page-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


	/* Footer Widgets */
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'pmp_megaphone' ),
		'id'            => 'footer-widget-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'pmp_megaphone' ),
		'id'            => 'footer-widget-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'pmp_megaphone' ),
		'id'            => 'footer-widget-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'pmp_megaphone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function pmp_megaphone_scripts() {

	wp_enqueue_script('jquery');

	wp_enqueue_style( 'pmp_megaphone-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pmp_megaphone-navigation', get_template_directory_uri() . '/js/responsive-menu-wpbacon.js', array('jquery'), '20120206', true );

	wp_enqueue_script( 'pmp_megaphone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'pmp_megaphone_scripts' );




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Create Get Posts by Category shortcode. May use this to get 'more like this category' widget in sidebar on Post pages.
 * From http://www.wpbeginner.com/wp-tutorials/how-to-show-recent-posts-by-category-in-wordpress/
 */

function wpb_postsbycategory() {
// the query
$the_query = new WP_Query( array(
	'category_name' => 'announcements',
	'posts_per_page' => 3 )
);

// The Loop
if ( $the_query->have_posts() ) {
	$string .= '<ul class="postsbycategory widget_recent_entries">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
			if ( has_post_thumbnail() ) {
			$string .= '<li>';
			$string .= '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_post_thumbnail($post_id, array( 50, 50) ) . get_the_title() .'</a></li>';
			} else {
			// if no featured image is found
			$string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
			}
			}
	} else {
	// no posts found
}
$string .= '</ul>';

	return $string;

	/* Restore original Post Data */
	wp_reset_postdata();
}

// Add a shortcode
add_shortcode('categoryposts', 'wpb_postsbycategory');

// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');



/**
 * Add & Adjust Image Sizes
 * https://developer.wordpress.org/reference/functions/add_image_size/
 */

add_image_size( 'featured-image', 800, 500 );


/**
 * Front Page Functions
 * These functions are used to display the custom front page for the theme. They are called in front-page.php
 */


/* Featured Post Meta Box */

function pmp_megaphone_featured_meta() {
    add_meta_box( 'pmp_megaphone_meta', __( 'Featured This Post', 'pmp-topic-textdomain' ), 'pmp_megaphone_meta_callback', 'post', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'pmp_megaphone_featured_meta' );

/**
 * Outputs the content of the meta box
 */

function pmp_megaphone_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'pmp_megaphone_nonce' );
    $pmp_megaphone_stored_meta = get_post_meta( $post->ID );
    ?>

 <p>
    <span class="pmp-topic-row-title"><?php _e( 'Check this to feature this post on the Front Page: ', 'pmp-topic-textdomain' )?></span>
    <div class="pmp-topic-row-content">
        <label for="featured-checkbox">
            <input type="checkbox" name="featured-checkbox" id="featured-checkbox" value="yes" <?php if ( isset ( $pmp_megaphone_stored_meta['featured-checkbox'] ) ) checked( $pmp_megaphone_stored_meta['featured-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured Item', 'pmp-topic-textdomain' )?>
        </label>

    </div>
</p>

    <?php
}

/**
 * Saves the custom meta input
 */
function pmp_megaphone_meta_save( $post_id ) {

    // Checks save status - overcome autosave, etc.
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'pmp_megaphone_nonce' ] ) && wp_verify_nonce( $_POST[ 'pmp_megaphone_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

// Checks for input and saves - save checked as yes and unchecked at no
if( isset( $_POST[ 'featured-checkbox' ] ) ) {
    update_post_meta( $post_id, 'featured-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'featured-checkbox', 'no' );
}

}
add_action( 'save_post', 'pmp_megaphone_meta_save' );

/* Featured Article */

function pmp_megaphone_fp_feature(){

	$args = array(
			'orderby' => array ('featured-checkbox' , 'date' => 'ASC'),
			'meta_query' => array(
                            array(
                            'key' => 'featured-checkbox',
                            'value' => 'yes'
                    )
                )
		 );

    $featured = new WP_Query($args);

	// the loop
	if ( $featured->have_posts() ) {
		while ( $featured->have_posts() ) {
			$featured->the_post();

			$custom_string = '<div class="articles-featured';
			// Check for Image
			if ( has_post_thumbnail() ) {
				$thumb_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'featured-image' );
				$custom_string .= ' has-image" style="background-image:url('.$thumb_image_url[0].');" >';
			} else {
				$custom_string .= '">';
			}
			// Get Link
			$custom_string .= '<a href="' . get_the_permalink() . ' ">';
			$custom_string .= '<h1 class="section-title">Featured Article</h1>';
			// Get Text
			$custom_string .= '<div class="article-text"><h2 class="feature-title">' . get_the_title() . '</h2><p>' . get_the_excerpt() .'</p></div></a></div>';
		}
	} else {
		// no posts found
	}

	print_r ($custom_string);

	/* Restore original Post Data */

	wp_reset_postdata();
}



/* Recent Posts */

function pmp_megaphone_fp_recent_posts(){

	// the custom query
	$custom_query = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => 3 )
	);

	// the loop
	if ( $custom_query->have_posts() ) {
		$custom_string = '<div class="articles-recent"><h1 class="section-title"><a href="'. get_permalink( get_option( 'page_for_posts' ) ).'">Recent Articles</a></h1>';
		while ( $custom_query->have_posts() ) {
			$custom_query->the_post();
			$custom_string .= '<div class="article"><h2><a href="' . get_the_permalink() . ' " class="article">';
			$custom_string .= get_the_title() . '</a></h2>';
			$custom_string .= '<p>'.get_the_excerpt().'</p></div>';
		}
	} else {
		// no posts found
	}

	$custom_string .= "</div>";

	print_r ($custom_string);

	/* Restore original Post Data */

	wp_reset_postdata();
}

/* Recent Posts by Category */

function pmp_megaphone_fp_category_posts($cat_id){

	// the custom query
	$custom_query = new WP_Query( array(
		'post_type' => 'post',
		'cat' => $cat_id,
		'posts_per_page' => 3 )
	);

	// the variables
	$post_count = $custom_query->post_count;
	$i = 0;

	// the loop
	if ( $custom_query->have_posts() ) {
		$custom_string = '<h1 class="section-title"><a href="'. get_category_link( $cat_id ) . '">' . get_cat_name( $cat_id ) . '</a></h1>';
		while ( $custom_query->have_posts() ) {
			$custom_query->the_post();
			$custom_string .= '<div class="article one-third';
			if ($i === 0){
				$custom_string .= ' first-col';
			}
			if ( has_post_thumbnail() ) {
				$thumb_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
				$custom_string .= '"><div class="article-header has-image" style="background-image:url('.$thumb_image_url[0].');">';
			} else {
				$custom_string .= '"><div class="article-header">';
			}
			$custom_string .= '<h2>';
			$custom_string .= '<a href="'.get_the_permalink().'"><em>'.get_the_title().'</em></a></h2></div>';
			$custom_string .= '<div class="article-excerpt"><p>'.wp_trim_words( get_the_excerpt(), $num_words = 20).'</p></div>';
			$custom_string .= '</div>';
			$i++;
		}
	} else {
		// no posts found
	}

	print_r ($custom_string);

	wp_reset_postdata();

}


/* Theme options */

require_once ( get_stylesheet_directory() . '/options.php' );

function sa_layout_view() {
	global $sa_options;
	$settings = get_option( 'sa_options', $sa_options );
}

add_action( 'wp_head', 'sa_layout_view' );


// Add Layout CSS class by filter

add_filter( 'body_class', 'add_layout_class' );
function add_layout_class( $classes ) {
	if (!is_front_page())
		$classes[] = 'content-sidebar-with-ad';
		// return the $classes array
		return $classes;
}

// Remove Emoji Script

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Covert Hex Colors to RGB

/* Convert hexdec color string to rgb(a) string */

function hex2rgba($color, $opacity = false) {

	$default = 'rgb(0,0,0)';

	//Return default if no color provided
	if(empty($color))
          return $default;

	//Sanitize $color if "#" is provided
    if ($color[0] == '#' ) {
    	$color = substr( $color, 1 );
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif ( strlen( $color ) == 3 ) {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
            return $default;
    }

    //Convert hexadec to rgb
    $rgb =  array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if($opacity){
    	if(abs($opacity) > 1)
    		$opacity = 1.0;
    	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
    } else {
    	$output = 'rgb('.implode(",",$rgb).')';
    }

    //Return rgb(a) color string
    return $output;
}