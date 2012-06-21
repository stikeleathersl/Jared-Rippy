$(document).ready(function(){
	// thumbnails stagger
	$('.thumbscolumn').masonry({
  		singleMode: true
	});

	// logo rollover - color change
	/*$('#site-header').mouseover(function() {
		$(this).addClass('smileHover');
	});
	$('#site-header').mouseout(function() {
		$(this).removeClass('smileHover');
	});*/
	
	// logo rollover - image change
	/*$('#site-header img').mouseover(function() {
	  var newSrc = $(this).attr('src').replace('jared_logo.png', 'jared_logo_over.png');
	  $(this).attr('src', newSrc); 
	});
	$('#site-header img').mouseout(function() {
	  var newSrc = $(this).attr('src').replace('jared_logo_over.png', 'jared_logo.png');
	  $(this).attr('src', newSrc); 
	});*/
	
	// remove alt from view
	$('img').removeAttr('title');
	$('img').removeAttr('alt');
	$('a').removeAttr('title');
	$('a').removeAttr('alt');

	
});