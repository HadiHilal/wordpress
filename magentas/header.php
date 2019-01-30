
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="container">
      <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">   <img src="<?php echo get_template_directory_uri(). '/images/magenta-logo.png' ;?>" /> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php get_search_form(); ?>
        <?php  hadoo_navbar(); ?>
        </div>

      </nav>

    </div>
