<?php 
/**
* Template Name: theme
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header()?>


<div class="container jobs-page">
    <div class="row">
     <?php 
      
       if (have_posts()) {
          
         while(have_posts()){
            the_post() ; ?>
            <div class="col-lg-9 col-md-12 col-sm-12 ">
               <div class="main-post">
                 <h3 class="post-title"> 
                   <a href="<?php the_permalink() ?>">
                   <?php the_title(); ?>
                   </a>
                  </h3>
                  <span class="post-author"><i class="fas fa-user fa"></i> <?php the_author_posts_link(); ?></span>
                  <span class="post-date"><i class="fas fa-calendar-alt"></i> </i><?php the_time('F J,Y') ?></span>
                  <span class="post-comments"><i class="fas fa-comment fa"></i><?php comments_popup_link('0 comments') ?> </span>
                   <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail' , 'title' => 'Feature image']); ?>
                  <?php the_content() ; ?>
                  <hr/>
                  <p class="categories"> <i class="fas fa-tag fa"> </i><?php the_category(', ') ?></p>
                  
                  <p class="post-tags">
                  <?php 
                   if (has_tag()) {
                      the_tags();
                   }else{
                      echo ' this post dont have tags';
                   }
                  ?>
                  </p>
              </div>
             </div>  
             <div class="col-lg-3 col-md-12 col-sm-12 side-bar">

                   <div class="home-side">

                       <?php
                        if (is_active_sidebar('main-sidebar')) {
                           dynamic_sidebar('main-sidebar');
                        }
                        ?>
                    </div>

                  </div>
                  
               <?php

         }
       }
      ?>
            <div class="page">
              <?php echo numbering_pagination(); ?>
            </div>

        </div>

 </div>

 <?php get_footer() ?>
