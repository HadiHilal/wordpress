<!DOCTYBE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo("charset"); ?>" />
    <title>
      <?php wp_title('|', true , 'right') ?>
      <?php bloginfo("name"); ?>
    </title>
    <link rel="pingback"  href="<?php bloginfo("pingback_url"); ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <a class="navbar-brand" href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php  hadoo_navbar(); ?>
  </div>
</nav>

    
