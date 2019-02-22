<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link href="<?php echo get_template_directory_uri() ?>/styles/style.css" rel="stylesheet">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="UP Sigma Delta Phi"/>
  <meta name="msapplication-TileColor" content="#F2B520" />
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-310x310.png" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header>
      <nav class="flex items-center justify-between flex-wrap bg-white border-b-4 border-sdpyellow p-6">
        <div id="branding" class="flex items-center w-full sm:w-2/3">
          <img id="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/seal-gradient.svg">
          <span id="site-title" class="font-semibold text-xl text-grey-darkest tracking-tight pl-4 pr-6">UP Sigma Delta Phi</span>
          <a href="" class="pl-6 pt-1 text-grey hover:text-sdpyellow">About</a>
          <a href="" class="pl-6 pt-1 text-grey hover:text-sdpyellow">Projects</a>
          <a href="" class="pl-6 pt-1 text-grey hover:text-sdpyellow">Events</a>
        </div>
        <div class="text-right w-full sm:w-1/3">
          <a class="bg-transparent hover:bg-sdpyellow text-sdpyellow font-semibold hover:text-white py-2 px-4 border border-sdpyellow rounded">
            Interested?
          </a>
        </div>
      </nav>
    </header>
  </div>

  <section id="container" class="flex">