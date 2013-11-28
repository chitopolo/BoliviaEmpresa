<?php  print_r($datosCompany); ?>
<section class="block-large bg-alt">
    <div class="row-fluid">
        <div class="span12">
            <?php foreach ($text as $val){ ?>
            <h1><?php echo $val?></h1>
            <ul class="thumbnails portfolio">
             <?php  $index = 0; 
                foreach ($datosCompany[$val] as $vl){ 
                 if($index%4===0){?>
                <li class="span3" style="margin: 0">
                        <div class="thumbnail">
                        <?php 
                             foreach ($vl['Company']['CompaniesImage'] as $img){
                                       if($img['type']=='front'){
                                              echo $this->Html->link($this->Html->image("companies_image/filename/".$img['filename'].""),array('controller' => 'Categories', 'action' => 'select1'),array('escape' => false , 'class' => 'js-fancybox','rel'=>'album'));                                                                                                                   
                                              }                                            
                                   }
                                   ?>
                               <div class="caption">
                                   <h5>
                                          <?php echo $this->Html->link($vl['Company']['name'],'javascript:void(0)',array('onclick'=>"cargarForm('\/BoliviaEmpresa\/bolivia_companies\/perfilCompany/".$vl['Company']['id']."','con1')")) ?> 
                                    </h5>
                                    <p> <?php echo $vl['Company']['description'] ?></p>
                               </div>
                        </div>
                </li>
             <?php }else{?> 
                <li class="span3">
                   <div class="thumbnail">
                      <?php 
                        foreach ($vl['Company']['CompaniesImage'] as $img){
                                  if($img['type']=='front'){
                                         echo $this->Html->link($this->Html->image("companies_image/filename/".$img['filename'].""),array('controller' => 'Categories', 'action' => 'select1'),array('escape' => false , 'class' => 'js-fancybox','rel'=>'album'));                                                                                                                   
                                         }                                            
                              }
                              ?>
                          <div class="caption">
                              <h5>
                                     <?php echo $this->Html->link($vl['Company']['name'],'javascript:void(0)',array('onclick'=>"cargarForm('\/BoliviaEmpresa\/bolivia_companies\/perfilCompany/".$vl['Company']['id']."','con1')")) ?> 

                                  </h5>
                                  <p> <?php echo $vl['Company']['description'] ?></p>
                          </div>
                   </div>
               </li>
             <?php  }
               $index++; 
                   } ?> 
            </ul><?php } ?>
        </div>
    </div>
</section>
             
          