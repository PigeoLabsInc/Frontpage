var debug = false; // console outputs enabled if true.

window.switchPeep = function(peep, fade) {
	peep = "#"+peep;
	if(! fade) fade = 'in';
	$(peep).fadeOut('fast');
	if(fade == 'in') {
		$(peep).addClass('legoman');
	}
	else {
		$(peep).removeClass('legoman');
	}
	$(peep).fadeIn('fast');
}

$(function() {
	// jQuery is loaded.
	if (debug === true) console.log('Loading Peeps');
	$('.peep').hover(function() {
		peep = $(this).attr('id');
		if (debug === true) console.log("Switching peep for "+peep);
		window.switchPeep(peep);
	}, function() {
		peep = $(this).attr('id');
		if (debug === true) console.log('Switching out peep for '+peep);
		window.switchPeep(peep, 'out');
	});
});
