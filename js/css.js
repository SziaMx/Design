// JavaScript Document

//slider

  $(window).load(function() {
    $('.flexslider').flexslider({
    directionNav: false,
  });
});


//flickrush

$(document).ready(function() {
	$('div.flickr').flickrush({
		limit:1 ,
		id:'91171420@N03',
		random:true
	});
});

//lightbox

$(document).ready(function() {
		$(".fancybox").fancybox();
	});



