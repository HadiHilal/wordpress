<?php get_header(); ?>

<div class="container home-page">
    <div class="row">
     <?php 
      
       if (have_posts()) {
          
         while(have_posts()){
            the_post() ; ?>
            <div class="col-md-9">
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
             <div class="col-md-3 side-bar">

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
         
         echo "<div class='post_pagination'>";
         if ( get_previous_posts_link()) {
           previous_posts_link('<i class="fas fa-chevron-left"></i> prev' );
         }else {
            echo '<span class="previous"> <i class="fas fa-chevron-left"></i> pervious </span>';
         }
         if ( get_next_posts_link()) {
            next_posts_link('next <i class="fas fa-chevron-right"></i>');
          }else {
             echo '<span> next <i class="fas fa-chevron-right"></i> </span>';
          }
          echo "</div>";
         
         
       ?>
       <div class="page">
       <?php echo numbering_pagination();?>
       </div>

   

    </div>

</div>

<?php get_footer(); ?>
