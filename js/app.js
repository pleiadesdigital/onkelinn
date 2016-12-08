
jQuery(document).ready(function($){

	// FLEXSLIDER
	$(document).ready(function(){
		$('.flexslider').flexslider({
			animation: 'slider',
			slideshow: true,
			controlNav: true,
			direction: 'vertical',
			smoothHeight: true,
			slideshowSpeed: 10000,
			animationSpeed: 1200,
		});
	}); //flexslider
	
	// GOOGLE MAPS
/*
	function initialize() {
		var cpLatLng = new google.maps.LatLng(-16.539780, -68.083831);
		var mapOptions = {
			zoom: 17,
			scrollwheel: false,
			center: cpLatLng,
			mapTypeId: google.maps.MapTypeId.ROADMAP 
		}
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		var marker = new google.maps.Marker({
			position: cpLatLng,
			map: map,
			title: 'Pleiades Digital'
		});
		var content_string = '<h2>Pleiades Digital 17</h2><p>Cond. Montebello</p><p>Achumani | La Paz - Bolivia</p><p>Teléfono: +591-77799006</p>';
		var info_window = new google.maps.InfoWindow({
			content: content_string,
		})
		google.maps.event.addListener(marker, "mouseover", function(){
			info_window.open(map, marker);
		});
	}; //initialize()
	google.maps.event.addDomListener(window, 'load', initialize); */
	// END google maps

}); /*jQuery(document).ready*/






















