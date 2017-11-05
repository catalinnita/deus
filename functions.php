<?php
define ('TEMPLATE_DOMAIN', 'WPFW');
class WPFW {

	function  __construct () {

		add_action( 'after_setup_theme', array( $this, 'theme_setup' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_filter( 'comment_form_fields', array( $this,  'move_comment_field' ) );
		add_action( 'widgets_init', array( $this, 'register_widgets' ) );


	}

	public static function enqueue_scripts() {

		wp_enqueue_style( 'WPFW-fonts', 'https://fonts.googleapis.com/css?family=Alegreya:900|Roboto:300,300i,500,500i,700,900|Montserrat:100,200,300,400,500,600,700,800,900|Lora|Source+Serif+Pro|Zilla+Slab|Lusitana|EB+Garamond' );
		wp_enqueue_style( 'WPFW-style', get_stylesheet_uri() );

	}

	public static function theme_setup() {

		load_theme_textdomain( TEMPLATE_DOMAIN );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		
		// do something smarter here
		add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );
		add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );

		$GLOBALS['content_width'] = 525;

		register_nav_menus( array(
			'main'    => __( 'Main Menu', TEMPLATE_DOMAIN ),
			'right'   => __( 'Right Menu', TEMPLATE_DOMAIN )
		) );

		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		) );

		add_theme_support( 'custom-logo', array(
			'width'       => 250,
			'height'      => 250,
			'flex-width'  => true,
		) );

	}

	public static function post_author() {
		
		$out = '<span class="author"> ' . __( 'by', TEMPLATE_DOMAIN ) . ' <a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>';

		return $out;
	}


	public static function post_date() {

		$out = __( 'Posted on', TEMPLATE_DOMAIN ) . ' ' . get_the_date( get_option( 'date_format' ) );

		return $out;

	}

	public static function post_tags() {

		$out = get_the_tag_list( '<ul class="tags-list"><li>', '</li><li>', '</li></ul>' );

		return $out;

	}


	public static function edit_link() {

		
	}	


	public static function entry_footer() {


	}	

	public static function is_frontpage() {


	}

	public static function panel_count() {


	}

	public static function front_page_section() {

	}

	public static function move_comment_field( $fields ) {

		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		
		return $fields;
		 
	}

	public function register_widgets() {
		
		register_sidebar( array(
			'name'          => __( 'Blog Sidebar', TEMPLATE_DOMAIN ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', TEMPLATE_DOMAIN ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		
	}

}

$WPFW = new WPFW();