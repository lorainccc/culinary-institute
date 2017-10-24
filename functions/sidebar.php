<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lorainccc_subsite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'culinary' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="sidebar-widget widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Gateway Menu Sidebar', 'culinary' ),
		'id'            => 'gateway-menu-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'Calendar Sidebar', 'culinary' ),
		'id'            => 'calendar-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => esc_html__( 'Sub Site Announcement Sidebar', 'culinary' ),
		'id'            => 'sub-site-announcements-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Dashboard Icons Sidebar', 'culinary' ),
		'id'            => 'cta-icons-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'LCCC Spotlights Sidebar', 'culinary' ),
		'id'            => 'lccc-spotlights-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'LCCC Highlights Sidebar', 'culinary' ),
		'id'            => 'lccc-highlights-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'LCCC Events Sidebar', 'culinary' ),
		'id'            => 'lccc-events-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'LCCC Announcements Sidebar', 'culinary' ),
		'id'            => 'lccc-announcements-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'LCCC Badges Sidebar', 'culinary' ),
		'id'            => 'lccc-badges-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'LCCC Program Pathways Sidebar', 'culinary' ),
		'id'            => 'lccc-programpathways-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'LCCC 404 Sidebar', 'culinary' ),
		'id'            => 'lccc-four-o-four-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'culinary' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
 	register_sidebar( array(
		'name'          => esc_html__( 'LCCC Search Sidebar', 'lorainccc' ),
		'id'            => 'lccc-search-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'id'            => 'ss_recent_posts',
		'class'         => 'ss-recent-posts',
		'name'          => __( 'Standard Sub Recent Posts', 'culinary' ),
		'description'   => __( 'Widget Area Designated for Recent Posts widget', 'culinary' ),
		'before_widget' => '<div class="sidebar-recent-posts sidebar-widget">',
		'after_widget'  => '</div>',
	));
}
add_action( 'widgets_init', 'lorainccc_subsite_widgets_init' );
