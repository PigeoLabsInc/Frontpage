	var section = 'landing';
	var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x
	$('body').bind(mousewheelevt, function(e){

    		var evt = window.event || e //equalize event object     
    		evt = evt.originalEvent ? evt.originalEvent : evt; //convert to originalEvent if possible               
		var delta = evt.detail ? evt.detail*(-40) : evt.wheelDelta //check for detail first, because it is used by Opera and FF

    		if(delta > 0) {
       			 //scroll up
    			section = $('#'+section).next('.section').attr('id');
		}
    		else{
       			# section = $('#'+section).prev('.section').attr('id');
    		}
		console.log(section)
		window.location.href = "/#"+section;
	});
