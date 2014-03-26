// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs


$(document).ready(function() {
 
  $("#issue-carousel").owlCarousel({
    items : 3,
    itemsDesktop : 3,
    mouseDrag: false,
    lazyLoad : true,
    navigation : true,
    pagination : false,
    navigationText : [
		'<i class="icon-ios7-arrow-left">',
		'<i class="icon-ios7-arrow-right">'
    ],
    
  });
 
});