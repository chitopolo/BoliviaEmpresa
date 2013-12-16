
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
				
			var myLatlng = new google.maps.LatLng(-16.278784204577075,-63.584725856781006);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.BOUNCE		
			};
			marker_1 = createMarker(markerOptions);
			
			marker_1.set("content", "<a href=\"/BoliviaEmpresa/bolivia_companies/perfilCompany/2\">Adquirir cupon</a><div id='izquierda' class='span12'> <h3>Sucursal</h3><ul class='nav nav-tabs'><li class='active'><a href='#Su' data-toggle = 'tab'>Sucursal</a></li><li><a href='#De' data-toggle = 'tab'>Tickes</a></li></ul></div><div class='tab-content span12'><div class='tab-pane active' id='Su'><section class='block-large bg-alt'><div class='container'><div class='row'><div class='span3'></div><div class='span9'><h2> sucursal1</h2><h4>Direccion:</h4><p class='lead'> comidaspollo </p><h4>Telefono:</h4><p class='lead'> 4567843</p><h4>Correo:</h4><p class='lead'> gusgus@hotmail.com</p><h4>Fecha de creacion:</h4><p class='lead'> 2013-10-08 12:16:56</p><!-- <a href='#' class='btn btn-large btn-primary'>Contact Us!</a> --><h4>Descripcion:</h4><p class='lead'> </p></div></div></div></section></div><div class='tab-pane active' id='De'><ul class='thumbnails portfolio'><li class='span3 cat-1'><div class='thumbnail'><img src=\"/BoliviaEmpresa/img/deal/filename/big_t_umb.jpg\" alt=\"Promocion\" /><div class='caption'><h2><a href=\"/BoliviaEmpresa/bolivia_companies/perfilCompany/2\">negocio</a></h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p><h5>La promocion expira en:</h5><p>2013-10-08 16:14:00</p><h5>Tickest Disponibles</h5><p>2</p><h5>Tickest Canjeados</h5><p>0</p><div id='cupon'><a href=\"/BoliviaEmpresa/bolivia_companies/perfilCompany/2\">Adquirir cupon</a></div></div></div></li><li class='span3 cat-1'><div class='thumbnail'><img src=\"/BoliviaEmpresa/img/deal/filename/Real_Madrid_png_logo.png\" alt=\"Promocion\" /><div class='caption'><h2><a href=\"/BoliviaEmpresa/bolivia_companies/perfilCompany/2\">negocio2</a></h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p><h5>La promocion expira en:</h5><p>2013-10-08 16:27:00</p><h5>Tickest Disponibles</h5><p>0</p><h5>Tickest Canjeados</h5><p>2</p><div id='cupon'>No hay tickets por el Momento intente mas tarde</div></div></div></li></ul></div></div>");
			
			google.maps.event.addListener(marker_1, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
			});
			
			var myLatlng = new google.maps.LatLng(-16.29159537887275,-63.61412286758423);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				animation:  google.maps.Animation.BOUNCE		
			};
			marker_2 = createMarker(markerOptions);
			
			marker_2.set("content", "<a href=\"/BoliviaEmpresa/bolivia_companies/perfilCompany/2\">Adquirir cupon</a><div id='izquierda' class='span12'> <h3>Sucursal</h3><ul class='nav nav-tabs'><li class='active'><a href='#Su' data-toggle = 'tab'>Sucursal</a></li><li><a href='#De' data-toggle = 'tab'>Tickes</a></li></ul></div><div class='tab-content span12'><div class='tab-pane active' id='Su'><section class='block-large bg-alt'><div class='container'><div class='row'><div class='span3'></div><div class='span9'><h2> sucrsal2</h2><h4>Direccion:</h4><p class='lead'> Av. espaÃ±a 345 </p><h4>Telefono:</h4><p class='lead'> 4456376</p><h4>Correo:</h4><p class='lead'> Jm@hotmail.com</p><h4>Fecha de creacion:</h4><p class='lead'> 2013-10-08 16:49:02</p><!-- <a href='#' class='btn btn-large btn-primary'>Contact Us!</a> --><h4>Descripcion:</h4><p class='lead'> </p></div></div></div></section></div><div class='tab-pane active' id='De'><ul class='thumbnails portfolio'></ul></div></div>");
			
			google.maps.event.addListener(marker_2, "click", function(event) {
				iw.setContent(this.get("content"));
				iw.open(map, this);
			
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