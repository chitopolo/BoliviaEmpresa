<?php  print_r($datosCompany); ?>
<div class="container">
    <div class='row-fluid'>
        <div class='span12'>
             <?php
             
            foreach ($text as $val){ ?>
            <h1><?php echo $val?></h1>
            <ul class="thumbnails portfolio">
                        <?php  foreach ($datosCompany[$val] as $vl){ ?>
                    	<li class="span4 cat-3">
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
                         <?php } ?>
             </ul><?php } ?>
        </div>  
    </div>
</div>