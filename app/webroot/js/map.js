
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
				
<<<<<<< HEAD
			var myLatlng = new google.maps.LatLng(-16.278784204577075,-63.584725856781006);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.DROP		
			};
			marker_1 = createMarker(markerOptions);
			
			marker_1.set("content", "<ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-3'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li></ul>");
			
			google.maps.event.addListener(marker_1, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
			});
			
			var myLatlng = new google.maps.LatLng(-16.29159537887275,-63.61412286758423);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.DROP		
			};
			marker_2 = createMarker(markerOptions);
			
			marker_2.set("content", "<ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-3'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li></ul>");
			
			google.maps.event.addListener(marker_2, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
			});
			
			var myLatlng = new google.maps.LatLng(-17.38413232091801,-66.16693669328879);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.DROP		
			};
			marker_4 = createMarker(markerOptions);
			
			marker_4.set("content", "<ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-3'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li></ul>");
			
			google.maps.event.addListener(marker_4, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
			});
			
			var myLatlng = new google.maps.LatLng(-17.38413232091801,-66.16693669328879);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.DROP		
			};
			marker_5 = createMarker(markerOptions);
			
			marker_5.set("content", "<ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-3'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li></ul>");
			
			google.maps.event.addListener(marker_5, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
			});
			
			var myLatlng = new google.maps.LatLng(-17.38413232091801,-66.16693669328879);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.DROP		
			};
			marker_6 = createMarker(markerOptions);
			
			marker_6.set("content", "<ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-3'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li></ul>");
			
			google.maps.event.addListener(marker_6, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
			});
			
			var myLatlng = new google.maps.LatLng(-16.498937247537533,-68.1464263668995);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.DROP		
			};
			marker_7 = createMarker(markerOptions);
			
			marker_7.set("content", "<ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-3'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li></ul>");
			
			google.maps.event.addListener(marker_7, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
			});
			
			var myLatlng = new google.maps.LatLng(-17.381436943239027,-66.16816112170409);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.DROP		
			};
			marker_8 = createMarker(markerOptions);
			
			marker_8.set("content", "<ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-3'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li></ul>");
			
			google.maps.event.addListener(marker_8, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
			});
			
			var myLatlng = new google.maps.LatLng(-17.383938423991257,-66.16677911350916);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.DROP		
			};
			marker_9 = createMarker(markerOptions);
			
			marker_9.set("content", "<ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-3'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li><li class='span3 cat-2'><div class='thumbnail'><a class='js-fancybox' rel='album' href='/BoliviaEmpresa/img/Boliviaempresa.jpg'><img src='/BoliviaEmpresa/img/Boliviaempresa.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li></ul>");
			
			google.maps.event.addListener(marker_9, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
			});
			
=======
>>>>>>> fa496e001a160832c805609629e3905922a05677
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