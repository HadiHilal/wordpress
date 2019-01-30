<?php


require_once('wp-bootstrap-navwalker.php');

#add feauterd image
add_theme_support('post-thumbanils');
#this function to add style link
function hadoostyle(){

    wp_enqueue_style('bootstrap-style' , get_template_directory_uri(). '/css/bootstrap.min.css');
    wp_enqueue_style('font-style' , get_template_directory_uri(). '/css/fontawesome.css');
    wp_enqueue_style('font-style' , get_template_directory_uri(). '/scss/style.scss');
    wp_enqueue_style('css-style' , get_template_directory_uri(). '/css/ry.css');


}

#this function to add script link
function hadooscript(){

    #remove reqisteration for old jquery
    wp_deregister_script('jquery');

    #reqister a new jquery in footer
    wp_register_script('jquery' , includes_url('/js/jquery/jquery.js', false, '' , true));

    #enqueue a new jquery
    wp_enqueue_script('jquery');

    #enqueue js file
    wp_enqueue_script('bootstrap-js' , get_template_directory_uri(). '/js/bootstrap.min.js', array(),false,true);
    wp_enqueue_script('jquery-js' , get_template_directory_uri(). '/js/jquery.min.js', array(),false,true);
    wp_enqueue_script('main-js' , get_template_directory_uri(). '/js/index.js', array(),false,true);
}

#this action to show script in front-end page

    add_action('wp_enqueue_scripts' , 'hadoostyle');
    add_action('wp_enqueue_scripts' , 'hadooscript');

#adding menu

function hadooo_menu(){

    register_nav_menus(
        array(
            'bootstrap-menu' => 'navigation bar',
            'footer-menu' =>    'footer menu'
        ));
}

add_action('init', 'hadooo_menu');

#adding navbar

function hadoo_navbar(){

    wp_nav_menu(array(

        'theme_location' => 'bootstrap-menu',
        'menu_class' => 'nav navbar-nav ',
        'container' => false,
        'depth' => 2,
        'walker' => new wp_bootstrap_navwalker()
    ));

}

#custmize excerpt word count
function custom_excerpt_length() {
    return 55;
}

add_filter('excerpt_length' , 'custom_excerpt_length' );

#post format 
 add_theme_support('post_format' , array('aside' , 'gallery' , 'link') );


#numpring pages
function numbering_pagination(){

    global $wp_query;    #make wp query glopal
    $all_pages = $wp_query->max_num_pages; #get all posts
    $current_page = max(1,get_query_var('paged')); #get current page
    if ($all_pages > 1 ) {
        return paginate_links(array(
            'base'    => get_pagenum_link() . '%_%' ,
            'format'  => 'page/%#%' ,
            'current' => $current_page
        ));
    }
}
echo numbering_pagination();

#register side bar

function main_sidebar(){

    #register main side bar
    register_sidebar(array(
        'name'          => 'Main sidebar' ,
        'id'            => 'main-sidebar' ,
        'description'   => 'main sidebar appear every where' ,
        'class'         => 'main-sidebar' ,
        'before_widget' => '<div class="widget-content">' ,
        'after_widget'  => '</div>' ,
    ));
     #register main side bar
     register_sidebar(array(
        'name'          => 'footer sidebar' ,
        'id'            => 'footer-sidebar' ,
        'description'   => 'footer sidebar appear every where' ,
        'class'         => 'footer-sidebar' ,
        'before_widget' => '<div class="widget-content">' ,
        'after_widget'  => '</div>' ,
    ));
}

add_action('widgets_init' , 'main_sidebar');


function ripple_breadcrumb_cb() {

    if (is_home() || is_front_page()) {
        return;
    }

    echo '<div id="ripple-breadcrumb">';

    if ( ! function_exists( 'breadcrumb_trail' ) ) {
        require_once get_template_directory() . '/inc/breadcrumbs.php';
    }

    $breadcrumb_args = array(
        'container'   => 'div',
        'show_browse' => false,
    );
    breadcrumb_trail( $breadcrumb_args );

    echo '</div>';
}

add_action('ripple_breadcrumb', 'ripple_breadcrumb_cb');


#custmize apperance options


function learningWordPress_customize_register( $wp_customize ) {

	$wp_customize->add_setting('lwp_link_color', array(
		'default' => '#e70a5c',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('lwp_btn_color', array(
		'default' => '#e70a5c',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('lwp_btn_hover_color', array(
		'default' => '#004C87',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('lwp_standard_colors', array(
		'title' => __('Standard Colors', 'LearningWordPress'),
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_link_color_control', array(
		'label' => __('Link Color', 'LearningWordPress'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_link_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_btn_color_control', array(
		'label' => __('Button Color', 'LearningWordPress'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_btn_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_btn_hover_color_control', array(
		'label' => __('Button Hover Color', 'LearningWordPress'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_btn_hover_color',
	) ) );

}

add_action('customize_register', 'learningWordPress_customize_register');



// Output Customize CSS
function learningWordPress_customize_css() { ?>

	<style type="text/css">

		a:link,
		a:visited {
			color: <?php echo get_theme_mod('lwp_link_color'); ?>;
		}

		.site-header nav ul li.current-menu-item a:link,
		.site-header nav ul li.current-menu-item a:visited,
		.site-header nav ul li.current-page-ancestor a:link,
		.site-header nav ul li.current-page-ancestor a:visited {
			background-color: <?php echo get_theme_mod('lwp_link_color'); ?>;
		}

		.btn-a,
		.btn-a:link,
		.btn-a:visited,
		div.hd-search #searchsubmit {
			background-color: <?php echo get_theme_mod('lwp_btn_color'); ?>;
		}

		.btn-a:hover,
		div.hd-search #searchsubmit:hover {
			background-color: <?php echo get_theme_mod('lwp_btn_hover_color'); ?>;
		}

	</style>

<?php }

add_action('wp_head', 'learningWordPress_customize_css');
