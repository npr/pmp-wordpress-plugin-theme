<?php

//Theme options modified from onedesigns: https://www.onedesigns.com/tutorials/how-to-create-a-wordpress-theme-options-page

// Default options values
$sa_options = array(
	'featured_cat' => '',
	'featured_cat_2' => '',
);

if ( is_admin() ) : // Load only if we are viewing an admin page

function sa_register_settings() {
	// Register settings and call sanitation functions
	register_setting( 'sa_theme_options', 'sa_options', 'sa_validate_options' );
}

add_action( 'admin_init', 'sa_register_settings' );

// Store categories in array
$sa_categories[0] = array(
	'value' => 0,
	'label' => ''
);
$sa_cats = get_categories(); $i = 1;
foreach( $sa_cats as $sa_cat ) :
	$sa_categories[$sa_cat->cat_ID] = array(
		'value' => $sa_cat->cat_ID,
		'label' => $sa_cat->cat_name
	);
	$i++;
endforeach;

function sa_theme_options() {
	// Add theme options page to the addmin menu
	add_theme_page( 'Homepage Options', 'Homepage Options', 'edit_theme_options', 'theme_options', 'sa_theme_options_page' );
}

add_action( 'admin_menu', 'sa_theme_options' );

// Function to generate options page
function sa_theme_options_page() {
	global $sa_options, $sa_categories;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

	<div class="wrap">

	<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Homepage Options' ) . "</h2>";
	// This shows the page's name and an icon if one has been provided ?>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'sa_options', $sa_options ); ?>

	<?php settings_fields( 'sa_theme_options' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>

	<table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

	<tr valign="top"><th scope="row"><label for="featured_cat">Featured Category</label></th>
	<td>
	<select id="featured_cat" name="sa_options[featured_cat]">
	<?php
	foreach ( $sa_categories as $category ) :
		$label = $category['label'];
		$selected = '';
		if ( $category['value'] == $settings['featured_cat'] )
			$selected = 'selected="selected"';
		echo '<option style="padding-right: 10px;" value="' . esc_attr( $category['value'] ) . '" ' . $selected . '>' . $label . '</option>';
	endforeach;
	?>
	</select>
	</td>
	</tr>

	<tr valign="top"><th scope="row"><label for="featured_cat_2">Featured Category 2</label></th>
	<td>
	<select id="featured_cat_2" name="sa_options[featured_cat_2]">
	<?php
	foreach ( $sa_categories as $category ) :
		$label = $category['label'];
		$selected = '';
		if ( $category['value'] == $settings['featured_cat_2'] )
			$selected = 'selected="selected"';
		echo '<option style="padding-right: 10px;" value="' . esc_attr( $category['value'] ) . '" ' . $selected . '>' . $label . '</option>';
	endforeach;
	?>
	</select>
	</td>
	</tr>

	<tr valign="top"><th scope="row"><label for="featured_cat_3">Featured Category 3</label></th>
	<td>
	<select id="featured_cat_3" name="sa_options[featured_cat_3]">
	<?php
	foreach ( $sa_categories as $category ) :
		$label = $category['label'];
		$selected = '';
		if ( $category['value'] == $settings['featured_cat_3'] )
			$selected = 'selected="selected"';
		echo '<option style="padding-right: 10px;" value="' . esc_attr( $category['value'] ) . '" ' . $selected . '>' . $label . '</option>';
	endforeach;
	?>
	</select>
	</td>
	</tr>

	</table>

	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>

	</div>

	<?php
}

function sa_validate_options( $input ) {
	global $sa_options, $sa_categories;

	$settings = get_option( 'sa_options', $sa_options );

	// We select the previous value of the field, to restore it in case an invalid entry has been given
	$prev = $settings['featured_cat'];
	// We verify if the given value exists in the categories array
	if ( !array_key_exists( $input['featured_cat'], $sa_categories ) )
		$input['featured_cat'] = $prev;

	// We select the previous value of the field, to restore it in case an invalid entry has been given
	$prev = $settings['featured_cat_2'];
	// We verify if the given value exists in the categories array
	if ( !array_key_exists( $input['featured_cat_2'], $sa_categories ) )
		$input['featured_cat_2'] = $prev;

	// We select the previous value of the field, to restore it in case an invalid entry has been given
	$prev = $settings['featured_cat_3'];
	// We verify if the given value exists in the categories array
	if ( !array_key_exists( $input['featured_cat_3'], $sa_categories ) )
		$input['featured_cat_3'] = $prev;


	return $input;
}

endif;  // EndIf is_admin()