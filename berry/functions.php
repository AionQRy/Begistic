<?php

/**
 * Seed Configurations
 *
 * SEED_LAYOUT -> full-width, boxed
 * SEED_HEADER -> fixed, standard, (auto-show)
 * SEED_MENU -> off-canvas, (dropdown), (push)
 * SEED_BLOG_LAYOUT -> full-width, leftbar, rightbar
 * SEED_BLOG_COLUMNS -> 1, 2, 3, 4, 5, 6
 * SEED_SHOP_LAYOUT -> full-width, leftbar, rightbar
 * SEED_SHOP_MAINPAGE -> default, page-builder
 */



/**
 * Enqueue scripts and styles.
 */
function berry_scripts() {

	wp_dequeue_style( 'seed-style');
	wp_enqueue_style( 'berry-style', get_stylesheet_uri() );
	wp_enqueue_script( 'berry-main', get_stylesheet_directory_uri() . '/js/main.js', array(), '2016-1', true );

}
add_action( 'wp_enqueue_scripts', 'berry_scripts' , 20 );

/**
 * Enqueue scripts and styles.
 */
function wpdocs_theme_slug_scripts() {
    // Custom scripts require a unique slug (Theme Name).
    wp_enqueue_script( 'berry-slickjs', get_stylesheet_directory_uri() . '/slick/slick.min.js', array(), true );
    wp_enqueue_style( 'berry-slickcss', get_stylesheet_directory_uri() . '/slick/slick.css', array() );
		wp_enqueue_style( 'berry-slickthemecss', get_stylesheet_directory_uri() . '/slick/slick-theme.css', array() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_slug_scripts' );

add_action( 'wp_enqueue_scripts', 'berry_scripts' , 20 );
function my_login_logo() { ?>
    <style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Prompt:400,600,700');
				::selection {
						background: #282c69;
						color: #fff;
				}
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo-b-1.png);
						height:65px;
						width:320px;
						background-size: contain;
						background-repeat: no-repeat;
				    padding: 30px;
						box-shadow: none !important;
        }
				body{
					  /* background: #0e1145 !important; */
						background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/bg-begistic-3.jpg) !important;
						display: flex;
						align-items: center;
						background-position: center center !important;
				    background-repeat: no-repeat !important;
				    background-size: cover !important;
				}
				.login h1 {
				    text-align: center;
				    display: flex;
				    justify-content: center;
				    align-items: center;
				}
				body.login.login-action-login.wp-core-ui.locale-th {
				    display: flex;
				    justify-content: center;
				    align-items: center;
				}
				#login {
					font-family: 'Prompt', sans-serif !important;
					padding: 0 !important;
					background: #fff;
					width: 400px !important;
					    box-shadow: 0 2px 4px 0 rgba(75, 75, 75, 0.67) !important;
					padding: 1em !important;
					border: 6px solid #fff !important;
				}
				.login form {
			    background: none !important;
			    box-shadow: none !important;
				}
				input#wp-submit {
					float: none;
					top: 3em;
					position: relative;
					padding: 1.8em 2em;
					line-height: 0;
					background-color: #3e4392;
					box-shadow: none;
					border: 0;
					outline: 0;
					font-size: 1.1em;
					transition: all ease-in-out 500ms;
					display: block;
					width: 100%;
					text-shadow: none;
				}
				input#wp-submit:hover {
				  background-color: #282c69;
					transition: all ease-in-out 500ms;
				}
				input#user_login,
				input#user_pass {
			    background: none !important;
			    color: #3e4392 !important;
			    border-bottom: 2px solid #3e4392;
			    border-left: 0;
			    box-shadow: none;
			    border-right: 0;
			    border-top: 0;
			}
			.login #nav a,.login #backtoblog a {
			    transition: all ease-in-out 600ms;
			}
			.login #nav a:hover,
			.login #backtoblog a:hover {
			    transition: all ease-in-out 600ms;
			    color: #3e4392 !important;
			}
			input#user_login:hover,
			input#user_pass:hover {
			    background: none !important;
			    border-bottom: 2px solid #3e4392 !important;
			    border-left: 0 !important;
			    box-shadow: none !important;
			    border-right: 0 !important;
			    border-top: 0 !important;
			    outline: 0 !important;
			}
			input[type=checkbox]:checked:before {
			    color: #3e4392 !important;
			}
			input#rememberme {
			    box-shadow: none;
			    border: 2px solid #3e4392;
			}
			p.forgetmenot {
			    padding-top: 1.5em;
			}
			.g-recaptcha {
			    display: flex;
			    justify-content: center;
			    width: 100% !important;
			}
			@media (max-width: 1000px){
				#login {
				    width: 320px !important;
				    box-shadow: none !important;
				    padding: 0 !important;
				    border: 0 !important;
				}
			}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url('index.php');
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'BTC';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function customer_sidebar() {
		register_sidebar( array(
				'name' => __( 'Left Sidebar Primary', 'topbar' ),
				'id' => 'l-sidebar',
				'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h1 class="widget-title">',
				'after_title'   => '</h1>',
		) );
		register_sidebar( array(
				'name' => __( 'B Activtities', 'b-activtities' ),
				'id' => 'b-activtities',
				'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h1 class="widget-title">',
				'after_title'   => '</h1>',
		) );
    register_sidebar( array(
        'name' => __( 'Top Bar', 'topbar' ),
        'id' => 'topbar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="topbar widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle topbar-head">',
				'after_title'   => '</h2>',
    ) );
		register_sidebar( array(
        'name' => __( 'Footer 1', 'footer-1' ),
        'id' => 'footer-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
			  'before_widget' => '<span class="divider"></span><li id="%1$s" class="footer-s widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
    ) );
		register_sidebar( array(
        'name' => __( 'Footer 2', 'footer-2' ),
        'id' => 'footer-2',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<span class="divider"></span><li id="%1$s" class="footer-s widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
    ) );
		register_sidebar( array(
				'name' => __( 'Footer 3', 'footer-3' ),
				'id' => 'footer-3',
				'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
				'before_widget' => '<span class="divider"></span><li id="%1$s" class="footer-s widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
		) );
		register_sidebar( array(
				'name' => __( 'Footer 4', 'footer-4' ),
				'id' => 'footer-4',
				'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
				'before_widget' => '<span class="divider"></span><li id="%1$s" class="footer-s widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
		) );
		register_sidebar( array(
				'name' => __( 'Footer 5', 'footer-5' ),
				'id' => 'footer-5',
				'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
				'before_widget' => '<span class="divider"></span><li id="%1$s" class="footer-s widget %2$s">',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
		) );
		register_sidebar( array(
				'name' => __( 'Footer 6', 'footer-6' ),
				'id' => 'footer-6',
				'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
				'before_widget' => '<li id="%1$s" class="footer-s widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'customer_sidebar' );

function list_judd($atts) {

	// EXAMPLE USAGE:
	//[judd limit="123"]
	// Defaults
	      $args = array(
		    'post_type'      => array('post'),
		    'post_status'    => 'publish',
		    'posts_per_page' => 10,
				'order' => 'DESC'
		 );
	      query_posts( $args );
	?>
<!-- loop start -->
<?php if ( have_posts()) : ?>
	<div class="one-time" id="ppost">
	<!-- loop start -->
    <?php while ( have_posts() ) : the_post(); ?>
			<div class="form-judd">
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $imgs1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="img-full" style="background-image: url('<?php echo $imgs1[0]; ?>'); height: 100%;background-size: cover;background-repeat: no-repeat;">
							<?php endif; ?>
						</div>
				<div class="numjudd">
					<div class="content--header">
						<span class="panel-bar"></span>
						<div class="panel-title"><p>News</p></div>
					<a href="<?php the_permalink();?>">
								<?php the_title( '<h3 class="name-judd"><span>| </span>', '</h3>' ); ?>
					</a>
					<?php  echo '<p class="excerpt-center">' . get_the_excerpt() . '</p>' ;?>
					<div class="full-block">
						<a href="<?php the_permalink(); ?>" class="button-read">Learn More</a>
					</div>
				</div>
			 </div>
				</div>
		<?php endwhile; ?>
	<!-- loop end -->
</div>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php
}
add_shortcode('judd', 'list_judd');

function list_judd_two() {
?>
<?php
      $args = array(
	    'post_type'      => array('post'),
	    'post_status'    => 'publish',
	    'posts_per_page' => 10,
			'order' => 'DESC'
	 );
      query_posts( $args );
?>
<?php if ( have_posts()) : ?>
	<div class="one-time" id="ppost-2">
	<!-- loop start -->
    <?php while ( have_posts() ) : the_post(); ?>
			<div class="form-judd">
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $imgs1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="img-full" style="background-image: url('<?php echo $imgs1[0]; ?>'); height: 100%;background-size: cover;background-repeat: no-repeat;">
							<?php endif; ?>
						</div>
				<div class="numjudd">
					<div class="content--header">
						<span class="panel-bar"></span>
						<div class="panel-title"><p>News</p></div>
					<a href="<?php the_permalink();?>">
								<?php the_title( '<h3 class="name-judd"><span>| </span>', '</h3>' ); ?>
					</a>
					<?php  echo '<p class="excerpt-center">' . get_the_excerpt() . '</p>' ;?>
					<div class="full-block">
						<a href="<?php the_permalink(); ?>" class="button-read">Learn More</a>
					</div>
				</div>
			 </div>
				</div>
		<?php endwhile; ?>
	<!-- loop end -->
</div>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php
}
add_shortcode('slidertwo', 'list_judd_two');

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function register_my_menus() {
  register_nav_menus(
    array(
      'about-menu' => __( 'About Menu' ),
			'contact-menu' => __( 'Contact Menu' ),
			'business-type' => __( 'Business Type' ),
			'investor-relation' => __( 'Investor Relations' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function my_acf_init() {
	if( function_exists('acf_add_options_page') ) {
		$option_page = acf_add_options_page(array(
			'page_title' 	=> __('begistic General Settings', 'my_text_domain'),
			'menu_title' 	=> __('begistic General', 'my_text_domain'),
			'menu_slug' 	=> 'begistic-general-settings',
		));
		$corporate_governance = acf_add_options_page(array(
			'page_title' 	=> __('Corporate Governance', 'corporate_governance'),
			'menu_title' 	=> __('Corporate Governance', 'corporate_governance'),
			'menu_slug' 	=> 'corporate-governance',
		));
		$sustainability = acf_add_options_page(array(
			'page_title' 	=> __('Sustainability', 'sustainability'),
			'menu_title' 	=> __('Sustainability', 'sustainability'),
			'menu_slug' 	=> 'sustainability-setting',
		));
		$agm = acf_add_options_page(array(
			'page_title' 	=> __('AGM/EGM', 'agm'),
			'menu_title' 	=> __('AGM/EGM', 'agm'),
			'menu_slug' 	=> 'agm-settings',
		));
		$warrants = acf_add_options_page(array(
			'page_title' 	=> __('Warrants', 'warrants'),
			'menu_title' 	=> __('Warrants', 'warrants'),
			'menu_slug' 	=> 'warrants-settings',
		));
		$financial_statement = acf_add_options_page(array(
			'page_title' 	=> __('Financial Statement', 'financial_statement'),
			'menu_title' 	=> __('Financial Statement', 'financial_statement'),
			'menu_slug' 	=> 'financial-statement-settings',
		));
		$annual_report = acf_add_options_page(array(
			'page_title' 	=> __('Annual Report', 'annual_report'),
			'menu_title' 	=> __('Annual Report', 'annual_report'),
			'menu_slug' 	=> 'annual-report-settings',
		));
	}
}
add_action('acf/init', 'my_acf_init');

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'singlepost-thumb', 1200, 500, true ); // (cropped)
}

function supericon() {
	if ( !is_front_page() ) {
		?>
		<div class="super-icon">
			<button id="nav-toggle"><span></span></button>
		</div>
		<?php
	}
}
