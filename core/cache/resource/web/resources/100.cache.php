<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 100,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Register',
    'longtitle' => '',
    'description' => '',
    'alias' => '',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '[[Register?
&submitVar=`registerbtn`
&activationResourceId=`99`
&activationEmailTpl=`OctavelgnActivationEmailTpl`
&activationEmailSubject=`Activate your Octave Research Account`
&submittedResourceId=`98`
&usergroups=`Contributors`
]]
[[$OctavelgnRegisterForm]]',
    'richtext' => 0,
    'template' => 1,
    'menuindex' => 12,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1386621478,
    'editedby' => 1,
    'editedon' => 1386622391,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1386621420,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
        <base href="http://127.0.0.1:8080/living_octave_research/" />
	<meta charset="utf-8">
	<title>Living Octave Research</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
        <!--web app capabilities-->
        <meta name="viewport" content="initial-scale = 1.0, user-scalable = no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="livingOctave">

        <!--style sheets-->
	<link rel="stylesheet" href="assets/css/compiled/style.css" type="text/css" />

<!--typekit-->
        <script type="text/javascript" src="//use.typekit.net/itk1olx.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!--[if lt IE 9]-->
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

        <script type="application/javascript" src="assets/js/add2home.js"></script>  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!--homescreen icons-->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="assets/css/images/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/css/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/css/images/apple-touch-icon-114x114.png">
        
        <!--splash screens-->
         <!-- iPhone -->
         <link href="assets/css/images/startup/apple-touch-startup-image-320x460.png"
         media="(device-width: 320px) and (device-height: 480px)
           and (-webkit-device-pixel-ratio: 1)"
           rel="apple-touch-startup-image">
         <!-- iPhone (Retina) --> 
            <link href="assets/css/images/startup/apple-touch-startup-image-640x920.png"
            media="(device-width: 320px) and (device-height: 480px)
            and (-webkit-device-pixel-ratio: 2)"
            rel="apple-touch-startup-image">
         <!-- iPhone 5 -->
          <link href="assets/css/images/startup/apple-touch-startup-image-640x1096.png"
          media="(device-width: 320px) and (device-height: 568px)
          and (-webkit-device-pixel-ratio: 2)"
          rel="apple-touch-startup-image">
        <!-- iPad (portrait) -->
         <link href="assets/css/images/startup/apple-touch-startup-image-768x1004.png"
         media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 1)"
         rel="apple-touch-startup-image">
       <!-- iPad (Retina, portrait) -->
         <link href="assets/css/images/startup/apple-touch-startup-image-1536x2008.png"
         media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
         rel="apple-touch-startup-image">       

       <!--RSS--> 
       <link rel="alternate" type="application/rss+xml" title="Follow this website with RSS" href="index.php?id=48" />  
       <!-- Version Date: 2013-04-03 -->


</head>
<body>
<div class="container">			
<header class="sixteen columns" id="header_branding">
<a href="index.php?id=1" title="Living Octave Research">
<h1>octave <span id="header_branding_research">research</span></h1>
</a>
</header>

<div class="register">
    <div class="registerMessage">[[+error.message]]</div>
    
    <form class="form" action="index.php?id=100" method="post">
        <input type="hidden" name="nospam:blank" value="" />
        
        <label for="username">Username
            <span class="error">[[+error.username]]</span>
        </label>
        <input type="text" name="username:required:minLength=6" id="username" value="[[+username]]" />
        
        <label for="password">Password
            <span class="error">[[+error.password]]</span>
        </label>
        <input type="password" name="password:required:minLength=6" id="password" value="[[+password]]" />
        
        <label for="password_confirm">Confirm Password
            <span class="error">[[+error.password_confirm]]</span>
        </label>
        <input type="password" name="password_confirm:password_confirm=`password`" id="password_confirm" value="[[+password_confirm]]" />
        
        <label for="fullname">Full Name
            <span class="error">[[+error.fullname]]</span>
        </label>
        <input type="text" name="fullname:required" id="fullname" value="[[+fullname]]" />
        
        <label for="email">Email
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email:email" id="email" value="[[+email]]" />
        
        <br class="clear" />

        [[+register.recaptcha_html]]
        [[+error.recaptcha]]
        
        <div class="form-buttons">
            <input type="submit" name="registerbtn" value="Register" />
        </div>
    </form>
</div>
<nav class="sixteen columns" id="header_banner_menu_container">
[[!Wayfinder? 
&startId=`90` 
&ignoreHidden=`0` 
&level=`1` 
&rowTpl=`menuTpl`
&firstClass=`first_issue_menu`
&rowClass=`issue_menu` 
&hereClass=`first_issue_menu`
&sortBy=`id`
&sortOrder=`DESC`
]]

[[!Profile]]


<ul class="sub_nav">
<li class="issue_menu"><a href="#articles">Articles</a></li>
<li class="issue_menu"><a href="index.php?id=24&amp;service=logout" title="Logout"> | Logout</a></li>
</ul><!--sub_nav-->

</nav><!--end header_banner_menu_container-->

<hr>
</div><!--end container-->
       <script type="text/javascript">
        // Mobile Safari in standalone mode
        if(("standalone" in window.navigator) && window.navigator.standalone){
        // If you want to prevent remote links in standalone web apps opening Mobile Safari, change \'remotes\' to true
var noddy, remotes = false;
document.addEventListener(\'click\', function(event) {
noddy = event.target;
// Bubble up until we hit link or top HTML element. Warning: BODY element is not compulsory so better to stop on HTML
while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
noddy = noddy.parentNode;
}
if(\'href\' in noddy && noddy.href.indexOf(\'http\') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
{
event.preventDefault();
document.location.href = noddy.href;
}
},false);
}
</script>

<script type="text/javascript">
$(document).ready(function () {
    function init() {
        if (localStorage["username"]) {
            $(\'#name\').val(localStorage["name"]);
        }
        if (localStorage["password"]) {
            $(\'#email\').val(localStorage["email"]);
        }
    }
    init();
});

$(\'.stored\').keyup(function () {
    localStorage[$(this).attr(\'name\')] = $(this).val();
});


</script>


<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-41193799-1\', \'livingoctaveresearch.us\');
  ga(\'send\', \'pageview\');

</script>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[~48]]' => 'index.php?id=48',
    '[[$head]]' => '<head>
        <base href="http://127.0.0.1:8080/living_octave_research/" />
	<meta charset="utf-8">
	<title>Living Octave Research</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
        <!--web app capabilities-->
        <meta name="viewport" content="initial-scale = 1.0, user-scalable = no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="livingOctave">

        <!--style sheets-->
	<link rel="stylesheet" href="assets/css/compiled/style.css" type="text/css" />

<!--typekit-->
        <script type="text/javascript" src="//use.typekit.net/itk1olx.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!--[if lt IE 9]-->
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

        <script type="application/javascript" src="assets/js/add2home.js"></script>  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!--homescreen icons-->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="assets/css/images/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/css/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/css/images/apple-touch-icon-114x114.png">
        
        <!--splash screens-->
         <!-- iPhone -->
         <link href="assets/css/images/startup/apple-touch-startup-image-320x460.png"
         media="(device-width: 320px) and (device-height: 480px)
           and (-webkit-device-pixel-ratio: 1)"
           rel="apple-touch-startup-image">
         <!-- iPhone (Retina) --> 
            <link href="assets/css/images/startup/apple-touch-startup-image-640x920.png"
            media="(device-width: 320px) and (device-height: 480px)
            and (-webkit-device-pixel-ratio: 2)"
            rel="apple-touch-startup-image">
         <!-- iPhone 5 -->
          <link href="assets/css/images/startup/apple-touch-startup-image-640x1096.png"
          media="(device-width: 320px) and (device-height: 568px)
          and (-webkit-device-pixel-ratio: 2)"
          rel="apple-touch-startup-image">
        <!-- iPad (portrait) -->
         <link href="assets/css/images/startup/apple-touch-startup-image-768x1004.png"
         media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 1)"
         rel="apple-touch-startup-image">
       <!-- iPad (Retina, portrait) -->
         <link href="assets/css/images/startup/apple-touch-startup-image-1536x2008.png"
         media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
         rel="apple-touch-startup-image">       

       <!--RSS--> 
       <link rel="alternate" type="application/rss+xml" title="Follow this website with RSS" href="index.php?id=48" />  
       <!-- Version Date: 2013-04-03 -->


</head>',
    '[[~1]]' => 'index.php?id=1',
    '[[$header]]' => '<header class="sixteen columns" id="header_branding">
<a href="index.php?id=1" title="Living Octave Research">
<h1>octave <span id="header_branding_research">research</span></h1>
</a>
</header>',
    '[[Register?
&submitVar=`registerbtn`
&activationResourceId=`99`
&activationEmailTpl=`OctavelgnActivationEmailTpl`
&activationEmailSubject=`Activate your Octave Research Account`
&submittedResourceId=`98`
&usergroups=`Contributors`
]]' => '',
    '[[*id]]' => 100,
    '[[~100]]' => 'index.php?id=100',
    '[[%register.username? &namespace=`login` &topic=`register`]]' => 'Username',
    '[[%register.password]]' => 'Password',
    '[[%register.password_confirm]]' => 'Confirm Password',
    '[[%register.fullname]]' => 'Full Name',
    '[[%register.email]]' => 'Email',
    '[[$OctavelgnRegisterForm]]' => '<div class="register">
    <div class="registerMessage">[[+error.message]]</div>
    
    <form class="form" action="index.php?id=100" method="post">
        <input type="hidden" name="nospam:blank" value="" />
        
        <label for="username">Username
            <span class="error">[[+error.username]]</span>
        </label>
        <input type="text" name="username:required:minLength=6" id="username" value="[[+username]]" />
        
        <label for="password">Password
            <span class="error">[[+error.password]]</span>
        </label>
        <input type="password" name="password:required:minLength=6" id="password" value="[[+password]]" />
        
        <label for="password_confirm">Confirm Password
            <span class="error">[[+error.password_confirm]]</span>
        </label>
        <input type="password" name="password_confirm:password_confirm=`password`" id="password_confirm" value="[[+password_confirm]]" />
        
        <label for="fullname">Full Name
            <span class="error">[[+error.fullname]]</span>
        </label>
        <input type="text" name="fullname:required" id="fullname" value="[[+fullname]]" />
        
        <label for="email">Email
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email:email" id="email" value="[[+email]]" />
        
        <br class="clear" />

        [[+register.recaptcha_html]]
        [[+error.recaptcha]]
        
        <div class="form-buttons">
            <input type="submit" name="registerbtn" value="Register" />
        </div>
    </form>
</div>',
    '[[~24? &service=`logout`]]' => 'index.php?id=24&amp;service=logout',
    '[[$menu]]' => '<nav class="sixteen columns" id="header_banner_menu_container">
[[!Wayfinder? 
&startId=`90` 
&ignoreHidden=`0` 
&level=`1` 
&rowTpl=`menuTpl`
&firstClass=`first_issue_menu`
&rowClass=`issue_menu` 
&hereClass=`first_issue_menu`
&sortBy=`id`
&sortOrder=`DESC`
]]

[[!Profile]]


<ul class="sub_nav">
<li class="issue_menu"><a href="#articles">Articles</a></li>
<li class="issue_menu"><a href="index.php?id=24&amp;service=logout" title="Logout"> | Logout</a></li>
</ul><!--sub_nav-->

</nav><!--end header_banner_menu_container-->

<hr>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 23,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 18,
          'cache_type' => 0,
          'snippet' => '<head>
        <base href="[[++site_url]]" />
	<meta charset="utf-8">
	<title>Living Octave Research</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
        <!--web app capabilities-->
        <meta name="viewport" content="initial-scale = 1.0, user-scalable = no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="livingOctave">

        <!--style sheets-->
	<link rel="stylesheet" href="assets/css/compiled/style.css" type="text/css" />

<!--typekit-->
        <script type="text/javascript" src="//use.typekit.net/itk1olx.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!--[if lt IE 9]-->
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

        <script type="application/javascript" src="assets/js/add2home.js"></script>  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!--homescreen icons-->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="assets/css/images/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/css/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/css/images/apple-touch-icon-114x114.png">
        
        <!--splash screens-->
         <!-- iPhone -->
         <link href="assets/css/images/startup/apple-touch-startup-image-320x460.png"
         media="(device-width: 320px) and (device-height: 480px)
           and (-webkit-device-pixel-ratio: 1)"
           rel="apple-touch-startup-image">
         <!-- iPhone (Retina) --> 
            <link href="assets/css/images/startup/apple-touch-startup-image-640x920.png"
            media="(device-width: 320px) and (device-height: 480px)
            and (-webkit-device-pixel-ratio: 2)"
            rel="apple-touch-startup-image">
         <!-- iPhone 5 -->
          <link href="assets/css/images/startup/apple-touch-startup-image-640x1096.png"
          media="(device-width: 320px) and (device-height: 568px)
          and (-webkit-device-pixel-ratio: 2)"
          rel="apple-touch-startup-image">
        <!-- iPad (portrait) -->
         <link href="assets/css/images/startup/apple-touch-startup-image-768x1004.png"
         media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 1)"
         rel="apple-touch-startup-image">
       <!-- iPad (Retina, portrait) -->
         <link href="assets/css/images/startup/apple-touch-startup-image-1536x2008.png"
         media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
         rel="apple-touch-startup-image">       

       <!--RSS--> 
       <link rel="alternate" type="application/rss+xml" title="Follow this website with RSS" href="[[~48]]" />  
       <!-- Version Date: 2013-04-03 -->


</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>
        <base href="[[++site_url]]" />
	<meta charset="utf-8">
	<title>Living Octave Research</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
        <!--web app capabilities-->
        <meta name="viewport" content="initial-scale = 1.0, user-scalable = no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="livingOctave">

        <!--style sheets-->
	<link rel="stylesheet" href="assets/css/compiled/style.css" type="text/css" />

<!--typekit-->
        <script type="text/javascript" src="//use.typekit.net/itk1olx.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!--[if lt IE 9]-->
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

        <script type="application/javascript" src="assets/js/add2home.js"></script>  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!--homescreen icons-->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="assets/css/images/apple-touch-icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/css/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/css/images/apple-touch-icon-114x114.png">
        
        <!--splash screens-->
         <!-- iPhone -->
         <link href="assets/css/images/startup/apple-touch-startup-image-320x460.png"
         media="(device-width: 320px) and (device-height: 480px)
           and (-webkit-device-pixel-ratio: 1)"
           rel="apple-touch-startup-image">
         <!-- iPhone (Retina) --> 
            <link href="assets/css/images/startup/apple-touch-startup-image-640x920.png"
            media="(device-width: 320px) and (device-height: 480px)
            and (-webkit-device-pixel-ratio: 2)"
            rel="apple-touch-startup-image">
         <!-- iPhone 5 -->
          <link href="assets/css/images/startup/apple-touch-startup-image-640x1096.png"
          media="(device-width: 320px) and (device-height: 568px)
          and (-webkit-device-pixel-ratio: 2)"
          rel="apple-touch-startup-image">
        <!-- iPad (portrait) -->
         <link href="assets/css/images/startup/apple-touch-startup-image-768x1004.png"
         media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 1)"
         rel="apple-touch-startup-image">
       <!-- iPad (Retina, portrait) -->
         <link href="assets/css/images/startup/apple-touch-startup-image-1536x2008.png"
         media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
         rel="apple-touch-startup-image">       

       <!--RSS--> 
       <link rel="alternate" type="application/rss+xml" title="Follow this website with RSS" href="[[~48]]" />  
       <!-- Version Date: 2013-04-03 -->


</head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 21,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 18,
          'cache_type' => 0,
          'snippet' => '<header class="sixteen columns" id="header_branding">
<a href="[[~1]]" title="[[++site_name]]">
<h1>octave <span id="header_branding_research">research</span></h1>
</a>
</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header class="sixteen columns" id="header_branding">
<a href="[[~1]]" title="[[++site_name]]">
<h1>octave <span id="header_branding_research">research</span></h1>
</a>
</header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'OctavelgnRegisterForm' => 
      array (
        'fields' => 
        array (
          'id' => 76,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'OctavelgnRegisterForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '<div class="register">
    <div class="registerMessage">[[+error.message]]</div>
    
    <form class="form" action="[[~[[*id]]]]" method="post">
        <input type="hidden" name="nospam:blank" value="" />
        
        <label for="username">[[%register.username? &namespace=`login` &topic=`register`]]
            <span class="error">[[+error.username]]</span>
        </label>
        <input type="text" name="username:required:minLength=6" id="username" value="[[+username]]" />
        
        <label for="password">[[%register.password]]
            <span class="error">[[+error.password]]</span>
        </label>
        <input type="password" name="password:required:minLength=6" id="password" value="[[+password]]" />
        
        <label for="password_confirm">[[%register.password_confirm]]
            <span class="error">[[+error.password_confirm]]</span>
        </label>
        <input type="password" name="password_confirm:password_confirm=`password`" id="password_confirm" value="[[+password_confirm]]" />
        
        <label for="fullname">[[%register.fullname]]
            <span class="error">[[+error.fullname]]</span>
        </label>
        <input type="text" name="fullname:required" id="fullname" value="[[+fullname]]" />
        
        <label for="email">[[%register.email]]
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email:email" id="email" value="[[+email]]" />
        
        <br class="clear" />

        [[+register.recaptcha_html]]
        [[+error.recaptcha]]
        
        <div class="form-buttons">
            <input type="submit" name="registerbtn" value="Register" />
        </div>
    </form>
</div>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<div class="register">
    <div class="registerMessage">[[+error.message]]</div>
    
    <form class="form" action="[[~[[*id]]]]" method="post">
        <input type="hidden" name="nospam:blank" value="" />
        
        <label for="username">[[%register.username? &namespace=`login` &topic=`register`]]
            <span class="error">[[+error.username]]</span>
        </label>
        <input type="text" name="username:required:minLength=6" id="username" value="[[+username]]" />
        
        <label for="password">[[%register.password]]
            <span class="error">[[+error.password]]</span>
        </label>
        <input type="password" name="password:required:minLength=6" id="password" value="[[+password]]" />
        
        <label for="password_confirm">[[%register.password_confirm]]
            <span class="error">[[+error.password_confirm]]</span>
        </label>
        <input type="password" name="password_confirm:password_confirm=`password`" id="password_confirm" value="[[+password_confirm]]" />
        
        <label for="fullname">[[%register.fullname]]
            <span class="error">[[+error.fullname]]</span>
        </label>
        <input type="text" name="fullname:required" id="fullname" value="[[+fullname]]" />
        
        <label for="email">[[%register.email]]
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email:email" id="email" value="[[+email]]" />
        
        <br class="clear" />

        [[+register.recaptcha_html]]
        [[+error.recaptcha]]
        
        <div class="form-buttons">
            <input type="submit" name="registerbtn" value="Register" />
        </div>
    </form>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'menu' => 
      array (
        'fields' => 
        array (
          'id' => 25,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'menu',
          'description' => '',
          'editor_type' => 0,
          'category' => 18,
          'cache_type' => 0,
          'snippet' => '<nav class="sixteen columns" id="header_banner_menu_container">
[[!Wayfinder? 
&startId=`90` 
&ignoreHidden=`0` 
&level=`1` 
&rowTpl=`menuTpl`
&firstClass=`first_issue_menu`
&rowClass=`issue_menu` 
&hereClass=`first_issue_menu`
&sortBy=`id`
&sortOrder=`DESC`
]]

[[!Profile]]


<ul class="sub_nav">
<li class="issue_menu"><a href="#articles">Articles</a></li>
<li class="issue_menu"><a href="[[~24? &service=`logout`]]" title="Logout"> | Logout</a></li>
</ul><!--sub_nav-->

</nav><!--end header_banner_menu_container-->

<hr>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<nav class="sixteen columns" id="header_banner_menu_container">
[[!Wayfinder? 
&startId=`90` 
&ignoreHidden=`0` 
&level=`1` 
&rowTpl=`menuTpl`
&firstClass=`first_issue_menu`
&rowClass=`issue_menu` 
&hereClass=`first_issue_menu`
&sortBy=`id`
&sortOrder=`DESC`
]]

[[!Profile]]


<ul class="sub_nav">
<li class="issue_menu"><a href="#articles">Articles</a></li>
<li class="issue_menu"><a href="[[~24? &service=`logout`]]" title="Logout"> | Logout</a></li>
</ul><!--sub_nav-->

</nav><!--end header_banner_menu_container-->

<hr>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Register' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Register',
          'description' => 'Handles forms for registering users on the front-end.',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_register.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The var to check for to load the Register functionality. If empty or set to false, Register will process the form on all POST requests.',
              'area_trans' => '',
            ),
            'usergroups' => 
            array (
              'name' => 'usergroups',
              'desc' => 'prop_register.usergroups_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. A comma-separated list of User Group names or IDs to add the newly-registered User to.',
              'area_trans' => '',
            ),
            'usergroupsField' => 
            array (
              'name' => 'usergroupsField',
              'desc' => 'prop_register.usergroupsfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use to specify the User Group(s) to automatically add the new User to. Only used if this value is not blank.',
              'area_trans' => '',
            ),
            'submittedResourceId' => 
            array (
              'name' => 'submittedResourceId',
              'desc' => 'prop_register.submittedresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will redirect to the specified Resource after the User submits the registration form.',
              'area_trans' => '',
            ),
            'usernameField' => 
            array (
              'name' => 'usernameField',
              'desc' => 'prop_register.usernamefield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'username',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User&apos;s username.',
              'area_trans' => '',
            ),
            'passwordField' => 
            array (
              'name' => 'passwordField',
              'desc' => 'prop_register.passwordfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'password',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User&apos;s password.',
              'area_trans' => '',
            ),
            'validatePassword' => 
            array (
              'name' => 'validatePassword',
              'desc' => 'prop_register.validatepassword_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to validate the sent password when registering. Recommended to leave this Yes unless you are generating your own password in a hook.',
              'area_trans' => '',
            ),
            'generatePassword' => 
            array (
              'name' => 'generatePassword',
              'desc' => 'prop_register.generatepassword_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will generate a random password for the user, overwriting any passed password. Useful for automatic generation of passwords.',
              'area_trans' => '',
            ),
            'trimPassword' => 
            array (
              'name' => 'trimPassword',
              'desc' => 'prop_register.trimpassword_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will trim the submitted password for whitespace.',
              'area_trans' => '',
            ),
            'ensurePasswordStrength' => 
            array (
              'name' => 'ensurePasswordStrength',
              'desc' => 'prop_register.ensurePasswordStrength_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will ensure the user enters a strong enough password. Strong passwords are passwords with multiple words or non-alphabetic characters in them.',
              'area_trans' => '',
            ),
            'passwordWordSeparator' => 
            array (
              'name' => 'passwordWordSeparator',
              'desc' => 'prop_register.passwordWordSeparator_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ' ',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, this will be the separator between words when determining how many words are in a supplied password.',
              'area_trans' => '',
            ),
            'minimumStrongPasswordWordCount' => 
            array (
              'name' => 'minimumStrongPasswordWordCount',
              'desc' => 'prop_register.minimumStrongPasswordWordCount_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, if a supplied password has this many words, then it will be consider a strong password.',
              'area_trans' => '',
            ),
            'maximumPossibleStrongerPasswords' => 
            array (
              'name' => 'maximumPossibleStrongerPasswords',
              'desc' => 'prop_register.maximumPossibleStrongerPasswords_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 25,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, then this is the maximum amount of suggestions that Register can find to consider the supplied password "strong". Making this number higher makes the check more lenient; lower makes it tougher.',
              'area_trans' => '',
            ),
            'ensurePasswordStrengthSuggestions' => 
            array (
              'name' => 'ensurePasswordStrengthSuggestions',
              'desc' => 'prop_register.ensurePasswordStrengthSuggestions_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'prop_register.ensurePasswordStrengthSuggestions_desc',
              'area_trans' => '',
            ),
            'allowedFields' => 
            array (
              'name' => 'allowedFields',
              'desc' => 'prop_register.allowedfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will limit the fields that are allowed to be set on the newly created user to this comma-separated list. Also restricts extended fields.',
              'area_trans' => '',
            ),
            'emailField' => 
            array (
              'name' => 'emailField',
              'desc' => 'prop_register.emailfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User&apos;s email address.',
              'area_trans' => '',
            ),
            'successMsg' => 
            array (
              'name' => 'successMsg',
              'desc' => 'prop_register.successmsg_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. If not redirecting using the submittedResourceId parameter, will display this message instead.',
              'area_trans' => '',
            ),
            'persistParams' => 
            array (
              'name' => 'persistParams',
              'desc' => 'prop_register.persistparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. A JSON object of parameters to persist across the register process. Useful when using redirect on ConfirmRegister to redirect to another page (eg, for shopping carts).',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_register.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, before the form passes validation. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'postHooks' => 
            array (
              'name' => 'postHooks',
              'desc' => 'prop_register.posthooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, after the user has been registered. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'useExtended' => 
            array (
              'name' => 'useExtended',
              'desc' => 'prop_register.useextended_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to set any extra fields in the form to the Profiles extended field. This can be useful for storing extra user fields.',
              'area_trans' => '',
            ),
            'excludeExtended' => 
            array (
              'name' => 'excludeExtended',
              'desc' => 'prop_register.excludeextended_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of fields to exclude from setting as extended fields.',
              'area_trans' => '',
            ),
            'activation' => 
            array (
              'name' => 'activation',
              'desc' => 'prop_register.activation_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to require activation for proper registration. If true, users will not be marked active until they have activated their account. Defaults to true. Will only work if the registration form passes an email field.',
              'area_trans' => '',
            ),
            'activationttl' => 
            array (
              'name' => 'activationttl',
              'desc' => 'prop_register.activationttl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '180',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Number of minutes until the activation email expires. Defaults to 3 hours.',
              'area_trans' => '',
            ),
            'activationResourceId' => 
            array (
              'name' => 'activationResourceId',
              'desc' => 'prop_register.activationresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 1,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The Resource ID where the ConfirmRegister snippet for activation is located.',
              'area_trans' => '',
            ),
            'activationEmail' => 
            array (
              'name' => 'activationEmail',
              'desc' => 'prop_register.activationemail_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will sent activation emails to this address instead of the newly registered user&apos;s address.',
              'area_trans' => '',
            ),
            'activationEmailSubject' => 
            array (
              'name' => 'activationEmailSubject',
              'desc' => 'prop_register.activationemailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The subject of the activation email.',
              'area_trans' => '',
            ),
            'activationEmailTplType' => 
            array (
              'name' => 'activationEmailTplType',
              'desc' => 'prop_register.activationemailtpltype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'modChunk',
                  'text' => 'opt_register.chunk',
                  'name' => 'Chunk',
                ),
                1 => 
                array (
                  'value' => 'file',
                  'text' => 'opt_register.file',
                  'name' => 'File',
                ),
                2 => 
                array (
                  'value' => 'inline',
                  'text' => 'opt_register.inline',
                  'name' => 'Inline',
                ),
                3 => 
                array (
                  'value' => 'embedded',
                  'text' => 'opt_register.embedded',
                  'name' => 'Embedded',
                ),
              ),
              'value' => 'modChunk',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The type of tpls being provided for the activation email.',
              'area_trans' => '',
            ),
            'activationEmailTpl' => 
            array (
              'name' => 'activationEmailTpl',
              'desc' => 'prop_register.activationemailtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'lgnActivateEmailTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The activation email tpl.',
              'area_trans' => '',
            ),
            'activationEmailTplAlt' => 
            array (
              'name' => 'activationEmailTplAlt',
              'desc' => 'prop_register.activationemailtplalt_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => '(Optional) Plain-text alternative for the activation email tpl.',
              'area_trans' => '',
            ),
            'moderatedResourceId' => 
            array (
              'name' => 'moderatedResourceId',
              'desc' => 'prop_register.moderatedresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If a prehook sets the user as moderated, then send to this Resource instead of the submittedResourceId. Leave blank to bypass.',
              'area_trans' => '',
            ),
            'removeExpiredRegistrations' => 
            array (
              'name' => 'removeExpiredRegistrations',
              'desc' => 'prop_register.removeexpiredregistrations_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If true, will remove registered users that have an expired, unused activation request and have never activated. It is recommended to leave this on to prevent spam.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_register.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The prefix to use for all placeholders set by this snippet.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_register.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'opt_register.red',
                  'value' => 'red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'text' => 'opt_register.white',
                  'value' => 'white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'text' => 'opt_register.clean',
                  'value' => 'clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'text' => 'opt_register.blackglass',
                  'value' => 'blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a preHook, this will select a theme for the reCaptcha widget.',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_register.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the minimum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_register.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 100,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the maximum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_register.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the input field for the answer.',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_register.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the 1st number in the equation.',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_register.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the 2nd number in the equation.',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_register.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the operator in the equation.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 22,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'Profile' => 
      array (
        'fields' => 
        array (
          'id' => 18,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Profile',
          'description' => 'Displays Profile data for a User.',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * Profile
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Profile Snippet. Sets Profile data for a user to placeholders
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Profile\');
return $controller->run($scriptProperties);',
          'locked' => false,
          'properties' => 
          array (
            'prefix' => 
            array (
              'name' => 'prefix',
              'desc' => 'prop_profile.prefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A string to prefix all placeholders for fields that will be set by this Snippet.',
              'area_trans' => '',
            ),
            'user' => 
            array (
              'name' => 'user',
              'desc' => 'prop_profile.user_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. Either a user ID or username. If set, will use this user rather than the currently logged in one.',
              'area_trans' => '',
            ),
            'useExtended' => 
            array (
              'name' => 'useExtended',
              'desc' => 'prop_profile.useextended_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to set any extra fields in the form to the Profiles extended field. This can be useful for storing extra user fields.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Profile
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Profile Snippet. Sets Profile data for a user to placeholders
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Profile\');
return $controller->run($scriptProperties);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);