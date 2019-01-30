<?php
?>
<div class="container">
<ol class="breadcrumbs">
<li>
<a href="<?php get_home_url() ?>"> </a>
<?php get_bloginfo('name');?>
<li>

<li>
<a href="<?php esc_url(get_category_link($all_cats[0]->term_id)) ?>"> </a>
<?php echo esc_html($all_cats[0]->name);?>
<li>

<li class="active">
<?php echo get_the_title();?>
<li>


</ol>

</div>
