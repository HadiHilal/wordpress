<?php
/**
* Template Name: contact-us
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header()?>

<div class="overlay">
   <a href="#"><span class="overlay-yel"></span></a>
   <img src="<?php echo get_template_directory_uri(). '/images/work-with-us.jpg' ;?>" attr=""/>
   </div>
   <div class="wel-mes text-center">
   <h2 class="h1"> contact us </h2>
 </div>
<?php
 if (have_posts()) {

   while(have_posts()){
      the_post() ; ?>
      <div class="container">
           <div class="about-us">
             <h1> contact us </h1>
           </div>
           <div class="row">
             <div class="col-lg-9 col-md-12">
               <div class="main-post contact-us">

              <?php the_content() ; ?>

              </div>

             </div>
                   <?php
               }
             }
             ?>
             <div class="col-lg-3 col-md-12 col-sm-12 side-bar">
             <div class="home-side">
                <?php
                if (is_active_sidebar('main-sidebar')) {
                   dynamic_sidebar('main-sidebar');
                }
                ?>
             </div>
          </div>
           </div>
       </div>


 <?php get_footer() ?>
