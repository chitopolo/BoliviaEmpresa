<div class="branches form">
<?php echo $this->FormEnum->create('Branch'); ?>
	<fieldset>
            
		<legend><?php echo __('Add Branch'); ?></legend>
	<?php
                echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('name');
		echo $this->FormEnum->input('description');
		echo $this->FormEnum->input('phone');
		echo $this->FormEnum->input('e-mail');
		//echo $this->FormEnum->input('filename',array('type' => 'file'));
                
		echo $this->FormEnum->input('dir', array('type' => 'hidden','default'=>'img/branch/filename'));                                  
                ?>
                
                <div id="branch">
                    
                    <?php                                    //print_r($sessio
                    echo $this->Html->image($this->request->data['Branch']['dir'].'/'.$this->request->data['Branch']['filename'],array('style'=>'width: 100px;height: 100px;'));   ?>
                </div>
                <input type="file" id="img" name="branch" style="display: none"  onchange="subir_img('img','uno');">
                <input type="hidden" id="dir" value="/img/branch/filename" >
                <div class="input-append">                     
                    <a class="btn" style="color: #50615C;" onclick="$('#img').click();"> Subir Archivo</a>
                </div>
                
                <?php
                
		echo $this->FormEnum->input('length',array('type'=>'hidden'));
		echo $this->FormEnum->input('latitude',array('type'=>'hidden'));
		echo $this->FormEnum->input('state');                
                echo $this->FormEnum->select('city_id', $array, array('escape' => false,'default'=>$id_city));
                echo $this->FormEnum->input('address'); ?>
                <div id="city">
                <?php echo $data['map']['html']; ?>
                </div>                    
                <?php
		echo $this->FormEnum->input('company_id',array('type' => 'hidden'));
		echo $this->FormEnum->select('groups_user_id',$use,array('escape' => false,'default'=>$id_grupuse));
                //print_r($data);
                ?>
                
                
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>