
<br>
<br><br><br><br><br><br>

<div>   <?php print_r($data) ?> </div>
<section>	
    <div class="container">
        <div class="row well">
  	<hr>
            <div class="span2">
              <?php echo $this->Html->image($data['User']['dir'].'/'.$data['User']['filename'],array('class'=>"img-rounded")) ?>

                <p> <?php echo $this->Html->link("Editar ",'', array('class'=>'btn')) ?>  <br> </p>
            </div>
            <div class="span4">
              <blockquote>
                <p><?=$data['User']['first_name']." ".$data['User']['last_name']?></p>
                <small><cite title="Source Title"><?=$data['Group']['name']?>  <i class="icon-map-marker"></i></cite></small>
              </blockquote>
              <p>
                <i class="icon-envelope"></i> <?=$data['User']['e-mail']?> <br>
                <i class="icon-globe"></i> <?=$data['User']['address']?> <br>
                <i class="icon-gift"></i> <?=$data['User']['date_of_birth']?>
              </p>
            </div>
        </div>

            <div id="izquierda" class="span12">
            <h3>Sucursales</h3>

            <ul class="nav nav-tabs">
           <?php foreach ($data['Branch'] as $bran) { ?>               
            <li><a href="#<?=$bran['id']?>" data-toggle = "tab"><?=$bran['name'] ?></a></li>
            <?php  } ?>
            </ul>

            </div>
            <div class="tab-content span12">
                 <?php foreach ($data['Branch'] as $bran) { ?>  
                    <div class="tab-pane" id="<?=$bran['id']?>">
                        <div>
                          <ul class="nav nav-tabs">                            
                             <li><a href="#sucursal<?=$bran['id']?>" data-toggle = "tab">Sucursal</a></li>
                             <li><a href="#promo<?=$bran['id']?>" data-toggle = "tab">Promociones</a></li>
                             <li><a href="#consul<?=$bran['id']?>" data-toggle = "tab">Consultas</a></li>
                          </ul>  
                        </div>
                       
                            
                            <div class="tab-content span12">
                                <div class="tab-pane" id="sucursal<?=$bran['id']?>">
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                            <div class="span4">
                                               <?php $this->Html->image($bran['dir'].'/'.$bran['filename']) ?> 
                                            </div>
                                            <div class="span8"> 
                                            
                                                  <div class="row-fluid">
                                                       
                                                        <div class="span12">
                                                                <div class="span3">
                                                                    <strong>Nombre</strong>
                                                                </div>
                                                                <div class="span9">
                                                                    <strong><?=$bran['name']?></strong>
                                                                </div>
                                                                <div class="span3">
                                                                    <strong>Direccion</strong>
                                                                </div>
                                                                <div class="span9">
                                                                    <strong><?=$bran['address']?></strong>/div>
                                                                </div>
                                                                <div class="span3">
                                                                    <strong>Descripcion</strong>
                                                                </div>
                                                                <div class="span9">
                                                                    <strong><?=$bran['description']?></strong>
                                                                </div>
                                                                <div class="span3">
                                                                    <strong>Telefono</strong>
                                                                </div>
                                                                <div class="span9">
                                                                    <strong><?=$bran['phone']?></strong>
                                                                </div>
                                                                <div class="span3">
                                                                    <strong>E-mail</strong>
                                                                </div>
                                                                <div class="span9">
                                                                    <strong><?=$bran['e-mail']?></strong>
                                                                </div>
                                                                <div class="span9">
                                                                    <strong><?=$bran['created']?></strong>
                                                                </div>
                                                            
                                                            </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="tab-pane" id="promo<?=$bran['id']?>">
              <!-- revizar la fecha actual para no mostrar las fechas pasadas o mejor hacerlo desde la consulta
              determinar en q se usara las  fechas de creacion y los actives  o eliminadaos y no eliminados 
               se sugiere no eliminar nada por la depenndencia de tablas
              
              -->
              
              <ul class='thumbnails portfolio'>
                <?php 
                if(isset($bran['Deal'])){
                foreach ($bran['Deal'] as $value) { ?>
                <li class='span3 cat-1'>
                        <div class='thumbnail'>
                               <!-- <a class='js-fancybox' rel='album' href='assets/images/item_large.png'>
                                        <img src='assets/images/item_small.png' alt=''>
                                </a> -->
                              <?php  echo $this->Html->image($value['dir'].'/'.$value['filename']);?>
                                <div class='caption'>
                                    <h2><?php echo $this->Html->link($value['name'],''); ?></h2>
                                    <p><?php echo $value['description']; ?></p>
                                    <h5>La promocion expira en:</h5>
                                    <p><?php echo $value['deadline']; ?></p>
                                    
                                    <?php $time_canje=null; $id_use=0; $dis=0;$fal=0; 
                                     if(isset($value['Ticket'])){
                                        foreach ($value['Ticket'] as $ti) {
                                                if($ti['groups_user_id']==$this->Session->read('grupuser')){
                                                    $id_use=1;
                                                    $time_canje=$ti['deadline'];
                                                }
                                                if($ti['groups_user_id']==0){
                                                    $dis++;
                                                }else{
                                                    $fal++;
                                                }
                                         } 
                                      }?>
                                    <h5>Tickest Disponibles</h5>                                    
                                    <p><?php echo $dis; ?></p>
                                    <h5>Tickest Canjeados</h5>
                                    <p><?php echo $fal; ?></p>
                                    
                                    
                                    <div id='cupon'>
                                        <?php
                                        if($id_use == 1){
                                            echo 'Tienes hasta esta fecha para canjear '.$time_canje;
                                        }else{
                                            if($dis==0){
                                                echo 'No hay tickets por el Momento intente mas tarde';
                                            }else{
                                            echo $this->Html->link('Adquirir cupon','',array('class'=>'btn btn-primary'));
                                            }                                        
                                        }
                                        ?>                                        
                                    </div>
                                    
                                    
                                </div>
                        </div>
                </li>
                <?php } 
                
                   }?>
            </ul>
                                            </div>
                                            <div class="tab-pane" id="consul<?=$bran['id']?>">
                                                <div id="sidebar">
                                                    <div id="accordion">
                                                        
                                                        <?php 
                                                        if(isset($bran['Consultation'])){
                                                        foreach ($bran['Consultation'] as $dat) { ?>                                                        
                                                            <div>
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#<?=$dat['User']['ci']?>">
                                                                <?=$dat['User']['first_name']." ".$dat['User']['last_name']?>
                                                              </a>
                                                            </div>
                                                            <div id="<?=$dat['User']['ci']?>" class="collapse" style="height: 0px;">
                                                                <h3>Fecha de creacion: <?=$dat['created']?></h3>
                                                                <p><?=$dat['message']?></p>
                                                            </div> 
                                                        <?php } }?>
                                                   </div>
                                                </div>
                                            </div>                                       
                                 </div>
                       
                    </div>
                 <?php  } ?>
  
       
            </div>
    </div>
</section>

