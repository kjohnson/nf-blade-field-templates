<?php

/*
 * Plugin Name: Ninja Forms - Blade Field Templates
 * Description: Custom form field templates for the Blade Responsive Multifunctional Theme.
 */

add_filter( 'ninja_forms_field_template_file_paths', 'nf_blade_field_templates_custom_file_path' );
function nf_blade_field_templates_custom_file_path( $paths ){
    $paths[] = plugin_dir_path( __FILE__ ) . '/templates/';
    return $paths;
}
