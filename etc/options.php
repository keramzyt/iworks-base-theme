<?php
/**
 * Generic iWorks Theme
 *
 * PHP version 5
 *
 * @category   WordPress_Themes
 * @package    WordPress
 * @subpackage Generic_iWorks_Theme
 * @author     Marcin Pietrzak <marcin@iworks.pl>
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version    3.0.0
 * @link       http://iworks.pl/
 *
 */

return array(
    'use_tabs' => true,
    'version'  => '0.0',
    'options'  => array(
        array(
            'name' => 'last_used_tab',
            'type'              => 'hidden',
            'autoload'          => false,
            'sanitize_callback' => 'intval',
            'default'           => 0
        ),
        /**
         * general
         */
        array(
            'label' => __( 'General settings', IWORKS_THEME_NAME ),
            'type' => 'heading',
        ),
        array(
            'name' => 'add_description',
            'type' => 'checkbox',
            'th' => __( 'Add description', IWORKS_THEME_NAME ),
            'sanitize_callback' => 'intval',
            'default' => 0,
            'description' => __( 'Turn on to add description after title.', IWORKS_THEME_NAME ),
        ),
        /**
         * content
         */
        array(
            'label' => __( 'Content settings', IWORKS_THEME_NAME ),
            'type' => 'heading',
        ),
        array(
            'name' => 'excerpt_length',
            'type' => 'number',
            'th' => __( 'Excerpt length', IWORKS_THEME_NAME ),
            'sanitize_callback' => 'intval',
            'default' => 20,
            'class' => 'small-text',
            'min' => 0,
        ),
        array(
            'name' => 'convert_attributes_to_data',
            'type' => 'checkbox',
            'th' => __( 'Image sizes', IWORKS_THEME_NAME ),
            'label' => __( 'Convert', IWORKS_THEME_NAME ),
            'sanitize_callback' => 'intval',
            'default' => 1,
            'description' => __( 'Turn on to convert "width" & "height" image attributes to "data-" attributes.', IWORKS_THEME_NAME ),
        ),
        /**
         * Social Media
         */
        array(
            'label' => __( 'Social Media', IWORKS_THEME_NAME ),
            'type' => 'heading',
        ),
        array(
            'label' => __( 'Facebook', IWORKS_THEME_NAME ),
            'type' => 'subheading',
        ),
    ),
);

