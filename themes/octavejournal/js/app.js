// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs



$(document).ready(function() {
 
  $("#issue-carousel").owlCarousel({
    items : 3,
    itemsDesktop : 3,
    itemsDesktopSmall : 1,
    itemsTablet : 3,
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

  //splash 
  function resizesplash() {
      var heights = window.innerHeight;
      document.getElementById("splash").style.height = heights -80 + "px";
  }

  resizesplash();
  window.onresize = function() {
      resizesplash();
};

});
