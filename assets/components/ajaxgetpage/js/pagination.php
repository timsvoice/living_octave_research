<?php
include 'functions.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="pagination.css" />
<script id="moo" src="mootools-1.3-com.js" type="text/javascript"></script>
<script id="pagination" src="pagination.js" type="text/javascript"></script>
<script>
window.addEvent('domready', function() {
	// URL, {Options}
	new Paginator('http://local.dev.com.au/pagination/ajax.php');
});
</script>
<title>Simons Easy Ajax Pagination</title>
</head>
<body>

	
	<h1>Simons Easy Ajax Pagination (MooTools)</h1>
    
    
	<!-- Begin Pagination code -->
	<div id="pagination_controls">
        <div id="pagination_control_wrapper">
        </div>
    </div>    
	<div id="pagination_container">
       <div id="pagination_content_wrapper">
       </div>
    </div>
    <!-- End Pagination code -->
    
    
    
    <div class="points">
        <strong>Features</strong>
        <ul>
            <li>Ajaxian Pagination</li>
            <li>Back &amp; Forward button support</li>
            <li>URL ajax navigation <a href="pagination.php#p=4">Go To page 4</a></li>
            <li>JavaScript ajax navigation whithin class "this.pLoad('3');" loads page 3</li>
            <li>Left to Right, or Right to Left animated slide</li>
        </ul>
        <strong>To Do</strong>
        <ul>
            <li>Cache with on/off switch</li>
        </ul>
    </div>
    
</body>
</html>