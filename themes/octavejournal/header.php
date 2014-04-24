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
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendors/OwlCarousel/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendors/sticky/jquery.sticky.js"></script>

  



    <!-- TYPOGRAPHY
    ================================================== -->  
    <script type="text/javascript" src="//use.typekit.net/itk1olx.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script> 
      
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="css/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="css/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="css/assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="css/assets/images/apple-touch-icon-114x114.png">
    
    <!-- Analytics
    ================================================== -->
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-41193799-2', 'octavejournal.com');
      ga('send', 'pageview');

    </script>


    <!-- 
      This script enables structural HTML5 elements in old IE.
      http://code.google.com/p/html5shim/
    -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

    <div class="navigation fixed">
        <nav class="navigation-top-bar" data-topbar>
            <ul class="navigation-title-area">
              <li class="">
                <img class="navigation-title-area-image" src="<?php bloginfo('template_url'); ?>/css/assets/branding.png" alt="">
                <h1 class="navigation-title-area-title"><a href="<?php echo site_url(); ?>"><span class="bold">Octave</span> Journal</a></h1>
              </li>
              <li class="navigation toggle-topbar menu-icon"><a href="#"></a></li>
            </ul>

          <section class="navigation-top-bar-section">
            <!-- Right Nav Section -->

            <ul class="right">
                <?php wp_list_categories(
                array(
                    'container'       => false,
                    'container_class'    => '',
                    'menu_class'    => 'right',
                    'depth' => '1',
                    'title_li' => ''
                )
            ); ?>
            </ul> 
          </section>
        </nav>
    </div>
