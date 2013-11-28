<?php print_r($company); ?>
<div class="count"></div>
        <div class="wrapper">

          <ul id="sb-slider" class="sb-slider">
            <li>
                <a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank">
                    <img src="http://tympanus.net/Development/Slicebox/images/1.jpg" class="imgslibox" alt="image1"/></a>
             <!-- <div class="sb-description">
                <h3>Creative Lifesaver</h3>
              </div> -->
             <div style="position: absolute;z-index: 1000;bottom: 10px; width: 100%">
                 <div  style="width: 15%" class='divRight'>
                     <img  src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/magento.png" >
                    </div>
                 <br><br><br><br><br>
                    <div style="width: 15%" class='hinge'>
                        <img  src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/paypal.png">
                    </div>
                 <div style="width: 15%" class='divRight'>
                     <img  src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/magento.png" >
                    </div>
                 <br><br><br><br><br>
                    <div style="width: 15%" class='hinge'>
                        <img  src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/paypal.png">
                    </div>
                 <div style="width: 15%" class='divRight'>
                     <img  src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/magento.png" >
                    </div>
                 <br><br><br><br><br>
                    <div style="width: 15%" class='hinge'>
                        <img  src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/paypal.png">
                    </div>

             </div>
            </li>
            <li>
              <a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="http://tympanus.net/Development/Slicebox/images/2.jpg" class="imgslibox"  alt="image2"/></a>
              <div style="position: absolute;z-index: 1000;bottom: 10px;">
                  <div class='divRight'>
                      <img  src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/magento.png" >
                    </div>
                    <div class='hinge'>
                            <img src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/paypal.png">
                    </div>

              </div>
            </li>
            <li>
              <a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="http://tympanus.net/Development/Slicebox/images/3.jpg" class="imgslibox" alt="image1"/></a>
              <div style="position: absolute;z-index: 1000;bottom: 10px;">
                    <div class='divRight'>
                            <img src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/magento.png" >
                    </div>
                    <div class='hinge'>
                            <img src="http://skylogix.net/wp-content/themes/ultimate/images/slider/ecommerce/paypal.png">
                    </div>

              </div>
            </li>
            <li>
              <a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="http://tympanus.net/Development/Slicebox/images/4.jpg" class="imgslibox" alt="image1"/></a>
             
            </li>
            <li>
              <a href="http://www.flickr.com/photos/strupler/2969119944" target="_blank"><img src="http://tympanus.net/Development/Slicebox/images/5.jpg" class="imgslibox" alt="image1"/></a>
             
            </li>
            <li>
              <a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank"><img src="http://tympanus.net/Development/Slicebox/images/6.jpg" class="imgslibox" alt="image1"/></a>
            
            </li>
            <li>
              <a href="http://www.flickr.com/photos/strupler/2968945158" target="_blank"><img src="http://tympanus.net/Development/Slicebox/images/7.jpg" class="imgslibox" alt="image1"/></a>
             
            </li>
          </ul>

          <div id="shadow" class="shadow"></div>

         <!-- <div id="nav-arrows" class="nav-arrows">
            <a href="#">Next</a>
            <a href="#">Previous</a>
          </div> -->

        </div>
    
    <script type="text/javascript">
   $(function() {
				
  var Page = (function() {
    
    var $navArrows = $( '#nav-arrows' ).hide(),
        $shadow = $( '#shadow' ).hide(),
        slicebox = $( '#sb-slider' ).slicebox( {
          onReady : function() {
            
            $navArrows.show();
            $shadow.show();
            
          },
          orientation : 'r',
          cuboidsRandom : true,
          disperseFactor : 30
        } ),
        
        init = function() {
          
          initEvents();
          
          
        },
        initEvents = function() {
          
          // add navigation events
          $navArrows.children( ':first' ).on( 'click', function() {
            
            slicebox.next();
            return false;
            
          } );
          
          $navArrows.children( ':last' ).on( 'click', function() {
            
            slicebox.previous();
            return false;
            
          } );
          
        };
    
    return { init : init };
    
  })();
  
  Page.init();
  
});
$(document).ready(function () {
    $(window).load(function (){
    var count = 0;
    var timer = $.timer(
            function() {
                    count++;
                   // $('.count').html("<h1>"+count+"</h1>"); 
                    if(count===7){                             
                       $('.divRight').addClass('hinge');
                       $('.hinge').removeClass('divRight');
                    }
                    if(count===10){  
                       $('.hinge').addClass('divRight');
                       $('.divRight').removeClass('hinge'); 
                    count=0;                                              
                    }                   

            },
            1000,
            true
    );	
    });
});
    </script>

<section class="block-large bg-alt">
    <div class="row-fluid">
        <div class="span12">
            <ul class="thumbnails portfolio">
                <?php 
                for ($index = 0; $index < 12; $index++) {
                   if ($index%4===0){?>
                <li class="span3" style="margin: 0">
                        <div class="thumbnail">
                                <a class="js-fancybox" rel="album" href="assets/images/item_large.png">
                                        <img src="http://www-03.ibm.com/innovation/us/watson/images/watson_at_work_intro.jpg" alt="">
                                </a>
                                <div class="caption">
                                        <h5><a href="#">Psd Wall Poster Text Effect</a></h5>
                                        <p>A subtle and beveled psd text effect to create a smart text effect.</p>
                                </div>
                        </div>
                    </li>
                   <?php }else{?> 
                     <li class="span3">
                        <div class="thumbnail">
                                <a class="js-fancybox" rel="album" href="assets/images/item_large.png">
                                        <img src="http://www-03.ibm.com/innovation/us/watson/images/watson_at_work_intro.jpg" alt="">
                                </a>
                                <div class="caption">
                                        <h5><a href="#">Psd Wall Poster Text Effect</a></h5>
                                        <p>A subtle and beveled psd text effect to create a smart text effect.</p>
                                </div>
                        </div>
                    </li>
                <?php  }
                
                   } ?>               
           </ul>
        </div>
    </div>
</section>
    
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
                <button type="button" class="btn btn-large btn-primary" onclick="cargarForm('\/BoliviaEmpresa\/Boliviacompanies\/companiesbranches/'+$('#bolivia_companiesBrowser').val(),'con1')" >Proveedores</button>                                                
            </div>
            <p class="lead">¡Ingrese ahora y obtenga 2 meses gratis de servicio!</p>
    </div>
    <div id='con1'></div>



