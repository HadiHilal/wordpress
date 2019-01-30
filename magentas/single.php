<?php 
get_header();

?>

   <div class="container single-page">

      <?php 

         if (have_posts()) {

         while(have_posts()){
         the_post() ; 
      ?>

      <div class="main-post">
         <?php edit_post_link('Edit <i class="fas fa-edit fa"></i>') ; ?>
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

         <div class="row info">

            <div class="col-md-2 ">
            <?php 

            $avatar_argument = array(
            'class' => 'img-responsive img-thumbnail center-block' 
            );
            echo get_avatar(get_the_author_meta('id'), 130 , '' , '' , $avatar_argument); ?>
            <span class="admin-edit"> <i class="fas fa-edit fa"></i> <?php the_author_posts_link(); ?> </span> 
            </div>
         <div class="col-md-8 author-info">
         <h5>

         <?php    the_author_meta('first_name');?>
         <?php    the_author_meta('last_name'); ?>
         <span> (<?php    the_author_meta('nickname'); ?> ) </span>

         </h5>
         <p class="lead">

         <?php the_author_meta('description'); ?>

         </p>
      </div>

      <?php
      /*
      $random_posts_arguments = array(
         'posts_per_page' => 3,
         'orderby'       => 'rand',
         'category__in'   => wp_get_post_categories(get_queried_object_id()),
         'post__not__in'  => array(get_queried_object_id())
      );

      $random_posts = new WP_Query($random_posts_arguments);

      if ($random_posts->have_posts()) {
           
         while($random_posts->have_posts()){

            $random_posts->the_posts() ?>

            <div class="">
            <h3 class="post-title"> 
                   <a href="<?php the_permalink() ?>">
                   <?php the_title(); ?>
                   </a>
           </h3>
          </div>

          <?php
         }
      }

 
      wp_reset_postdata();

      */
   ?>


   </div>
      <?php
      }
      }
      echo "<div class='post_pagination'>";
      if ( get_previous_post_link()) {
      previous_post_link('<i class="fas fa-chevron-left"></i> %link ' );
      }else {
      echo '<span class="previous"> <i class="fas fa-chevron-left"></i> pervious </span>';
      }
      if ( get_next_post_link()) {
      next_post_link('%link <i class="fas fa-chevron-right"></i>');
      }else {
      echo '<span> next <i class="fas fa-chevron-right"></i> </span>';
      }
      echo "</div>";
      echo numbering_pagination();
      comments_template();
      ?>
 
       <div class="page">
         <?php echo numbering_pagination(); ?>
       </div>

   </div>
<?php get_footer(); ?>
