// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs


$(document).ready(function() {
 
  $("#issue-carousel").owlCarousel({
    items : 2,
    itemsDesktop : 2,
    itemsDesktopSmall : 2,
    itemsTablet : 2,
    mouseDrag: true,
    lazyLoad : true,
    navigation : true,
    pagination : false,
    navigationText : [
		'<i class="icon-ios7-arrow-left">',
		'<i class="icon-ios7-arrow-right">'
    ],
    
  });

  $('.issue-contents-carousel-item-content.hidden').fadeIn(1500).removeClass('hidden');
  
  $("#index-sticker").sticky({topSpacing:80});
  $("#article-sticker").sticky({topSpacing:80});
});
