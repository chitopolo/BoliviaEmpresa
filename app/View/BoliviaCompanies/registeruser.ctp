<div class="users form">
    
<?php echo $this->FormEnum->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->FormEnum->input('first_name');
		echo $this->FormEnum->input('last_name');
		echo $this->FormEnum->input('date_of_birth');
		echo $this->FormEnum->input('ci');
		echo $this->FormEnum->input('sex');
		echo $this->FormEnum->input('address');
		echo $this->FormEnum->input('phone');
		echo $this->FormEnum->input('cellular');
		echo $this->FormEnum->input('e-mail');
                //echo $this->FormEnum->input('filename',array('type' => 'hidden','default'=>'oll'));
                echo $this->FormEnum->input('dir', array('type' => 'hidden','default'=>'user/filename'));
                ?>
                
                <div id="user"></div>
                <input type="file" id="img" class="imgg" name="user" style="display: none"  onchange="subir_img('img','uno');">
                <input type="hidden" id="dir" value="/img/user/filename" >
                <div class="input-append">                     
                    <a class="btn" style="color: #50615C;" onclick="$('#img').click();"> Subir Archivo</a>
                </div>
                
                <?php		
		echo $this->FormEnum->input('username');
		echo $this->FormEnum->input('password');
		echo $this->FormEnum->input('state');
		echo $this->FormEnum->input('Group');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Siguiente')); ?>
</div>
