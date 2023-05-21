<?php

add_action( 'wp_enqueue_scripts', 'tt_add_styles');

function tt_add_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-style', 
        get_stylesheet_directory_uri() . '/style.css', 
        array( 'parent-style'), 
        wp_get_theme()->get('Version')
    );
}


/*
function underscores_child_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Facebook Sidebar', 'underscores' ),
			'id'            => 'facebook_bar',
			'description'   => esc_html__( 'Add widgets here.', 'underscores' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Magazine Sidebar', 'underscores' ),
			'id'            => 'archive_bar',
			'description'   => esc_html__( 'Add widgets here.', 'underscores' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'underscores_child_widgets_init' );
*/