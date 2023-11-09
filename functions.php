<?php

/**
 * Change Astra mobile menu icons.
 *
 * @param array $svg_codes SVG code from Astra asset.
 *
 * @return array
 */
function change_astra_mobile_menu_icon( $svg_codes ) {
	// Change the 1st menu svg icon in customizer.
	$svg_codes['menu'] = ''; // Place your inline svg code here.

	// Change the 2nd menu svg icon in customizer.
	$svg_codes['menu2'] = '';

	// Change the 3rd menu svg icon in customizer.
	$svg_codes['menu3'] = '';

	return $svg_codes;
}
add_filter( 'astra_svg_icons', 'change_astra_mobile_menu_icon' );
