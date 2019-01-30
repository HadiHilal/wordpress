<?php
/**
* Template Name: blog
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

<div class="container home-page">

    <div class="row">
    <div class="col-lg-9 col-md-12 col-sm-12 ">
     <?php

       if (have_posts()) {

         while(have_posts()){
            the_post() ;
          ?>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
          <?php  $args = array(
             'child_of' => $post->ID,
           );
           ?>
            <?  wp_list_pages($args); ?>
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
                  <?php the_content();?>
                   <p>
                   <?php echo  get_the_excerpt() ; ?>
                   <a href="<?php the_permalink();?>"> Read more&raquo;</a>
                   </p>
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
             </div>

               <?php

         }
       }

       ?>
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
        <div class="page">
       <?php echo numbering_pagination(); ?>
       </div>

    </div>

</div>