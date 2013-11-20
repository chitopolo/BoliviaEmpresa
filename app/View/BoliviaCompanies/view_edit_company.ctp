<div class="companies form">
<?php echo $this->FormEnum->create('Company'); ?>
	<fieldset>
		<legend><?php echo __('Registrar Empresa'); ?></legend>
	<?php
                echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('name');
		echo $this->FormEnum->input('address');
		echo $this->FormEnum->input('phone');
		echo $this->FormEnum->input('e-mail');
		echo $this->FormEnum->input('web');
		echo $this->FormEnum->input('description');
		echo $this->FormEnum->input('state');                
                echo $this->FormEnum->input('groups_user_id',array('type' => 'hidden','default'=>'1'));     
                ?>                
                <select name="Category" id="Category" required="required">
                    <?php foreach ($categories as $val){?>
                        <option value=<?=$val['Category']['id']?> > <?=$val['Category']['name']?></option>
                    <?php } ?>                     
                </select>                  
                 <div id="desceipcionCategory"></div>                 
		<?php echo $this->FormEnum->input('SubCategory'); ?>  
                 
                <div id="regiscompany" class="dropdown"> 
                    <input name="conpanytag" value="<? foreach ($tags as $value) { echo $value['Tag']['name'].' ';} ?>" class="dropdown-toggle" data-toggle="dropdown" placeholder="que buscar?" autocomplete="on" autocorrect="on" spellcheck="true" type="text" id="registercompanytag">
                    <ul class="dropdown-menu">
                        <li>
                            <ul id="registertag">

                            </ul>
                        </li>
                    </ul>
                </div>
		<?php // echo $this->FormEnum->input('Tag'); ?>                               
	</fieldset>
<?php echo $this->Form->end(__('Siguiente'));


?>
</div>
<div class="actions">	
<ul>
    <li><?php echo $this->Html->link(__('Anterior'), array('action' => 'index'),array('class'=>'btn')); ?></li>		
</ul>
</div>
