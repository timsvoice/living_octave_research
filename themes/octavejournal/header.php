<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
    
    <title>
        <?php if (function_exists('is_tag') && is_tag()) {
            single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
            } elseif (is_archive()) {
            wp_title(''); echo ' Archive - ';
            } elseif (is_search()) {
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
            } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' - ';
            } elseif (is_404()) {
            echo 'Not Found - ';
            }
            if (is_home()) {
            bloginfo('name'); echo ' - '; bloginfo('description');
            } else {
            bloginfo('name');
            }
            if ($paged > 1) {
            echo ' - page '. $paged;
        } ?>
    </title>

  <head>
    <meta charset="utf-8"/>
    <meta name="description" content="Timothy Voice - Presence">
    <meta name="author" content="Timothy Voice">
    
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <!-- STYLES
    ================================================== --> 
    
    <link rel='stylesheet' href='<?php bloginfo("stylesheet_url"); ?>' type='text/css' media='screen' />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ionicons.css" type='text/css'>

    <!-- JS 
    ================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    <!-- Load Custom JS script -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-waypoints/waypoints.min.js"></script>
  



    <!-- TYPOGRAPHY
    ================================================== -->  
     
      
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="css/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="css/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="css/assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="css/assets/images/apple-touch-icon-114x114.png">
    
    <!-- Analytics
    ================================================== -->

    <!-- 
      This script enables structural HTML5 elements in old IE.
      http://code.google.com/p/html5shim/
    -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

    <div class="navigation contain-to-grid fixed">
        <nav class="navigation-top-bar" data-topbar>
            <ul class="navigation-title-area">
              <li class="">
                <img class="navigation-title-area-image" src="http://placehold.it/40x40/bfbfbf/fff" alt="">
                <h1 class="navigation-title-area-title"><a href="#">Octave Journal</a></h1>
              </li>
              <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
            </ul>

          <section class="navigation-top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li><a href="#">nurture</a></li>
                <li><a href="#">connect</a></li>
                <li><a href="#">discover</a></li>
                <li><a href="#">practice</a></li>
            </ul>
          </section>
        </nav>
    </div>
