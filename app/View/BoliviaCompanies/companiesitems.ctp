
<?php print_r($dataItems);


 ?>


<?php echo $this->Form->create('',array('id'=>'comitems')); ?>   
<div class="companiesItems form-horizontal">
                <fieldset>
                    <?php echo $this->Form->input('cant',array('type'=>'hidden','default'=>$can)); ?>

                    <?php for ($i = 0; $i < $can; $i++) { ?>

                                        <legend><?php echo __('Add Companies Item'); ?></legend>
                                <?php
                                        echo $this->Form->input('items',array('name'=>'items'.$i,'data-provide'=>"typeahead", 'data-items'=>"4", 'data-source'=>$strin_datos));
                                        echo $this->Form->input('description',array('name'=>'description'.$i));
                                        echo $this->Form->input('price',array('name'=>'price'.$i));
                                        echo $this->Form->input('currency',array('name'=>'currency'.$i));                                        
                                //echo $this->FormEnum->input('filename',array('type' => 'hidden','default'=>'oll'));
                                //echo $this->FormEnum->input('dir', array('type' => 'hidden','default'=>'img\user\filename'));
                                ?>
                                        <input type="file" id='<?=$i?>'  name='imgitem<?=$i?>' style="display: none" onchange="subir_img(<?=$i?>,'muchos');">
                                        <div id="imgitem<?=$i?>"></div>
                                        <div class="input-append">                     
                                            <a class="btn" style="color: #50615C;" onclick="$('#<?=$i?>').click();"> Subir Archivo</a>
                                        </div>


                    <?php } ?> 
                     <input type="hidden" id="dir" name='dir' value="/img/companies_items_image/filename" >

                    <?php echo $this->Form->input('company_id',array('type'=>'hidden','default'=>'3')); ?>
            </fieldset> 
</div>
<?php echo $this->Form->end(__('Submit')); ?>