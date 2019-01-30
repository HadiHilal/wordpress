<?php
/**
* Template Name: About-us
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
   <h2 class="h1"> About us </h2>

 </div>

<div class="about-us">
   <h1> About us </h1>
   <p class="lead">
   we believe everyone deserves to have a website to his business , so that we are here  ,Innovation and simplicity makes us happy:
   our goal is to remove any technical or financial barriers that can prevent business owners
   from making their own advert.
   We're excited to help you on your journey!
   </p>
 </div>


 <div class="container values">
    <h1>Our values</h1>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <h4>Every Individual Deserves a website </h4>
     <p class="lead">
     We believe every individual should have the power to create their advert,
     so that we will helpe you to make advert in our website with cheap price
     </p>
    </div>
    <div class="carousel-item">
    <h4>Our Customers Mean the World </h4>
     <p class="lead">
     At <a class="brand" href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a> , we strive to provide exactly what our customers are looking for. A huge part of our
     brainstorming process is looking at our client feedback to make sure you're well taken
     care of.
     </p>
    </div>
    <div class="carousel-item">
    <h4>In-House Made </h4>
     <p class="lead">
     We are personally committed to delivering the very best. Everything, from customer support to product design and development,
      is provided by our dedicated team in syria.
     </p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>

 <?php get_footer() ?>
