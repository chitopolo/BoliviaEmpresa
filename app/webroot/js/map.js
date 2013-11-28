
			var map; // Global declaration of the map
			var iw = new google.maps.InfoWindow(); // Global declaration of the infowindow
			var lat_longs = new Array();
			var markers = new Array();
			function initialize() {
				
				 var myLatlng = new google.maps.LatLng(-16.290154, -63.588653);
				var myOptions = {
			  		zoom: 13,
					center: myLatlng,
			  		mapTypeId: google.maps.MapTypeId.ROADMAP}
				map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
				
			var myLatlng = new google.maps.LatLng(-17.8666667,-63);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				draggable: true		
			};
			marker_0 = createMarker(markerOptions);
			
				google.maps.event.addListener(marker_0, "dragend", function(event) {
					addressMap(event.latLng.lat(), event.latLng.lng());
				});
				
			fitMapToBounds();
			
			
			}
		
		
		function createMarker(markerOptions) {
			var marker = new google.maps.Marker(markerOptions);
			markers.push(marker);
			lat_longs.push(marker.getPosition());
			return marker;
		}
		
			function fitMapToBounds() {
				var bounds = new google.maps.LatLngBounds();
				if (lat_longs.length>0) {
					for (var i=0; i<lat_longs.length; i++) {
						bounds.extend(lat_longs[i]);
					}
					map.fitBounds(bounds);
				}
			}
			window.onload =  initialize();