<?php
/**
* Template Name: front-page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header()?>


<div class="overlay">
   <a href="#"><span class="overlay-yel"></span></a>
   <img src="<?php echo get_template_directory_uri(). '/images/H8XJ0d8.png' ;?>" attr=""/>
   </div>
   <div class="wel-mes text-center">
   <h2 class="h1 fadeIn"> welcome to magenta site </h2>
   <p> this site made for you  </p>
   </div>


     <?php

      $opinion = new WP_Query('tag_ID=6');
       if ($opinion->have_posts()) {

         while($opinion->have_posts()){
          $opinion->the_post() ;
          ?>
            <div class="container home-page">
               <h1> Hello every one !</h1>
               <p class="lead">
               this is front page this site wlcom to magenta site 
               </p>
               

               <?php

         }
         wp_reset_postdata();
       }
 
       
       ?>
    </div>
    

    <?php get_footer() ?>
