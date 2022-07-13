/* added in about-us-heading */$('#about-us-heading').waypoint(function(direction) {
  //window.console.log(this.element.id + ' hit top of window'+ '. going Direction: ' + direction);
  if(direction=="down") {
		$('#page-nav a[href="#about-us-heading"]').addClass('nav-up');
		$('#page-nav .active').removeClass('active');
		$('#page-nav a[href="#about-us-heading"]').parent().addClass('active');
	} else {
		$('#page-nav a[href="#about-us-heading"]').removeClass('nav-up');
	}
}, {
  offset: '0'
});/* added in join-our-team-heading */$('#join-our-team-heading').waypoint(function(direction) {
  //window.console.log(this.element.id + ' hit top of window'+ '. going Direction: ' + direction);
  if(direction=="down") {
		$('#page-nav a[href="#join-our-team-heading"]').addClass('nav-up');
		$('#page-nav .active').removeClass('active');
		$('#page-nav a[href="#join-our-team-heading"]').parent().addClass('active');
	} else {
		$('#page-nav a[href="#join-our-team-heading"]').removeClass('nav-up');
	}
}, {
  offset: '0'
});