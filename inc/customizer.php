<?php
/**
 * PMP Megaphone Theme Customizer
 *
* @package PMP Megaphone
*/

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function pmp_megaphone_customize_register( $wp_customize ) {

    /**
    *   Add postMessage support for site title and description for the Theme Customizer.
    */
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    /**
    * Custom Colors
    */

    /* Primary Accent Color */
    $wp_customize->add_setting('accent_color_1', array(
        'default'   =>  '#404040',
        'type'  => 'option',
        'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize, 'accent_color_1',
        array(
            'label'      => __( 'Primary Accent Color', 'pmp_megaphone' ),
            'section'    => 'colors',
            'settings'   => 'accent_color_1',
        )
    ));

    /* Link Color */
    $wp_customize->add_setting('link_color_1', array(
        'default'   =>  '#B30016',
        'type'  => 'option',
        'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize, 'link_color_1',
        array(
            'label'      => __( 'Link Color', 'pmp_megaphone' ),
            'section'    => 'colors',
            'settings'   => 'link_color_1',
        )
    ));

    /* Text Color */
    $wp_customize->add_setting('font_color_1', array(
        'default'   =>  '#404040',
        'type'  => 'option',
        'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize, 'font_color_1',
        array(
            'label'      => __( 'Text Color', 'pmp_megaphone' ),
            'section'    => 'colors',
            'settings'   => 'font_color_1',
        )
    ));

    /* Text on Accent Color */
    $wp_customize->add_setting('text_on_accent_color_1', array(
        'default'  => 'light',
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize, 'text_on_accent_color_1',
        array(
            'label'     => __( 'Text on Accent Color', 'pmp_megaphone' ),
            'section'   => 'colors',
            'settings'  => 'text_on_accent_color_1',
            'type'      => 'radio',
            'choices'   => array(
                'light'     => __('Light'),
                'dark'      => __('Dark'),
            )
        )
    ));

    /**
    * Add Station Logo, Link, and Call Letters
    */

    /* Create Section */

    $wp_customize->add_section( 'pmp_megaphone_station_info', array(
      'title' => __( 'Station Identity','pmp_megaphone' ),
      'priority' => 30, // Mixed with top-level-section hierarchy.
    ) );

    /*  Add Logo
        From http://kwight.ca/2012/12/02/adding-a-logo-uploader-to-your-wordpress-site-with-the-theme-customizer/ */

    $wp_customize->add_setting( 'station_logo');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'station_logo', array(
        'label'     => __( 'Station Logo', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_station_info',
        'settings'  => 'station_logo',
        'description'   => 'Upload your Station logo. It should be 300px wide x 75px tall.',
    ) ) );

    /*  Add Link */

    $wp_customize->add_setting( 'station_link', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'station_link', array(
        'label'     => __( 'Station URL', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_station_info',
        'settings'  => 'station_link',
        'type'      => 'url',
        'description'   => 'Paste in your Station URL. Please include http or https.',
    ) ) );

    /*  Add Call Letters */

    $wp_customize->add_setting( 'station_callsign');

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'station_callsign', array(
        'label'     => __( 'Station Call Letters', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_station_info',
        'settings'  => 'station_callsign',
        'type'      => 'text',
    ) ) );

    /**
    * Font Selection
    */

    /* Create Section */

    $wp_customize->add_section('pmp_megaphone_font_choices', array(
      'title' => __( 'Fonts','pmp_megaphone' ),
      'priority' => 40, // Mixed with top-level-section hierarchy.
    ) );


    /** Masthead Font **/

    $wp_customize->add_setting( 'font_masthead', array(
        'default'   => 'pt_serif',
        'sanitize_callback' => '',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_masthead', array(
        'label'     => __( 'Masthead', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_font_choices',
        'settings'  => 'font_masthead',
        'description'   => 'Select a font for your masthead. Default is PT Serif.',
        'type'      => 'select',
        'choices'     => array(
            '' => __('Select One'),
            'abril_fatface'     => __('Abril Fatface'),
            'oswald'            => __('Oswald'),
            'playfair_display'  => __('Playfair Display'),
            'pt_sans_narrow'    => __('PT Sans Narrow'),
            'pt_serif'          => __('PT Serif'),
            'source_sans_pro'   => __('Source Sans Pro'),
          )
    ) ) );

    /** Display Font **/

    $wp_customize->add_setting( 'font_display', array(
        'default'   => 'pt_serif',
        'sanitize_callback' => '',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_display', array(
        'label'     => __( 'Display', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_font_choices',
        'settings'  => 'font_display',
        'description'   => 'Select a font to use for your headlines and callouts. Default is PT Serif.',
        'type'      => 'select',
        'choices'     => array(
            '' => __('Select One'),
            'abril_fatface'     => __('Abril Fatface'),
            'oswald'            => __('Oswald'),
            'playfair_display'  => __('Playfair Display'),
            'pt_sans_narrow'    => __('PT Sans Narrow'),
            'pt_serif'          => __('PT Serif'),
            'source_sans_pro'   => __('Source Sans Pro'),
          )
    ) ) );

    /** Body Font **/

    $wp_customize->add_setting( 'font_body', array(
        'default'   => 'lato',
        'sanitize_callback' => '',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_body', array(
        'label'     => __( 'Body', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_font_choices',
        'settings'  => 'font_body',
        'description'   => 'Select a font to use for your body copy. Default is Lato.',
        'type'      => 'select',
        'choices'     => array(
            '' => __('Select One'),
            'alegreya'          => __('Alegreya'),
            'lato'              => __('Lato'),
            'pt_serif'          => __('PT Serif'),
            'roboto'            => __('Roboto'),
            'vollkorn'          => __('Vollkorn'),
            'source_sans_pro'   => __('Source Sans Pro'),
          )
    ) ) );

    /**
    * Header & Footer Scripts
    */

    /* Create Section */

    $wp_customize->add_section('pmp_megaphone_head_foot_js', array(
      'title' => __( 'Scripts','pmp_megaphone' ),
      'priority' => 999,
    ) );

    /* Create Settings */

    $wp_customize->add_setting('pmp_megaphone_custom_js_header', array(
      'sanitize_callback' => '',
    ) );

    $wp_customize->add_setting('pmp_megaphone_custom_js_footer');

    /* Create Controls */

    $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'pmp_megaphone_custom_js_header', array(
        'label'     => __( 'Header Scripts', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_head_foot_js',
        'settings'  => 'pmp_megaphone_custom_js_header',
        'description'   => 'Enter scripts or code you would like output to wp_head.',
        'type'      => 'textarea',
    ) ) );

    $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'pmp_megaphone_custom_js_footer', array(
        'label'     => __( 'Footer Scripts', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_head_foot_js',
        'settings'  => 'pmp_megaphone_custom_js_footer',
        'description'   => 'Enter scripts or code you would like output to wp_footer.',
        'type'      => 'textarea',

    ) ) );

    /**
    * Underwriting Block
    */

    /* Create Section */

    $wp_customize->add_section('pmp_megaphone_underwriter', array(
      'title' => __( 'Underwriting Block','pmp_megaphone' ),
      'priority' => 115,
    ) );

    /* Create Settings */

    $wp_customize->add_setting('pmp_megaphone_underwriter_code', array(
      'sanitize_callback' => '',
    ) );

    $wp_customize->add_setting('pmp_megaphone_underwriter_title', array(
      'sanitize_callback' => '',
    ) );


    /* Create Controls */

    $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'pmp_megaphone_underwriter_title', array(
        'label'     => __( 'Section Title', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_underwriter',
        'settings'  => 'pmp_megaphone_underwriter_title',
        'type'      => 'text',
    ) ) );


    $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'pmp_megaphone_underwriter_code', array(
        'label'     => __( 'Underwriter Code', 'pmp_megaphone' ),
        'section'   => 'pmp_megaphone_underwriter',
        'settings'  => 'pmp_megaphone_underwriter_code',
        'description'   => 'Paste the code for your Underwriter Block here. This code will appear in the sidebars through out the website and in the footer.',
        'type'      => 'textarea',
    ) ) );



}
add_action( 'customize_register', 'pmp_megaphone_customize_register' );



/**
 * Display Custom Color Options
 * From http://code.tutsplus.com/tutorials/adding-the-css-for-a-color-scheme-in-the-theme-customizer--cms-21351
 */

// Says of Text on Accent Color is Light or Dark

add_filter( 'body_class', 'register_accent_text_color' );

function register_accent_text_color( $classes ) {

    if (get_theme_mod( 'text_on_accent_color_1' ) == 'dark'){
        $classes[] = 'accent_text_dark';
    } else {
        $classes[] = 'accent_text_light';
    }
    return $classes;
}

function pmp_megaphone_display_options() {



    // Colors
    $accent_color_1 = get_option( 'accent_color_1', '#404040');

    $link_color_1 = get_option( 'link_color_1', '#B30016' );

    $font_color_1 = get_option( 'font_color_1', '#404040' );


    ?>

    <style type="text/css">
        /**
        * Custom Colors
        */

        /* Text Color */

        body,
        h1.section-title a {
            color: <?php echo $font_color_1; ?>;
        }



        /*  Accent as Background Color.
            Making the Body Background the Accent Color keeps the footer from looking like it is floating on short pages. */

        body,
        #sub-footer-wrap,
        .site-footer {
            background-color: <?php echo $accent_color_1; ?>;
        }
        /*  Generic Link Color */
        a {
            color: <?php echo $link_color_1; ?>;
        }
        a:hover, a:focus {
            color: <?php echo $font_color_1; ?>;
        }


        /*  Button and Input Color */

        button,
        .button,
        input[type="submit"],
        .single .post-navigation,
        .post-edit-link,
        .home .articles-row .article-header a {
            background-color: <?php echo $link_color_1; ?>;
        }
        button:hover, .button:hover, input[type="submit"]:hover,
        button:focus, .button:focus, input[type="submit"]:focus,
        .post-edit-link:hover,
        .post-edit-link:active,
        .sub-menu-toggle.activated {
            background-color: <?php echo $font_color_1; ?>;
        }


        /* Featured Article */

        .home .articles-featured a {
            background-color: <?php echo hex2rgba($accent_color_1, 0.7); ?>;
        }
        .home .articles-featured a:hover,
        .home .articles-featured a:focus {
            background-color: <?php echo hex2rgba($font_color_1, 0.9); ?>;
        }

        /* Articles by Category */

        .home .articles-row .article-header.has-image a {
            background-color: <?php echo hex2rgba($link_color_1, 0.7); ?>;
        }
        .home .articles-row .article-header.has-image a:hover,
        .home .articles-row .article-header.has-image a:focus {
            background-color: <?php echo hex2rgba($font_color_1, 0.9); ?>;
        }

        .home .articles-row .article-header a:hover,
        .home .articles-row .article-header a:focus {
            background-color: <?php echo hex2rgba($font_color_1, 1); ?>;
        }

        /*  Link Color in Main Navigation */

        .main-navigation .current_page_item > a,
        .main-navigation .current-menu-item > a,
        .main-navigation .current_page_ancestor > a,
        .main-navigation .current_page_parent > a {
            color: <?php echo $font_color_1; ?>;
        }
        .main-navigation .current_page_item > a:hover,
        .main-navigation .current-menu-item > a:hover,
        .main-navigation .current_page_ancestor > a:hover,
        .main-navigation .current_page_parent > a:hover,
        .main-navigation .current_page_item > a:focus,
        .main-navigation .current-menu-item > a:focus,
        .main-navigation .current_page_ancestor > a:focus,
        .main-navigation .current_page_parent > a:focus {
            color: <?php echo $link_color_1; ?>;
        }

        /*  Border Color on Headings, the Masthead, and other decorative elements */

        .single #primary-tertiary-wrap h1:after,
        .page #primary-tertiary-wrap h1:after,
        .single .entry-header h1:after,
        .page .entry-header h1:after,
        .single .entry-header:after,
        #masthead,
        #masthead .site-branding .wrap,
        blockquote,
        .articles-recent .section-title:after,
        #articles-by-topic .section-title:after,
        .page-header:after {
            border-color: <?php echo $accent_color_1; ?>;
        }

        /*  Text on Accent Color */

        .accent_text_dark.home .articles-featured h4:after,
        .accent_text_dark #sub-footer-wrap .footer-widget h2:after,
        .accent_text_dark .site-footer .footer-widget h2:after {
            border-color: rgba(0,0,0,0.25);
        }
        .accent_text_dark #sub-footer-wrap,
        .accent_text_dark .site-footer,
        .accent_text_dark.home .articles-featured a,
        .accent_text_dark #sub-footer-wrap a,
        .accent_text_dark .site-footer a {
            color: #000;
        }
        .accent_text_dark #sub-footer-wrap a:hover,
        .accent_text_dark .site-footer a:hover,
        .accent_text_dark.home .articles-featured a:focus,
        .accent_text_dark #sub-footer-wrap a:focus,
        .accent_text_dark .site-footer a:focus {
            opacity: 0.5;
        }

        /**
        * Custom Fonts
        */

        body, button, input, select, textarea {
            font-family: <?php echo $GLOBALS['fb_family']; ?>;
        }

        #masthead h1 {
            font-family: <?php echo $GLOBALS['fm_family']; ?>;
            font-weight: <?php echo $GLOBALS['fm_weight']; ?>;
        }

        h1,
        h2,
        h3,
        .home .articles-featured em,
        .comment-navigation,
        .posts-navigation,
        .post-navigation {
            font-family: <?php echo $GLOBALS['fd_family']; ?>;
            font-weight: <?php echo $GLOBALS['fd_weight']; ?>;
        }

    </style>
    <?php
}
add_action( 'wp_head', 'pmp_megaphone_display_options' );

/**
 * Enqueue selected fonts
 */

function pmp_megaphone_custom_fonts(){

    // Checks for Masthead Font
    $font_masthead = get_theme_mod('font_masthead');

    switch ($font_masthead) {
        case "abril_fatface":
            $GLOBALS['fm_family']   = 'Abril Fatface, cursive, serif';
            $GLOBALS['fm_googleapi']   = 'Abril+Fatface';
            $GLOBALS['fm_weight']      = '400';
            break;
        case "oswald":
            $GLOBALS['fm_family']      = 'Oswald, sans-serif';
            $GLOBALS['fm_googleapi']   = 'Oswald:700';
            $GLOBALS['fm_weight']      = '700';
            break;
        case "playfair_display":
            $GLOBALS['fm_family']     = 'Playfair Display, serif';
            $GLOBALS['fm_googleapi']   = 'Playfair+Display:900';
            $GLOBALS['fm_weight']      = '900';
            break;
        case "pt_sans_narrow":
            $GLOBALS['fm_family']     = 'PT Sans Narrow, sans-serif';
            $GLOBALS['fm_googleapi']   = 'PT+Sans+Narrow:700';
            $GLOBALS['fm_weight']      = '700';
            break;
        case "pt_serif":
            $GLOBALS['fm_family']      = 'PT Serif, serif';
            $GLOBALS['fm_googleapi']   = 'PT+Serif:700';
            $GLOBALS['fm_weight']      = '700';
            break;
        case "source_sans_pro":
            $GLOBALS['fm_family']      = 'Source Sans Pro, sans-serif';
            $GLOBALS['fm_googleapi']   = 'Source+Sans+Pro:900';
            $GLOBALS['fm_weight']      = '900';
            break;
        default:
            $GLOBALS['fm_family']      = 'PT Serif, serif';
            $GLOBALS['fm_googleapi']   = 'PT+Serif:700';
            $GLOBALS['fm_weight']      = '700';
            break;
    }

    // Checks for Display Font
    $font_display = get_theme_mod('font_display');

    switch ($font_display) {
        case "abril_fatface":
            $GLOBALS['fd_family']   = 'Abril Fatface, serif';
            $GLOBALS['fd_googleapi']   = 'Abril+Fatface';
            $GLOBALS['fd_weight']      = '400';
            break;
        case "oswald":
            $GLOBALS['fd_family']      = 'Oswald, sans-serif';
            $GLOBALS['fd_googleapi']   = 'Oswald:700';
            $GLOBALS['fd_weight']      = '700';
            break;
        case "playfair_display":
            $GLOBALS['fd_family']     = 'Playfair Display, serif';
            $GLOBALS['fd_googleapi']   = 'Playfair+Display:900';
            $GLOBALS['fd_weight']      = '900';
            break;
        case "pt_sans_narrow":
            $GLOBALS['fd_family']     = 'PT Sans Narrow, sans-serif';
            $GLOBALS['fd_googleapi']   = 'PT+Sans+Narrow:700';
            $GLOBALS['fd_weight']      = '700';
            break;
        case "pt_serif":
            $GLOBALS['fd_family']      = 'PT Serif, serif';
            $GLOBALS['fd_googleapi']   = 'PT+Serif:700';
            $GLOBALS['fd_weight']      = '700';
            break;
        case "source_sans_pro":
            $GLOBALS['fd_family']      = 'Source Sans Pro, sans-serif';
            $GLOBALS['fd_googleapi']   = 'Source+Sans+Pro:900';
            $GLOBALS['fd_weight']      = '900';
            break;
        default:
            $GLOBALS['fd_family']      = 'PT Serif, serif';
            $GLOBALS['fd_googleapi']   = 'PT+Serif:700';
            $GLOBALS['fd_weight']      = '700';
            break;
    }

    // Checks for Body Font
    $font_body = get_theme_mod('font_body');

    switch ($font_body){
        case "alegreya":
            $GLOBALS['fb_family']       = 'Alegreya, serif';
            $GLOBALS['fb_googleapi']    = 'Alegreya:400,700,400italic,700italic';
            break;
        case "lato":
            $GLOBALS['fb_family']       = 'Lato, sans-serif';
            $GLOBALS['fb_googleapi']    = 'Lato:400,700,400italic,700italic';
            break;
        case "pt_serif":
            $GLOBALS['fb_family']       = 'PT Serif, sans-serif';
            $GLOBALS['fb_googleapi']    = 'Roboto:400,700italic,700,400italic';
            break;
        case "roboto":
            $GLOBALS['fb_family']       = 'Roboto, sans-serif';
            $GLOBALS['fb_googleapi']    = 'Roboto:400,700italic,700,400italic';
            break;
        case "source_sans_pro":
            $GLOBALS['fb_family']       = 'Source Sans Pro, sans-serif';
            $GLOBALS['fb_googleapi']    = 'Source+Sans+Pro:400,400italic,700italic,700';
            break;
        case "vollkorn":
            $GLOBALS['fb_family']       = 'Vollkorn, sans-serif';
            $GLOBALS['fb_googleapi']    = 'Vollkorn:400,700italic,700,400italic';
            break;
        default:
            $GLOBALS['fb_family']       = 'Lato, sans-serif';
            $GLOBALS['fb_googleapi']    = 'Lato:400,700,400italic,700italic';
            break;
    }

}

function pmp_megaphone_font_scripts() {
    pmp_megaphone_custom_fonts();
    $font_custom = $GLOBALS['fb_googleapi'] . '|' . $GLOBALS['fm_googleapi'] . '|' . $GLOBALS['fd_googleapi'];
    wp_enqueue_style( 'pmp_megaphone-google-fonts', '//fonts.googleapis.com/css?family=' . $font_custom, array(), '1.0' );

}

add_action( 'wp_enqueue_scripts', 'pmp_megaphone_font_scripts' );

/**
 * Append or Prepend selected fonts
 */

/* Add Custom Code to Head */
function pmp_megaphone_append_scripts(){
    $scripts_to_append = get_theme_mod('pmp_megaphone_custom_js_header');
    echo $scripts_to_append;
}
if(get_theme_mod('pmp_megaphone_custom_js_header')){
add_action( 'wp_head', 'pmp_megaphone_append_scripts', 999);
}

/* Add Custom Code to Footer */
function pmp_megaphone_prepend_scripts(){
    $scripts_to_prepend = get_theme_mod('pmp_megaphone_custom_js_footer');
    echo $scripts_to_prepend;
}
if(get_theme_mod('pmp_megaphone_custom_js_footer')){
    add_action( 'wp_footer', 'pmp_megaphone_prepend_scripts', 999 );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pmp_megaphone_customize_preview_js() {
	wp_enqueue_script( 'pmp_megaphone_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'pmp_megaphone_customize_preview_js' );
