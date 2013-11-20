<?php
 echo $this->Session->flash(); 
 //echo $sessio_name;
print_r($this->Session->read($sessio_name));
if(count($this->Session->read($sessio_name))>0){?>

<div class='span12'>
    <div class='row-fluid'> 
   <?php $i=0; foreach ($this->Session->read($sessio_name) as $val){ ?>
        <div class='span1' id ='<?=$sessio_name.$i ?>'>
               <div class='row-fluid'>
                   <div class='span12'>
                       <a class="btn" style="color: #50615C;" onclick="eliminar_img('<?=$dir.'/'.$val['image']?>','<?=$sessio_name?>','#<?=$sessio_name.$i?>',<?=$i?>)"> <i class='icon-remove'></i></a>
                       <?php //echo $this->Html->link(__("<i class='icon-remove'></i>"), array('controller'=>'','action' => ''),array('class' => 'ok btn btn-info ','escape' => false)); ?>                       
                   </div>
               </div>
               <div class='row-fluid'>
                   <div class='span12'>
                        <?php echo $this->Html->image($dir.'/'.$val['image'],array('style'=>'width: 100px;height: 100px;'));   ?>
                 
                   </div>
               </div>                 
            </div>
        <?php $i++; } ?>
    </div>
</div>    
<?php } ?>

