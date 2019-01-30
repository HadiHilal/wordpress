
<?php get_header(); ?>

  <div class="container author-page">
    <h1 class="text-center header-authour">
         <?php the_author_meta('first_name'); #get first name?>
         <?php the_author_meta('last_name');  #get last name ?> 
    </h1>
   <div class="author-main-page">
   
    <div class="row">

      <div class="col-md-3">
      <?php 

        #get image authour
        $avatar_argument = array(
        'class' => 'img-responsive img-thumbnail center-block' 
        );
        echo get_avatar(get_the_author_meta('id'), 190 , '' , '' , $avatar_argument); 
      ?>
      </div>
       
      <div class="col-md-9">
          <ul class="list-unstyled">
              <li> First name : <?php the_author_meta('first_name'); #get first name?> </li>
              <li> Last  name : <?php the_author_meta('last_name'); #get first name?> </li>
              <li> Nickname name : <?php the_author_meta('nickname'); #get first name?> </li>
          </ul>
          <hr/>
          <p class="lead">

         <?php the_author_meta('description'); #get dicraption ?>

         </p>
      </div>    

       </div>
      </div>
        
      <div class="row">
        <div class="col-md-3">
        <div class="author-stats">
        Post count <span><?php echo count_user_posts(get_the_author_ID('ID')); ?> </span>
        </div>
        </div>

        <div class="col-md-3">
        <div class="author-stats">
        Comment count <span> 
            <?php
             $comments_count_argument =  array(
                 'user_id' => get_the_author_ID('ID'),
                 'count'   => true
             );
             echo get_comments($comments_count_argument);
             ?>
            </span>
        </div>
        </div>

        <div class="col-md-3">
        <div class="author-stats">
        Total post views <span> 0 </span>
        </div>
        </div>

        <div class="col-md-3">
        <div class="author-stats">
        Testing <span> 0</span>
        </div>
        </div>

     </div>

        <div class="row ">
            
            <?php 
      
      if (have_posts()) {
         
        while(have_posts()){
           the_post() ; ?>
        
           <div class="col-md-3">
           <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail' , 'title' => 'Feature image']); ?>
          </div>

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
                 <?php the_content() ; ?>
             </div>
            </div>  
            
            <?php
        }
      }
      ?>
      <div class="clearfix"> </div>
            
        </div>


















    </div>
<?php get_footer();  ?>





