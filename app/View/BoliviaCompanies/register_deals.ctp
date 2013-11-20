<div class="deals form">
<?php echo $this->FormEnum->create('Deal',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Deal'); ?></legend>
	<?php
		echo $this->FormEnum->input('name');
		echo $this->FormEnum->input('description');
		//echo $this->FormEnum->input('filename',array('type' => 'file'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden','default'=>'deal/filename'));                                  
                ?>
                
                <div id="deal"></div>
                <input type="file" id="img" name="deal" style="display: none"  onchange="subir_img('img','uno');">
                <input type="hidden" id="dir" value="/img/deal/filename" >
                <div class="input-append">                     
                    <a class="btn" style="color: #50615C;" onclick="$('#img').click();"> Subir Archivo</a>
                </div>
                
                <?php
                echo $this->FormEnum->input('deadline');
		echo $this->FormEnum->input('format_time');
		echo $this->FormEnum->input('expiration_time');
		echo $this->FormEnum->input('state');
		echo $this->FormEnum->input('branch_id',array('type'=>'hidden','default' => '3'));
	?>
                <input type="text" name='tickets'>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>