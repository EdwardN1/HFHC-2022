$('#contact').waypoint(function(direction) {
  //window.console.log(this.element.id + ' hit top of window'+ '. going Direction: ' + direction);
  if(direction=="down") {
		$('#page-nav a[href="#contact"]').addClass('nav-up');
		$('#page-nav .active').removeClass('active');
		$('#page-nav a[href="#contact"]').parent().addClass('active');
	} else {
		$('#page-nav a[href="#contact"]').removeClass('nav-up');
	}
}, {
  offset: '0'
});

$('#icons').waypoint(function(direction) {
  if(!$('#icons .first .icon').hasClass('animated')) {
		Foundation.Motion.animateIn($('#icons .first .icon'),'fade-in-up');
		$('#icons .first .icon').addClass('animated');
	}  
}, {
  offset: '70%'
});

$('#icons').waypoint(function(direction) {
  if(!$('#icons .second .icon').hasClass('animated')) {
		Foundation.Motion.animateIn($('#icons .second .icon'),'fade-in-up');
		$('#icons .second .icon').addClass('animated');
	}  
}, {
  offset: '70%'
});

$('#icons').waypoint(function(direction) {
  if(!$('#icons .third .icon').hasClass('animated')) {
		Foundation.Motion.animateIn($('#icons .third .icon'),'fade-in-up');
		$('#icons .third .icon').addClass('animated');
	}  
}, {
  offset: '70%'
});

$('#icons').waypoint(function(direction) {
  if(!$('#icons .forth .icon').hasClass('animated')) {
		Foundation.Motion.animateIn($('#icons .forth .icon'),'fade-in-up');
		$('#icons .forth .icon').addClass('animated');
	}  
}, {
  offset: '70%'
});

$('#we-offer-grid').waypoint(function(direction) {
	$('#we-offer-grid .icon').each(function(){
		$i = $(this);
		if(!$i.hasClass('animated')) {
			Foundation.Motion.animateIn($i,'fade-in-up');
			$i.addClass('animated');
		}  
	});

}, {
  offset: '70%'
});