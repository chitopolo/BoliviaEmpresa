
<div>   <?php //print_r($data) ?> </div>
<section id='admin'>	
    <div class="container">
        <div class="row well">  	
            <div class="span2">
              <?php echo $this->Html->image($data['User']['dir'].'/'.$data['User']['filename'],array('class'=>"img-rounded")) ?>
              <?php echo $this->Html->link(__("<i class='icon-pencil'>Editar datos <br></i>"),'javascript:void(0);',array('onclick'=>"cargarForm('\/BoliviaEmpresa\/bolivia_companies\/ViewEditUser\/".$data['User']['id']."','admin')",'class' => 'ok btn btn-info ','id'=>'edit_user','escape' => false)); ?>
              
            </div>
            <div class="span4">
              <blockquote>
                <p><?=$data['User']['first_name']?></p>
                <small><cite title="Source Title"><?=$data['Group']['name']?>  <i class="icon-map-marker"></i></cite></small>
              </blockquote>
              <p>
                <i class="icon-envelope"></i> <?=$data['User']['e-mail']?> <br>
                <i class="icon-globe"></i> <?=$data['User']['address']?> <br>
                <i class="icon-gift"></i> <?=$data['User']['date_of_birth']?>
              </p>
            </div>

        </div>

        <div id="cont"></div>
        <div id="izquierda" class="span12">
        <h3>Empresas</h3>
         
            <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                        
                         <?php $i=0; foreach ($data['Company'] as $value) {?>
                            <li><a href="#em<?=$value['id']?>" data-toggle="tab"><?=$value['name'] ?></a>
                                 
                            
                            </li>
                            
                        <?php } ?>                                               
                    </ul>
                    <div class="tab-content">
                     <?php $i=0; foreach ($data['Company'] as $value) {  ?>   
                        <div class="tab-pane" id="em<?=$value['id']?>" >
                               <div class="tabbable">
                                        <ul class="nav nav-tabs">
                                            <?php echo $this->Html->link(__("<i class='icon-pencil'>Editar datos <br></i>"),'javascript:void(0);',array('onclick'=>"cargarForm('\/BoliviaEmpresa\/bolivia_companies\/ViewEditCompany/".$value['id']."','admin')",'class' => 'ok btn btn-info ','id'=>'edit_company','escape' => false)); ?>

                                            <?php echo $this->Html->link('agregar','javascript:void(0)',array('onclick'=>"cargarForm('\/BoliviaEmpresa\/bolivia_companies\/registerBranches/1','admin')")) ?>
                                            <?php foreach ($value['Branch'] as $val) { ?>
                                             <li><a href="#su<?=$val['id'];?>" data-toggle="tab"><?=$val['name']?></a>
                                                 
                                             
                                             </li>
                                           <?php  } ?> 
                                        </ul>
                                        <div class="tab-content">
                                                 <div class="row-fluid">
                                                        <div class="span12" >
                                                            <table class="table-striped">
                                                                <thead>
                                                                    <tr>
                                                                          <th>
                                                                              Imagen
                                                                          </th>
                                                                          <th>
                                                                              nombre
                                                                          </th>
                                                                          <th>
                                                                              description
                                                                          </th>
                                                                          <th>
                                                                              precio
                                                                          </th>
                                                                          <th>
                                                                              Moneda
                                                                          </th>

                                                                    </tr>
                                                                    <?php $j =0; foreach ($value['Item'] as $items) { $j++;?>
                                                                    <tr>
                                                                        <td>
                                                                            
                                                                            <div class="span6">
                                                                                    <div id="<?=$items['name'].$j;?>" class="carousel slide">
                                                                                            <div class="carousel-inner">
                                                                                                <?php $i =0; foreach ($items['CompaniesItem']['CompaniesItemsImage'] as $imgval) { 
                                                                                                    if($i==0){  $i++;?>
                                                                                                    <div class="item active">
                                                                                                       <?php  echo $this->Html->image($imgval['dir'].'/'.$imgval['filename'],array('class'=>"img-rounded")); ?>                                                                                                                     
                                                                                                    </div>
                                                                                                    <?php }else{ ?>
                                                                                                      <div class="item">
                                                                                                       <?php  echo $this->Html->image($imgval['dir'].'/'.$imgval['filename'],array('class'=>"img-rounded")); ?>                                                                                                                     
                                                                                                    </div>  
                                                                                                <?php    } 
                                                                                                } ?>
                                                                                            </div><!-- /.carousel-inner -->
                                                                                            <a class="left carousel-control" href="#<?=$items['name'].$j;?>" data-slide="prev">&lsaquo;</a>
                                                                                            <a class="right carousel-control" href="#<?=$items['name'].$j;?>" data-slide="next">&rsaquo;</a>
                                                                                    </div><!-- /.carousel -->
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                             
                                                                        </td>
                                                                        <td>
                                                                           <?php echo  $items['name']; ?> 
                                                                        </td>
                                                                        <td>
                                                                           <?php echo $items['CompaniesItem']['description']; ?>
                                                                        </td>
                                                                        <td>
                                                                           <?php echo $items['CompaniesItem']['price']; ?> 
                                                                        </td>
                                                                        <td>
                                                                           <?php echo $items['CompaniesItem']['currency']; ?> 
                                                                        </td>
                                                                        
                                                                    </tr>             
                                                                             <?php } ?>
                                                              
                                                                </thead>
                                                            </table>
                                                        </div>
                                                 </div>
                                               
                                            
                                            <?php foreach ($value['Branch'] as $val) { ?>
                                                <div class="tab-pane" id="su<?=$val['id'];?>">
                                                    
                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                                        <div class="span4">
                                                                           <?php echo $this->Html->image($val['dir'].'/'.$val['filename']);?>                                                                                
                                                                        </div>
                                                                        <div class="span8">
                                                                                <div class="row-fluid">
                                                                                        <div class="span12">
                                                                                                <div class="span3">
                                                                                                    <strong>Nombre</strong>
                                                                                                </div>
                                                                                                <div class="span9">
                                                                                                    <strong><?=$val['name']?></strong>
                                                                                                </div>
                                                                                                <div class="span3">
                                                                                                    <strong>Direccion</strong>
                                                                                                </div>
                                                                                                <div class="span9">
                                                                                                    <strong><?=$val['address']?></strong>/div>
                                                                                                </div>
                                                                                                <div class="span3">
                                                                                                    <strong>Descripcion</strong>
                                                                                                </div>
                                                                                                <div class="span9">
                                                                                                    <strong><?=$val['description']?></strong>
                                                                                                </div>
                                                                                                <div class="span3">
                                                                                                    <strong>Telefono</strong>
                                                                                                </div>
                                                                                                <div class="span9">
                                                                                                    <strong><?=$val['phone']?></strong>
                                                                                                </div>
                                                                                                <div class="span3">
                                                                                                    <strong>E-mail</strong>
                                                                                                </div>
                                                                                                <div class="span9">
                                                                                                    <strong><?=$val['e-mail']?></strong>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                       <?php
                                                         if(isset($val['Deal'])){
                                                       foreach ($val['Deal'] as $deal) { ?>
                                                     <div class="row-fluid">
                                                            <div class="span6 deal-image-big-card">
                                                                <figure>
                                                                    <a href="/ofertas/disfruta-del-feriado-en-hostal-suites-don-miguel/">
                                                                      <?php   echo $this->Html->image($deal['dir'].'/'.$deal['filename'],array('class'=>'deal-item-img-big','itemprop'=>"image",'style'=>'width=450px;height=300px;'));          ?>
                                                                         
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                            <div class="span6 deal-description-big-card">
                                                                <div class="deal-title-big-card">
                                                                    <h3><a href="/ofertas/disfruta-del-feriado-en-hostal-suites-don-miguel/"><?php echo $deal['name'] ?></a></h3>
                                                                    <h4><?php echo $deal['description'] ?></h4>
                                                                    <div class="row-fluid deal-prices">
                                                                        <div class="span6 deal-discount">            
                                                                         <?php $deal['deadline'] ?>                                 
                                                                        </div>
                                                                        <div class="span6 deal-price">
                                                                            <a class="btn btn-danger " href="/ofertas/disfruta-del-feriado-en-hostal-suites-don-miguel/"><small> Adquirir Tickt  </small><br>Ya! </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-fluid deal-summary-big-card">
                                                                    <div class="span3">
                                                                        <div class="deal-timer-card"><span>Expiracion del cupon en:</span>
                                                                            <div class="all-deals-counter" data-counter="countdown" data-counter-date="11/02/2013 15:53:21">
                                                                                
                                                                            <?php 
                                                                                // while (true){
                                                                            $date1 = "2008-11-01 22:45:00"; 

                                                                            $date2 = "2008-12-04 13:44:01"; 

                                                                            $diff = abs(strtotime($date2) - strtotime($date1)); 

                                                                            $years   = floor($diff / (365*60*60*24)); 
                                                                            $months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
                                                                            $days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                                            $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 

                                                                            $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 

                                                                            $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 
                                                                              
                                                                            printf("%d Año, %d Mes, %d Dia, %d Hora, %d minutos\n, %d segundos\n", $years, $months, $days, $hours, $minuts, $seconds); 
                                                                                 
                                                                            /*sleep(1);
                                                                            
                                                                                 }*/
                                                                            
                                                                           //$DateOfRequest = date("Y-m-d H:i:s"); 
                                                                            ?>    
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="span3">
                                                                        <div class="deal-price-card">
                                                                            Limite de tiempo para el canje <br><del><?php echo $deal['expiration_time'].' '.$deal['format_time'];?></del>
                                                                        </div>
                                                                    </div>
                                                                    <div class="span3">
                                                                        <div class="deal-price-card">
                                                                            <?php //sacar los campos necesarios SELECT * FROM `tickets` as t, groups_users as gu , users as u WHERE t.groups_user_id = gu.id and gu.user_id = u.id ?>
                                                                            
                                                                             Numero de tickents restantes <br><del><?php
                                                                             $intt=0;
                                                                               if(isset($deal['Ticket'])){
                                                                                foreach ($deal['Ticket'] as $tic) {
                                                                                        if($tic['deadline'] > date("Y-m-d H:i:s")){
                                                                                             $intt++;
                                                                                        } 
                                                                               }}
                                                                                echo $intt;
                                                                                ?>
                                                                            </del>
                                                                        </div>
                                                                    </div>
                                                                    <div class="span3">
                                                                        <div class="deal-price-pay">
                                                                            Tiques adquiridos <br><span>
                                                                                
                                                                                <?php 
                                                                                
                                                                                $int1=0;
                                                                                if(isset($deal['Ticket'])){
                                                                                foreach ($deal['Ticket'] as $tic) {
                                                                                        if($tic['state'] == 'inactive'){
                                                                                             $int1++;
                                                                                        } 
                                                                                }}
                                                                                echo $int1;
                                                                                ?>
                                                                                
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <?php } } ?>
                                                    </div> 
                                              
                                             <?php } ?>
                                            
                                        </div>
                                       
                                </div>
                           </div>
                       
                       <?php } ?>  
                      </div>
                  
            </div>
           
        </div>
       
    </div>

</section>


