console.log('Starting up sliders!');

// Slider config.
var sliders = (
	'landing',
	'about',
	'platform',
	'contact'
);

var default_slider = 'landing';

// Config finished, do not touch the following code unless you know what you are doing!
var current_slider;

if(location.hash != '') {
	current_slider = location.hash.replace('#', ''); // remove # from value.
}
else {
	console.log('binding slider to default!');
	current_slider = 'landing'; // by default, landing.
}

function slide(direction) {
        index = sliders.indexOf(current_slider); // get index value of current slide.
	next = '';

	if(direction === 'up') {
		if(index >= 0 && index < sliders.length - 1)
			next = sliders[index+1];
			console.log('next slide: '+next);
	}
	if(direction === 'down') {
		if(index >= 0 && index < sliders.length - 1)
			next = sliders[index-1];
			console.log('next slide: '+next);
	}
	
	// slide to next.
	$("html, body").animate({
        	scrollTop: $('#'+next).offset().top
    	}, 100);
}
