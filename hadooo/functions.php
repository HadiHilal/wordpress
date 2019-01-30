<?php


require_once('wp-bootstrap-navwalker.php');

#add feauterd image
add_theme_support('post-thumbanils');
#this function to add style link
function hadoostyle(){

    wp_enqueue_style('bootstrap-style' , get_template_directory_uri(). '/css/bootstrap.min.css');
    wp_enqueue_style('font-style' , get_template_directory_uri(). '/css/fontawesome.css');
    wp_enqueue_style('css-style' , get_template_directory_uri(). '/css/style.css');
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
    wp_enqueue_script('main-js' , get_template_directory_uri(). '/js/main.js', array(),false,true);
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
        'before_title'  => '<h3 class="widget-content">' ,
        'after_title'   => '</h3>'
    ));
}

add_action('widgets_init' , 'main_sidebar');