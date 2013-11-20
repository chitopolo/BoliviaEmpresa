
<div class="row-fluid">
	<div class="span12">
		
	</div>
</div>


	<section class="block-large bg-alt">
		<div class="container">
                    
			<div class="row">
				<div class="span12 text-center">
					<h2><i class="icon-magic"></i> Busque una empresa, Producto o servicio</h2>                                        
                                        <div id="brow" class="dropdown">                                            
                                            <input name="conpanytag" class="dropdown-toggle" data-toggle="dropdown" placeholder="que buscar?" autocomplete="on" autocorrect="on" spellcheck="true" type="text" id="bolivia_companiesBrowser">
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <ul id="browsers">

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>                                       
                                        <div class="btn-group" data-toggle="buttons-radio">
                                            <button type="button" class="btn btn-large btn-primary" onclick="cargarFormSM('\/BoliviaEmpresa\/bolivia_companies\/companies/'+$('#bolivia_companiesBrowser').val(),'con1')" >Empresas</button>
                                            <button type="button" class="btn btn-large btn-primary" onclick="cargarForm('\/BoliviaEmpresa\/bolivia_companies\/companiesbranches/'+$('#bolivia_companiesBrowser').val(),'con1')" >Proveedores</button>                                                
                                        </div>
					<p class="lead">¡Ingrese ahora y obtenga 2 meses gratis de servicio!</p>
				</div>
			</div>
		</div>
	</section>
<div id='con1'>
    <input type="text" id="myPlaceTextBox" />
    <div id="map-canvas"></div>
    <script>
    function buss() {
       var myOptions = {
			  		zoom: 13,
					center: myLatlng,
			  		mapTypeId: google.maps.MapTypeId.ROADMAP}
				map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
				var autocompleteOptions = {
					}
				var autocompleteInput = document.getElementById('myPlaceTextBox');
				
				placesAutocomplete = new google.maps.places.Autocomplete(autocompleteInput, autocompleteOptions);
				placesAutocomplete.bindTo('bounds', map);
					google.maps.event.addListener(placesAutocomplete, 'place_changed', function() {
						alert('You selected a place');
					});

    }
                     window.onload =  buss();           
    </script>
</div>


	<!-- Signup 2 -->
	<section class="block-large bg-alt">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="well text-center">
						<h2><i class="icon-magic"></i> Registre su empresa ahora! ;)</h2>
						<form class="form-signup form-inline">							
							<button type="submit" class="btn btn-primary btn-large">Registrar empresa!</button>
							<br/><br/>
							<p>Registre su empresa y goze de <a href="#">2 meses de servicio</a>.</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



