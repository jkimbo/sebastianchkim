<?php
/**
 * Quidus Customizer functionality
 */

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
 
require get_template_directory() . '/inc/customizer-sections.php';
 
global $font_choices;
$font_choices = 
        array(
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
            'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Raleway:400,100,200,300,500,600,700,800,900' => 'Raleway',
            'Droid Sans:400,700' => 'Droid Sans',
			'Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' => 'Titillium Web',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Oswald:400,700' => 'Oswald',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Exo:400,700,700italic,400italic' => 'Exo',
			'Exo+2:400,400italic,700,700italic' => 'Exo 2',
			'Alegreya+Sans+SC:400,400italic,700,700italic' => 'Alegreya Sans SC',
			'Alegreya+Sans:400,400italic,700,700italic' => 'Alegreya Sans',
			'Josefin+Slab:400,700,700italic,400italic' => 'Josefin Slab',
			'Merriweather+Sans:400,400italic,700,700italic' => 'Merriweather Sans',
			'Fira+Sans:400,400italic,700,700italic' => 'Fira Sans',
			'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
    );

global $social_networks;

$social_networks = array('Facebook', 'Twitter', 'Linkedin', 'Pinterest', 'Googleplus', 'Tumblr', 'Instagram', 'Flickr', 'Youtube', 'Stumbleupon', 'Dribbble', 'Codepen', 'Digg', 'Reddit', 'Github', 'Wordpress', 'Polldaddy', 'Skype', 'Twitch', 'Foursquare');

function quidus_customizer_controls( $controls ) {

	global $social_networks;
	global $font_choices;
	
	foreach ($social_networks as $network) {

		$controls[] = array(
			'type'        => 'text',
			'setting'     => 'author_' . lcfirst($network),
			'label'       => $network,
			'section'     => 'quidus_author_social',
			'default'     => __( 'Author&rsquo;s social network url' , 'quidus' ),
			'priority'    => 10,
		);
	}
	
	foreach ($social_networks as $network) {

		$controls[] = array(
			'type'        => 'text',
			'setting'     => 'my_' . lcfirst($network),
			'label'       => $network,
			'section'     => 'quidus_header_social',
			'default'     => __( 'Social Network Url' , 'quidus' ),
			'priority'    => 10,
		);
	}
	
	foreach ($social_networks as $network) {

		$controls[] = array(
			'type'        => 'text',
			'setting'     => 'footer_' . lcfirst($network),
			'label'       => $network,
			'section'     => 'quidus_footer_social',
			'default'     => __( 'Social Network Url' , 'quidus' ),
			'priority'    => 10,
		);
	}
	
	/* General Color Options */
	
	/* Background Color */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_color_background',
		'label'       => __( 'Background Color', 'quidus' ),
		'section'     => 'quidus_colors_general',
		'default'     => '#FCFCFC',
		'priority'    => 1
	);
	
	/* Main Color */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_color_main',
		'label'       => __( 'Main Color', 'quidus' ),
		'section'     => 'quidus_colors_general',
		'default'     => '#3f3f40',
		'priority'    => 2
	);
	
	/* Secondary Color */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_color_secondary',
		'label'       => __( 'Secondary Color', 'quidus' ),
		'section'     => 'quidus_colors_general',
		'default'     => '#515152',
		'priority'    => 3
	);
	
	/*  Color */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_color_special',
		'label'       => __( 'Special Color', 'quidus' ),
		'section'     => 'quidus_colors_general',
		'default'     => '#d5574d',
		'priority'    => 4
	);
	
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'enable_advanced_colors',
		'label'       => __( 'Enable Advanced Color Options', 'quidus' ),
		'description' => __( 'You can turn advanced color customization on if basic one isn\'t enough.', 'quidus' ),
		'section'     => 'quidus_colors_general',
		'default'     => 0,
		'priority'    => 5,
	);
	
	/* Advanced Color Options */
	
	/* Logo Colors */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_color_site_title',
		'label'       => __( 'Site Title Color', 'quidus' ),
		'section'     => 'quidus_logo_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_color_site_description',
		'label'       => __( 'Site Description Color', 'quidus' ),
		'section'     => 'quidus_logo_colors',
		'default'     => '#515152',
		'priority'    => 2
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_hover_color_site_title',
		'label'       => __( 'Site Title Hover Color', 'quidus' ),
		'section'     => 'quidus_logo_colors',
		'default'     => '#d5574d',
		'priority'    => 2
	);
	
	/* Social Icon Colors */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_social_icon_color',
		'label'       => __( 'Social Icon', 'quidus' ),
		'section'     => 'quidus_social_icon_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_social_icon_hover_color',
		'label'       => __( 'Social Icon Hover', 'quidus' ),
		'section'     => 'quidus_social_icon_colors',
		'default'     => '#d5574d',
		'priority'    => 2
	);
	
	/* Menu Colors */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'menu_item_color',
		'label'       => __( 'Menu Item', 'quidus' ),
		'section'     => 'quidus_menu_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'menu_item_description_color',
		'label'       => __( 'Menu Item Description', 'quidus' ),
		'section'     => 'quidus_menu_colors',
		'default'     => '#515152',
		'priority'    => 2
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'menu_background_color',
		'label'       => __( 'Menu Background', 'quidus' ),
		'section'     => 'quidus_menu_colors',
		'default'     => '#d5574d',
		'priority'    => 3
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'pagination_background_color',
		'label'       => __( 'Pagination Background', 'quidus' ),
		'section'     => 'quidus_menu_colors',
		'default'     => '#3f3f40',
		'priority'    => 4
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'pagination_background_hover_color',
		'label'       => __( 'Pagination Background Hover', 'quidus' ),
		'section'     => 'quidus_menu_colors',
		'default'     => '#d5574d',
		'priority'    => 5
	);
	
	/* Header Colors */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_h1_color',
		'label'       => __( 'H1 Heading', 'quidus' ),
		'section'     => 'quidus_header_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_h2_color',
		'label'       => __( 'H2 Heading', 'quidus' ),
		'section'     => 'quidus_header_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_h3_color',
		'label'       => __( 'H3 Heading', 'quidus' ),
		'section'     => 'quidus_header_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_h4_color',
		'label'       => __( 'H4 Heading', 'quidus' ),
		'section'     => 'quidus_header_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_h5_color',
		'label'       => __( 'H5 Heading', 'quidus' ),
		'section'     => 'quidus_header_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'quidus_h6_color',
		'label'       => __( 'H6 Heading', 'quidus' ),
		'section'     => 'quidus_header_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	/* Button Colors */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'button_background_color',
		'label'       => __( 'Button Background', 'quidus' ),
		'section'     => 'quidus_button_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'button_background_hover_color',
		'label'       => __( 'Button Background Hover', 'quidus' ),
		'section'     => 'quidus_button_colors',
		'default'     => '#d5574d',
		'priority'    => 1
	);
	
	/* Paragraph Colors */
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'body_text_color',
		'label'       => __( 'Body Text', 'quidus' ),
		'section'     => 'quidus_post_colors',
		'default'     => '#515152',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'list_item_color',
		'label'       => __( 'List Item', 'quidus' ),
		'section'     => 'quidus_element_colors',
		'default'     => '#515152',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'post_meta_color',
		'label'       => __( 'Post Meta', 'quidus' ),
		'section'     => 'quidus_post_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'post_meta_icon_color',
		'label'       => __( 'Post Meta Icon', 'quidus' ),
		'section'     => 'quidus_post_colors',
		'default'     => '#515152',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'post_format_icon_color',
		'label'       => __( 'Post Format Icon', 'quidus' ),
		'section'     => 'quidus_post_colors',
		'default'     => '#515152',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'post_format_icon_background_color',
		'label'       => __( 'Post Format Icon Background', 'quidus' ),
		'section'     => 'quidus_post_colors',
		'default'     => '#d5574d',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'table_header_color',
		'label'       => __( 'Table Header', 'quidus' ),
		'section'     => 'quidus_element_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'table_item_color',
		'label'       => __( 'Table Item', 'quidus' ),
		'section'     => 'quidus_element_colors',
		'default'     => '#515152',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'blockquote_border_color',
		'label'       => __( 'Blockquote Border', 'quidus' ),
		'section'     => 'quidus_element_colors',
		'default'     => '#d5574d',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'definition_list_title_color',
		'label'       => __( 'Definition List Title', 'quidus' ),
		'section'     => 'quidus_element_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'address_color',
		'label'       => __( 'Address', 'quidus' ),
		'section'     => 'quidus_element_colors',
		'default'     => '#515152',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'code_color',
		'label'       => __( 'Code', 'quidus' ),
		'section'     => 'quidus_element_colors',
		'default'     => '#515152',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'post_pagination_background_color',
		'label'       => __( 'Post Pagination Background', 'quidus' ),
		'section'     => 'quidus_post_colors',
		'default'     => '#3f3f40',
		'priority'    => 1
	);
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'post_pagination_background_hover_color',
		'label'       => __( 'Post Pagination Background Hover', 'quidus' ),
		'section'     => 'quidus_post_colors',
		'default'     => '#d5574d',
		'priority'    => 1
	);
	
	/* General Font Family Options */
	
	/* Body Font Family */
	
	$controls[] = array(
		'type'        => 'select',
		'setting'     => 'quidus_body_font',
		'label'       => __( 'Body Font Family', 'quidus' ),
		'description' => __( 'Changes font of all non-header elements.', 'quidus'),
		'section'     => 'quidus_font_family_general',
		'default'     => 'Source Sans Pro:400,700,400italic,700italic',
		'priority'    => 1,
		'choices'     => $font_choices
	);
	
	/* Header Font Family */
	
	$controls[] = array(
		'type'        => 'select',
		'setting'     => 'quidus_header_font',
		'label'       => __( 'Headers Font Family', 'quidus' ),
		'description' => __( 'Changes font of all the header elements.', 'quidus'),
		'section'     => 'quidus_font_family_general',
		'default'     => 'Open Sans:400italic,700italic,400,700',
		'priority'    => 2,
		'choices'     => $font_choices
	);
	
	/* Layout */
	
	/* Sidebar width desktop */
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_sidebar_width_desktop',
		'label'       => __( 'Sidebar Width (desktop)', 'quidus' ),
		'description' => __( 'Changes width of the sidebar for screen sizes that are higher than 955px', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => 25,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 25,
			'max'  => 30,
			'step' => 1
		),
	);
	
	/* Content width desktop */
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_content_width_desktop',
		'label'       => __( 'Content Width (desktop)', 'quidus' ),
		'description' => __( 'Changes width of the content for screen sizes that are higher than 955px', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => 75,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 70,
			'max'  => 75,
			'step' => 1
		),
	);
	
	/* Logo Upload */
	
	$controls[] = array(
		'type'        => 'upload',
		'setting'     => 'quidus_logo',
		'label'       => __( 'Logo Upload', 'quidus' ),
		'description' => __( 'Recommended logo size is 340x136px.', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => '',
		'priority'    => 10,
	);
	
	/* Favicon Upload */
	
	$controls[] = array(
		'type'        => 'upload',
		'setting'     => 'quidus_site_favicon',
		'label'       => __( 'Favicon Upload', 'quidus' ),
		'description' => __( 'Recommended favicon size is 16x16px.', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => '',
		'priority'    => 10,
	);
	
	/* Excerpt Length */
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_excerpt_length',
		'label'       => __( 'Excerpt Length', 'quidus' ),
		'description' => __( 'Adjust length of excerpt', 'quidus' ),
		'section'     => 'quidus_excerpt',
		'default'     => 55,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 20,
			'max'  => 85,
			'step' => 1
		),
	);
	
	/* Font Sizes */
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_h1_size',
		'label'       => __( 'H1 Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_site_title_size',
		'label'       => __( 'Site Title Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_h2_size',
		'label'       => __( 'H2 Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_widget_title_size',
		'label'       => __( 'Widget Title Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_h3_size',
		'label'       => __( 'H3 Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_h4_size',
		'label'       => __( 'H4 Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_h5_size',
		'label'       => __( 'H5 Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_h6_size',
		'label'       => __( 'H6 Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_content_meta_size',
		'label'       => __( 'Content Meta Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_content_paragraph_size',
		'label'       => __( 'Content Paragraph Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_site_description_size',
		'label'       => __( 'Site Description Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_list_font_size',
		'label'       => __( 'Unordered & Ordered Lists Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_table_font_size',
		'label'       => __( 'Table & Calendar Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_definition_font_size',
		'label'       => __( 'Definition List Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_address_font_size',
		'label'       => __( 'Address Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_pre_font_size',
		'label'       => __( 'Code Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_enable_footer_widgets',
		'label'       => __( 'Enable Footer Widgets', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => 0,
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'radio-image',
		'setting'     => 'quidus_footer_widgets_count',
		'label'       => __( 'Footer Widget Layout', 'quidus' ),
		'description' => __( 'Choose how many widgets you want to appear in footer.', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => 'threecolumn',
		'priority'    => 10,
		'choices'     => array(
			'threecolumn' => get_template_directory_uri() . '/img/threecolumn.png',
			'twocolumn' => get_template_directory_uri() . '/img/twocolumn.png',
		),
	);
	
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_disable_entry_meta_single',
		'label'       => __( 'Hide Entry Meta On Single Posts', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => 0,
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_disable_featured_image_home',
		'label'       => __( 'Hide Featured Image On Home Page', 'quidus' ),
		'description' => __( 'Faster home page loading speed improves on-page SEO but may hurt aesthetics.', 'quidus'),
		'section'     => 'quidus_layout',
		'default'     => 0,
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_disable_featured_image_search',
		'label'       => __( 'Hide Featured Image On Search Page', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => 0,
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_website_max_width',
		'label'       => __( 'Website Max Width', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => 1403,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 1180,
			'max'  => 1403,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_logo_max_width_desktop',
		'label'       => __( 'Logo Max Width', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 50,
			'max'  => 100,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_logo_max_width_tablet_large',
		'label'       => __( 'Logo Max Width (tablet large)', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => 50,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 60,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_logo_max_width_tablet_small',
		'label'       => __( 'Logo Max Width (tablet small)', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => 50,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 50,
			'max'  => 75,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_logo_max_width_mobile',
		'label'       => __( 'Logo Max Width (mobile)', 'quidus' ),
		'section'     => 'title_tagline',
		'default'     => 60,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 50,
			'max'  => 60,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_footer_font_size',
		'label'       => __( 'Footer Text Font Size', 'quidus' ),
		'section'     => 'quidus_font_size_advanced',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	);

	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_body_font_custom_enable',
		'label'       => __( 'Enable Custom Body Font', 'quidus' ),
		'section'     => 'quidus_font_family_general',
		'default'     => 0,
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'text',
		'setting'     => 'quidus_body_font_custom',
		'label'       => __( 'Body Font (Custom)', 'quidus' ),
		'section'     => 'quidus_font_family_general',
		'default'     => 'Source Sans Pro:400,700,400italic,700italic',
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'text',
		'setting'     => 'quidus_body_font_family_custom',
		'label'       => __( 'Body Font Family (Custom)', 'quidus' ),
		'section'     => 'quidus_font_family_general',
		'default'     => 'Source Sans Pro, sans-serif',
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_header_font_custom_enable',
		'label'       => __( 'Enable Custom Header Font', 'quidus' ),
		'section'     => 'quidus_font_family_general',
		'default'     => 0,
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'text',
		'setting'     => 'quidus_header_font_custom',
		'label'       => __( 'Headers Font (Custom)', 'quidus' ),
		'section'     => 'quidus_font_family_general',
		'default'     => 'Open Sans:400italic,700italic,400,700',
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'text',
		'setting'     => 'quidus_header_font_family_custom',
		'label'       => __( 'Headers Font Family (Custom)', 'quidus' ),
		'section'     => 'quidus_font_family_general',
		'default'     => 'Open Sans, sans-serif',
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'quidus_site_distance_from_left',
		'label'       => __( 'Site Distance From Left (desktop/%)', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => 5,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 5,
			'max'  => 13,
			'step' => 1
		),
	);
	
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_switch_to_centered_layout',
		'label'       => __( 'Switch To Centered Site Layout', 'quidus' ),
		'description' => __( 'Distance from right and left sides will be the same.', 'quidus'),
		'section'     => 'quidus_layout',
		'default'     => 0,
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_post_title_align_left',
		'label'       => __( 'Post Title & Meta Align Left', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => true,
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_widget_title_align_left',
		'label'       => __( 'Widget Title Align Left', 'quidus' ),
		'section'     => 'quidus_layout',
		'default'     => false,
		'priority'    => 10,
	);

    return $controls;
}
add_filter( 'kirki/fields', 'quidus_customizer_controls' );

function quidus_css_customizer() {
	global $font_choices;
	$header_font = esc_html(get_theme_mod('quidus_header_font'));
	$body_font = esc_html(get_theme_mod('quidus_body_font')); 
	$primary_body_font = 'Source Sans Pro, sans-serif';
	$primary_header_font = 'Open Sans, sans-serif';
?>

<style type="text/css">

<?php 
$main_color = "#3f3f40";
$secondary_color = "#515152";
$special_color = "#d5574d"; 
$white_color = "#fcfcfc";
?>


body {
background-color: <?php if ( get_theme_mod('quidus_color_background') == '' ) : echo esc_attr($white_color); else : esc_attr_e(get_theme_mod('quidus_color_background')); endif; ?> !important;
}


.dropcap,
h1,
h2,
h3,
h4,
h5,
h6,
blockquote,
blockquote cite,
blockquote small,
.post-password-form label,
a,
.main-navigation a:hover,
.main-navigation a:focus,
.author-social,
.author-social span,
.my-social span,
.secondary-toggle:before,
.widget-title,
.widget_calendar tbody a,
.widget a,
.comment-author,
.comment-form label,
.quidus_content_link,
.quidus_content_link:after,
.comment-metadata a,
.pingback .edit-link a,
.comment-list .reply a,
.entry-footer a,
.image-navigation a,
.comment-navigation a,
.posted-on a,
.byline a,
.cat-links a,
.tags-links a,
.comments-link a,
.entry-format a,
.full-size-link a,
th,
dt
{
color:<?php if ( get_theme_mod('quidus_color_main') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_color_main')); endif; ?>;
}

.main-navigation li,
.dropdown-toggle:after,
.footer-link
{
color:<?php if ( get_theme_mod('quidus_color_main') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_color_main')); endif; ?> !important;
}

.entry-content .quidus-link-wrapper {
border-left:3px solid <?php if ( get_theme_mod('quidus_color_main') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_color_main')); endif; ?>;
}

button,
input[type="button"],
input[type="reset"],
input[type="submit"],
.pagination,
.comment-list .reply a,
.pagination,
.page-links a,
.widget_calendar tbody a,
.tagcloud a
{
	background-color: <?php if ( get_theme_mod('quidus_color_main') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_color_main')); endif; ?>;
}

.page-links a,
.comment-list .reply a,
.search-submit {
background-color: <?php if ( get_theme_mod('quidus_color_main') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_color_main')); endif; ?> !important;
}

body,
button,
input,
select,
textarea,
input,
textarea,
.post-navigation .meta-nav,
.image-navigation,
.comment-navigation,
.widget,
.author-heading,
.entry-footer,
.taxonomy-description,
.page-links > .page-links-title,
.entry-caption,
.no-comments,
.comment-notes,
.comment-awaiting-moderation,
.logged-in-as,
.form-allowed-tags,
.wp-caption-text,
.gallery-caption,
.site-info,
.widget input[type="text"],
.widget input[type="email"],
.widget input[type="url"],
.widget input[type="password"],
.widget input[type="search"],
.widget textarea,
.site-description,
.site-info a,
.site-info a:hover,
.posted-on:before, 
.byline:before,
.cat-links:before,
.tags-links:before,
.comments-link:before,
.entry-format:before,
.edit-link:before,
.full-size-link:before,
.post-mark,
.video-mark,
.main-navigation .menu-item-description,
dd
{
	color: <?php if ( get_theme_mod('quidus_color_secondary') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('quidus_color_secondary')); endif; ?>;
}

.entry-content p,
.site-description,
::-webkit-input-placeholder,
:-moz-placeholder,
::-moz-placeholder,
:-ms-input-placeholder,
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
textarea:focus,
pre 

{
	color: <?php if ( get_theme_mod('quidus_color_secondary') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('quidus_color_secondary')); endif; ?> !important;
}

.highlight,
.quidus-content-quote-icon
a:hover,
a:focus,
.posted-on a:hover,
.posted-on span:hover,
.byline a:hover,
.cat-links a:hover,
.tags-links a:hover,
.comments-link a:hover,
.entry-format a:hover,
.full-size-link a:hover,
.edit-link a:hover,
.bypostauthor > article .fn,
.comment-metadata a:hover,
.comment-metadata a:focus,
.pingback .edit-link a:hover,
.pingback .edit-link a:focus,
.widget a:hover,
.entry-content a:hover,
.site-title a:hover,
.author-social span:hover,
.footer-social span:hover,
.my-social span:hover
{
	color: <?php if ( get_theme_mod('quidus_color_special') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('quidus_color_special')); endif; ?>;
}

button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover,
button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
.main-navigation ul,
.main-navigation li,
.pagination:hover,
.widget_calendar tbody a:hover,
.widget_calendar tbody a:focus,
.video-mark,
.post-mark,
.comment-list .reply a:hover,
.tagcloud a:hover
{
	background:<?php if ( get_theme_mod('quidus_color_special') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('quidus_color_special')); endif; ?>;
}

.page-links a:hover,
.page-links a:focus,
.comment-list .reply a:hover,
.search-submit:hover {
background:<?php if ( get_theme_mod('quidus_color_special') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('quidus_color_special')); endif; ?> !important;
}

blockquote 
{
	border-left:3px solid <?php if ( get_theme_mod('quidus_color_special') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('quidus_color_special')); endif; ?>;
}

.image-navigation .nav-previous:not(:empty) a:hover,
.image-navigation .nav-next:not(:empty) a:hover,
.footer-link:hover,
h1 a:hover,
h2 a:hover,
h3 a:hover,
h4 a:hover,
h5 a:hover,
h6 a:hover,
.sticky-post {
	color:<?php if ( get_theme_mod('quidus_color_special') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('quidus_color_special')); endif; ?> !important;
}

.widget-title {
	border-bottom:3px solid <?php if ( get_theme_mod('quidus_color_special') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('quidus_color_special')); endif; ?>;
}

<?php if ( get_theme_mod('enable_advanced_colors') == 1) : ?>

.site-title a {
color: <?php if ( get_theme_mod('quidus_color_site_title') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_color_site_title')); endif; ?>;
}

.site-title a:hover {
color:<?php if ( get_theme_mod('quidus_hover_color_site_title') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('quidus_hover_color_site_title')); endif; ?> !important;
}

.site-description {
color:<?php if ( get_theme_mod('quidus_color_site_description') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('quidus_color_site_description')); endif; ?>;
}

.author-social span,
.my-social span,
.footer-social span {
color:<?php if ( get_theme_mod('quidus_social_icon_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_social_icon_color')); endif; ?>;
}

.author-social span:hover,
.my-social span:hover,
.footer-social span:hover {
color:<?php if ( get_theme_mod('quidus_social_icon_hover_color') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('quidus_social_icon_hover_color')); endif; ?>;
}

.main-navigation li a {
color:<?php if ( get_theme_mod('menu_item_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('menu_item_color')); endif; ?> !important;
}
	
.main-navigation .menu-item-description {
color:<?php if ( get_theme_mod('menu_item_description_color') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('menu_item_description_color')); endif; ?>;
}

.main-navigation ul,
.main-navigation li {
background-color:<?php if ( get_theme_mod('menu_background_color') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('menu_background_color')); endif; ?>;
}
	
.pagination {
background-color:<?php if ( get_theme_mod('pagination_background_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('pagination_background_color')); endif; ?>;
}

.pagination:hover {
background-color:<?php if ( get_theme_mod('pagination_background_hover_color') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('pagination_background_hover_color')); endif; ?>;
}

button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
background-color:<?php if ( get_theme_mod('button_background_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('button_background_color')); endif; ?> ;
}

.comment-list .reply a,
.search-submit {
background-color:<?php if ( get_theme_mod('button_background_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('button_background_color')); endif; ?> !important;
}

button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover,
button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
#searchsubmit:hover {
background-color:<?php if ( get_theme_mod('button_background_hover_color') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('button_background_hover_color')); endif; ?> ;
}

.comment-list .reply a:hover,
.search-submit:hover {
background-color:<?php if ( get_theme_mod('button_background_hover_color') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('button_background_hover_color')); endif; ?> !important;
}

.entry-title a,
.entry-title, .entry-content h1 a, 
.entry-summary h1 a, .page-content h1 a, 
.comment-content h1 a,
h1 {
color:<?php if ( get_theme_mod('quidus_h1_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_h1_color')); endif; ?>;
}

h2,
.widget-title {
color:<?php if ( get_theme_mod('quidus_h2_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_h2_color')); endif; ?>;
}

h3 {
color:<?php if ( get_theme_mod('quidus_h3_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_h3_color')); endif; ?>;
}

h4 {
color:<?php if ( get_theme_mod('quidus_h4_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_h4_color')); endif; ?>;
}

h5 {
color:<?php if ( get_theme_mod('quidus_h5_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_h5_color')); endif; ?>;
}

h6 {
color:<?php if ( get_theme_mod('quidus_h6_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('quidus_h6_color')); endif; ?>;
}

.entry-content p {
color:<?php if ( get_theme_mod('body_text_color') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('body_text_color')); endif; ?>;
}

.posted-on a,
.byline a,
.cat-links a,
.tags-links a,
.comments-link a,
.entry-format a,
.full-size-link a {
color: <?php if ( get_theme_mod('post_meta_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('post_meta_color')); endif; ?>;
}

.posted-on:before, 
.byline:before,
.cat-links:before,
.tags-links:before,
.comments-link:before,
.entry-format:before,
.edit-link:before,
.full-size-link:before {
color:<?php if ( get_theme_mod('post_meta_icon_color') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('post_meta_icon_color')); endif; ?>;
}

.post-mark,
.video-mark {
color:<?php if ( get_theme_mod('post_format_icon_color') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('post_format_icon_color')); endif; ?>;
background-color:<?php if ( get_theme_mod('post_format_icon_background_color') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('post_format_icon_background_color')); endif; ?>;
}

.page-links a {
background:<?php if ( get_theme_mod('post_pagination_background_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('post_pagination_background_color')); endif; ?> !important;
}

.page-links a:hover,
.page-links a:focus {
background:<?php if ( get_theme_mod('post_pagination_background_hover_color') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('post_pagination_background_hover_color')); endif; ?> !important;
}

ul, ol, .widget ul a, .widget ol a {
color:<?php if ( get_theme_mod('list_item_color') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('list_item_color')); endif; ?>;
}

th {
color: <?php if ( get_theme_mod('table_header_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('table_header_color')); endif; ?>;
}

td {
color:<?php if ( get_theme_mod('table_item_color') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('table_item_color')); endif; ?>;
}
	
blockquote {
border-color: <?php if ( get_theme_mod('blockquote_border_color') == '' ) : echo esc_attr($special_color); else : esc_attr_e(get_theme_mod('blockquote_border_color')); endif; ?>;
}

dt {
color:<?php if ( get_theme_mod('definition_list_title_color') == '' ) : echo esc_attr($main_color); else : esc_attr_e(get_theme_mod('definition_list_title_color')); endif; ?>
}

address {
color:<?php if ( get_theme_mod('address_color') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('address_color')); endif; ?>;
}

pre {
color:<?php if ( get_theme_mod('code_color') == '' ) : echo esc_attr($secondary_color); else : esc_attr_e(get_theme_mod('code_color')); endif; ?> !important;
}

<?php endif; ?>

h1,
h2,
h3,
h4,
h5,
h6,
.comment-form label,
dt,
th,
.comment-navigation,
.comment-author,
.sticky-post {
font-family: <?php if ( get_theme_mod('quidus_header_font_custom_enable') == 1) : if ( get_theme_mod('quidus_header_font_family_custom') == '' ) : echo esc_attr($primary_header_font) . '!important;'; else : esc_attr_e(get_theme_mod('quidus_header_font_family_custom')) . '!important;'; endif; else : esc_attr_e($font_choices[$header_font]); ?>, sans-serif !important;<?php endif; ?>
}

body,
button,
input,
select,
textarea {
font-family: <?php if ( get_theme_mod('quidus_body_font_custom_enable') == 1) : if ( get_theme_mod('quidus_body_font_family_custom') == '' ) : echo esc_attr($primary_body_font) . '!important;'; else : esc_attr_e(get_theme_mod('quidus_body_font_family_custom')) . '!important;'; endif; else : esc_attr_e($font_choices[$body_font]); ?>, sans-serif !important; <?php endif; ?>
}

	
@media screen and (min-width: 955px) {

.sidebar {
	width: <?php esc_attr_e(get_theme_mod('quidus_sidebar_width_desktop')); ?>% !important;
}

.site-content {
	width: <?php esc_attr_e(get_theme_mod('quidus_content_width_desktop')); ?>% !important;
	margin-left: <?php esc_attr_e(get_theme_mod('quidus_sidebar_width_desktop')); ?>% !important;
}

}
.site { max-width: <?php if ( get_theme_mod('quidus_website_max_width') != '' ) : esc_attr_e((get_theme_mod('quidus_website_max_width'))); ?>px <?php endif; ?>; }
.format-aside .entry-title,
.format-image .entry-title,
.format-video .entry-title,
.format-quote .entry-title, 
.format-gallery .entry-title,
.format-link .entry-title,
.format-audio .entry-title,
.entry-title,
.entry-content h1,
.entry-summary h1,
.page-content h1,
.comment-content h1 {
font-size: <?php if ( get_theme_mod('quidus_h1_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h1_size')) * 0.039)); ?>rem <?php endif; ?>;
}

.site-title {
font-size: <?php if ( get_theme_mod('quidus_site_title_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_site_title_size')) * 0.039)); ?>rem <?php endif; ?>;
}

.site-description {
font-size: <?php if ( get_theme_mod('quidus_site_description_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_site_description_size')) * 0.016)); ?>rem <?php endif; ?>;
}

.site-info {
font-size: <?php if ( get_theme_mod('quidus_footer_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_footer_font_size')) * 0.016)); ?>rem <?php endif; ?>;
}

.entry-content h2,
.entry-summary h2,
.page-content h2,
.comment-content h2 {
font-size: <?php if ( get_theme_mod('quidus_h2_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h2_size')) * 0.032)); ?>rem <?php endif; ?>;
}

.widget-title {
font-size: <?php if ( get_theme_mod('quidus_widget_title_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_widget_title_size')) * 0.016)); ?>rem <?php endif; ?>;
}

.entry-content h3,
.entry-summary h3,
.page-content h3,
.comment-content h3 {
font-size: <?php if ( get_theme_mod('quidus_h3_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h3_size')) * 0.027)); ?>rem <?php endif; ?>;
}

.entry-content h4,
.entry-summary h4,
.page-content h4,
.comment-content h4 {
font-size: <?php if ( get_theme_mod('quidus_h4_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h4_size')) * 0.022)); ?>rem <?php endif; ?>;
}

.entry-content h5,
.entry-summary h5,
.page-content h5,
.comment-content h5 {
font-size: <?php if ( get_theme_mod('quidus_h5_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h5_size')) * 0.019)); ?>rem <?php endif; ?>;
}

.entry-content h6,
.entry-summary h6,
.page-content h6,
.comment-content h6 {
font-size: <?php if ( get_theme_mod('quidus_h6_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h6_size')) * 0.017)); ?>rem <?php endif; ?>;
}

.entry-content p {
font-size: <?php if ( get_theme_mod('quidus_content_paragraph_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_content_paragraph_size')) * 0.016)); ?>rem <?php endif; ?>;
}

.posted-on,
.byline,
.cat-links,
.tags-links, 
.comments-link, 
.entry-format, 
.full-size-link,
.edit-link,
.posted-on:before, 
.byline:before, 
.cat-links:before, 
.tags-links:before, 
.comments-link:before, 
.entry-format:before, 
.edit-link:before, 
.full-size-link:before {
font-size: <?php if ( get_theme_mod('quidus_content_meta_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_content_meta_size')) * 0.016)); ?>rem <?php endif; ?>;
}

.posted-on:before, 
.byline:before, 
.cat-links:before, 
.tags-links:before, 
.comments-link:before, 
.entry-format:before, 
.edit-link:before, 
.full-size-link:before {
top: <?php if ( get_theme_mod('quidus_content_meta_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_content_meta_size')) * 0.04)); ?>px <?php endif; ?>;
}


ul, ol {
font-size: <?php if ( get_theme_mod('quidus_list_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_list_font_size')) * 0.016)); ?>rem <?php endif; ?>;
}

table {
font-size: <?php if ( get_theme_mod('quidus_table_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_table_font_size')) * 0.016)); ?>rem <?php endif; ?>;
}

dd, dt {
font-size: <?php if ( get_theme_mod('quidus_definition_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_definition_font_size')) * 0.016)); ?>rem <?php endif; ?>;
}

address {
font-size: <?php if ( get_theme_mod('quidus_address_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_address_font_size')) * 0.016)); ?>rem <?php endif; ?>;
}

pre {
font-size: <?php if ( get_theme_mod('quidus_pre_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_pre_font_size')) * 0.016)); ?>rem <?php endif; ?>;
}

@media screen and (min-width: 480px) and (max-width: 768px) {

.format-aside .entry-title,
.format-image .entry-title,
.format-video .entry-title,
.format-quote .entry-title, 
.format-gallery .entry-title,
.format-link .entry-title,
.format-audio .entry-title,
.entry-title,
.entry-content h1,
.entry-summary h1,
.page-content h1,
.comment-content h1 {
font-size: <?php if ( get_theme_mod('quidus_h1_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h1_size')) * 0.032)); ?>rem <?php endif; ?>;
}

.entry-content h2,
.entry-summary h2,
.page-content h2,
.comment-content h2 {
font-size: <?php if ( get_theme_mod('quidus_h2_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h2_size')) * 0.027)); ?>rem <?php endif; ?>;
}

.entry-content h3,
.entry-summary h3,
.page-content h3,
.comment-content h3 {
font-size: <?php if ( get_theme_mod('quidus_h3_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h3_size')) * 0.022)); ?>rem <?php endif; ?>;
}

.entry-content h4,
.entry-summary h4,
.page-content h4,
.comment-content h4 {
font-size: <?php if ( get_theme_mod('quidus_h4_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h4_size')) * 0.019)); ?>rem <?php endif; ?>;
}

.entry-content h5,
.entry-summary h5,
.page-content h5,
.comment-content h5 {
font-size: <?php if ( get_theme_mod('quidus_h5_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h5_size')) * 0.017)); ?>rem <?php endif; ?>;
}

.entry-content h6,
.entry-summary h6,
.page-content h6,
.comment-content h6 {
font-size: <?php if ( get_theme_mod('quidus_h6_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h6_size')) * 0.015)); ?>rem <?php endif; ?>;
}

}

@media screen and (max-width: 480px) {

.format-aside .entry-title,
.format-image .entry-title,
.format-video .entry-title,
.format-quote .entry-title, 
.format-gallery .entry-title,
.format-link .entry-title,
.format-audio .entry-title,
.entry-title,
.entry-content h1,
.entry-summary h1,
.page-content h1,
.comment-content h1 {
font-size: <?php if ( get_theme_mod('quidus_h1_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h1_size')) * 0.027)); ?>rem <?php endif; ?>;
}


.site-title {
font-size: <?php if ( get_theme_mod('quidus_site_title_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_site_title_size')) * 0.027)); ?>rem <?php endif; ?>;
}

.site-description {
font-size: <?php if ( get_theme_mod('quidus_site_description_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_site_description_size')) * 0.014)); ?>rem <?php endif; ?>;
}

.site-info {
font-size: <?php if ( get_theme_mod('quidus_footer_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_footer_font_size')) * 0.014)); ?>rem <?php endif; ?>;
}

.entry-content h2,
.entry-summary h2,
.page-content h2,
.comment-content h2 {
font-size: <?php if ( get_theme_mod('quidus_h2_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h2_size')) * 0.022)); ?>rem <?php endif; ?>;
}

.widget-title {
font-size: <?php if ( get_theme_mod('quidus_widget_title_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_widget_title_size')) * 0.014)); ?>rem <?php endif; ?>;
}

.entry-content h3,
.entry-summary h3,
.page-content h3,
.comment-content h3 {
font-size: <?php if ( get_theme_mod('quidus_h3_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h3_size')) * 0.019)); ?>rem <?php endif; ?>;
}

.entry-content h4,
.entry-summary h4,
.page-content h4,
.comment-content h4 {
font-size: <?php if ( get_theme_mod('quidus_h4_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h4_size')) * 0.018)); ?>rem <?php endif; ?>;
}

.entry-content h5,
.entry-summary h5,
.page-content h5,
.comment-content h5 {
font-size: <?php if ( get_theme_mod('quidus_h5_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h5_size')) * 0.017)); ?>rem <?php endif; ?>;
}

.entry-content h6,
.entry-summary h6,
.page-content h6,
.comment-content h6 {
font-size: <?php if ( get_theme_mod('quidus_h6_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_h6_size')) * 0.015)); ?>rem <?php endif; ?>;
}

.entry-content p {
font-size: <?php if ( get_theme_mod('quidus_content_paragraph_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_content_paragraph_size')) * 0.014)); ?>rem <?php endif; ?>;
}

.posted-on,
.byline,
.cat-links,
.tags-links, 
.comments-link, 
.entry-format, 
.full-size-link,
.edit-link {
font-size: <?php if ( get_theme_mod('quidus_content_meta_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_content_meta_size')) * 0.014)); ?>rem <?php endif; ?>;
}

ul, ol {
font-size: <?php if ( get_theme_mod('quidus_list_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_list_font_size')) * 0.014)); ?>rem <?php endif; ?>;
}

table {
font-size: <?php if ( get_theme_mod('quidus_table_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_table_font_size')) * 0.014)); ?>rem <?php endif; ?>;
}

dd, dt {
font-size: <?php if ( get_theme_mod('quidus_definition_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_definition_font_size')) * 0.014)); ?>rem <?php endif; ?>;
}

address {
font-size: <?php if ( get_theme_mod('quidus_address_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_address_font_size')) * 0.014)); ?>rem <?php endif; ?>;
}

pre {
font-size: <?php if ( get_theme_mod('quidus_pre_font_size') != '' ) : esc_attr_e((string)(intval(get_theme_mod('quidus_pre_font_size')) * 0.014)); ?>rem <?php endif; ?>;
}

}

<?php if ( get_theme_mod('quidus_enable_footer_widgets') == 0 ) : ?>

.footer-widgets-wrapper {
margin-top:0;
}

<?php endif; ?>

<?php if ( get_theme_mod('quidus_footer_widgets_count') == 'twocolumn' and get_theme_mod('quidus_enable_footer_widgets') == 1) : ?>

.footer-widget-one {
width:50%; 
float:left;
}

.footer-widget-two {
width:50%; 
float:right;
}

.footer-widgets-wrapper {
margin: 7.552% 6.9% 0;
}

.footer-widgets-wrapper .widget {
padding:0 3.252% !important;
}

.footer-widgets-wrapper .widget-area {
padding:0 !important;
margin:0 !important;
}

@media screen and (min-width: 768px) and (max-width: 955px) {

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}
	
	.footer-widgets-wrapper {
	margin:0 12.052% 10%;
	}
	
	.footer-widgets-wrapper .widget-area {
	margin: 0 auto 10%;
	}

	.footer-widget-one .widget, .footer-widget-two .widget, .footer-widget-three .widget {
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		hyphens: auto;
		margin: 0 auto 24.13%;
		padding: 0 !important;
		width: 85%;
		word-wrap: break-word;
	}
}

@media screen and (min-width: 480px) and (max-width: 768px) {

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}
	
	.footer-widgets-wrapper {
	margin:0 5.2% 10%;
	}
	
	.footer-widgets-wrapper .widget-area {
	margin: 0 auto 0;
	}

	.footer-widget-one .widget, .footer-widget-two .widget, .footer-widget-three .widget {
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		hyphens: auto;
		margin: 0 auto 7.633%;
		padding: 0 !important;
		width: 70%;
		word-wrap: break-word;
	}
	
	.footer-widget-one, .footer-widget-two, .footer-widget-three {
	width:100%;
	}
	
}

@media screen and (max-width: 480px) {

	.footer-social-wrap {
	text-align:center;
	padding-bottom:0em;
	}
	
	.footer-widgets-wrapper {
	margin:0 5.2% 10%;
	}
	
	.footer-widgets-wrapper .widget-area {
	margin: 0 auto 0;
	}

	.footer-widget-one .widget, .footer-widget-two .widget, .footer-widget-three .widget {
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		hyphens: auto;
		margin: 0 auto 7.633%;
		padding: 0 !important;
		width: 96.77%;
		word-wrap: break-word;
	}
	
	.footer-widget-one, .footer-widget-two, .footer-widget-three {
	width:100%;
	}
	
}
<?php endif; ?>

<?php if (get_theme_mod('quidus_disable_entry_meta_single') == 1) : ?>
.entry-footer.single {
display:none;
}
<?php endif; ?>

<?php if (get_theme_mod('quidus_disable_featured_image_home') == 1) : ?>
.home .post-thumbnail {
display:none;
}
.home .hentry.has-post-thumbnail {
padding-top:7.73667%;
}
@media screen and (min-width: 768px) and (max-width: 955px) {
.home .hentry.has-post-thumbnail {
padding-top:9.03%;
}
}
@media screen and (min-width: 480px) and (max-width: 768px) {
.home .hentry.has-post-thumbnail {
padding-top:9.9%;
}
}
@media screen and (max-width: 480px) {
.home .hentry.has-post-thumbnail {
padding-top:12.9%;
}
}
<?php endif; ?>

<?php if (get_theme_mod('quidus_disable_featured_image_search') == 1) : ?>
.search .post-thumbnail {
display:none;
}
.search .hentry.has-post-thumbnail {
padding-top:7.73667%;
}
@media screen and (min-width: 768px) and (max-width: 955px) {
.search .hentry.has-post-thumbnail {
padding-top:9.03%;
}
}
@media screen and (min-width: 480px) and (max-width: 768px) {
.search .hentry.has-post-thumbnail {
padding-top:9.9%;
}
}
@media screen and (max-width: 480px) {
.search .hentry.has-post-thumbnail {
padding-top:12.9%;
}
}
<?php endif; ?>

<?php if (get_theme_mod('quidus_disable_featured_image_archive') == 1) : ?>
.archive .post-thumbnail {
display:none;
}
.archive .hentry.has-post-thumbnail {
padding-top:7.73667%;
}
@media screen and (min-width: 768px) and (max-width: 955px) {
.archive .hentry.has-post-thumbnail {
padding-top:9.03%;
}
}
@media screen and (min-width: 480px) and (max-width: 768px) {
.archive .hentry.has-post-thumbnail {
padding-top:9.9%;
}
}
@media screen and (max-width: 480px) {
.archive .hentry.has-post-thumbnail {
padding-top:12.9%;
}
}
<?php endif; ?>

.site-logo { max-width: <?php if ( get_theme_mod('quidus_logo_max_width_desktop') == '' ) : echo esc_attr('100%'); else : esc_attr_e(get_theme_mod('quidus_logo_max_width_desktop')); ?>% <?php endif; ?>; }


 @media screen and (min-width: 768px) and (max-width: 955px) {
.site-logo { max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_large') == '' ) : echo esc_attr('50%'); else : esc_attr_e(get_theme_mod('quidus_logo_max_width_tablet_large')); ?>% <?php endif; ?>; }
 }
 @media screen and (min-width: 480px) and (max-width: 768px) {
.site-logo { max-width: <?php if ( get_theme_mod('quidus_logo_max_width_tablet_small') == '' ) : echo esc_attr('50%'); else : esc_attr_e(get_theme_mod('quidus_logo_max_width_tablet_small')); ?>% <?php endif; ?>; }
 }
 @media screen and (max-width: 480px) {
.site-logo { max-width: <?php if ( get_theme_mod('quidus_logo_max_width_mobile') == '' ) : echo esc_attr('50%'); else : esc_attr_e(get_theme_mod('quidus_logo_max_width_mobile')); ?>% <?php endif; ?>; }
 }

.entry-header {
text-align: <?php if ( get_theme_mod('quidus_post_title_align_left') == true ) : echo "left"; else : echo "center"; endif; ?> !important;
}

.widget-title {
text-align: <?php if ( get_theme_mod('quidus_widget_title_align_left') == true ) : echo "left"; else : echo "center"; endif; ?> !important;
}

@media screen and (min-width: 955px) {
.site-footer {
	margin: 0px 0px 5.55553% <?php esc_attr_e(get_theme_mod('quidus_sidebar_width_desktop')); ?>% !important;
	width: <?php esc_attr_e(get_theme_mod('quidus_content_width_desktop')); ?>% !important;
}

.site {
	margin: <?php if ( get_theme_mod('quidus_switch_to_centered_layout') == 1 ) : echo "0 auto"; else : echo "0 0 0 "; esc_attr_e(get_theme_mod('quidus_site_distance_from_left')); ?>% !important<?php endif; ?>;
}
}
</style>

<?php
}

add_action('wp_head', 'quidus_css_customizer');

function quidus_author_social() {
	
	global $social_networks;

	echo '<div class="author-social-wrap">';
	foreach ($social_networks as $network) {
	$networks = array(); $networks['author_' . lcfirst($network)] = get_theme_mod('author_' . lcfirst($network));
		if(strpos($networks['author_' . lcfirst($network)], lcfirst($network)) !== false){ echo '<a class="author-social" href="' . esc_url($networks['author_' . lcfirst($network)]) . '"><span class="genericon genericon-' . lcfirst($network) . '"></span></a>'; }
	
	} $google_network = get_theme_mod('author_googleplus');
	if(strpos($google_network, 'plus.google.com') !== false){ echo '<a class="author-social" href="' . esc_url($google_network) . '"><span class="genericon genericon-googleplus"></span></a>'; }
	echo '</div>';
	
}

function quidus_my_social() {
	
	global $social_networks; 
	echo '<div class="my-social-wrap">';
	foreach ($social_networks as $network) {
	$networks = array(); $networks['my_' . lcfirst($network)] = get_theme_mod('my_' . lcfirst($network));
		if(strpos($networks['my_' . lcfirst($network)], lcfirst($network)) !== false){ echo '<a class="my-social" href="' . esc_url($networks['my_' . lcfirst($network)]) . '"><span class="genericon genericon-' . lcfirst($network) . '"></span></a>'; }
	
	} $google_network = get_theme_mod('my_googleplus');
	if(strpos($google_network, 'plus.google.com') !== false){ echo '<a class="my-social" href="' . esc_url($google_network) . '"><span class="genericon genericon-googleplus"></span></a>'; }
	echo '</div>';
	
}

function quidus_footer_social() {
	
	global $social_networks; 
	echo '<div class="footer-social-wrap">';
	foreach ($social_networks as $network) {
	$networks = array(); $networks['footer_' . lcfirst($network)] = get_theme_mod('footer_' . lcfirst($network));
		if(strpos($networks['footer_' . lcfirst($network)], lcfirst($network)) !== false){ echo '<a class="footer-social" href="' . esc_url($networks['footer_' . lcfirst($network)]) . '"><span class="genericon genericon-' . lcfirst($network) . '"></span></a>'; }
	
	} $google_network = get_theme_mod('footer_googleplus');
	if(strpos($google_network, 'plus.google.com') !== false){ echo '<a class="footer-social" href="' . esc_url($google_network) . '"><span class="genericon genericon-googleplus"></span></a>'; }
	echo '</div>';
	
}

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 */
function quidus_customize_preview_js() {
	wp_enqueue_script( 'quidus-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'quidus_customize_preview_js' );

