<div class="consultations form">
<?php echo $this->Form->create('Consultation'); ?>
	<fieldset>
		<legend><?php echo __('Add Consultation'); ?></legend>
	<?php
		echo $this->Form->input('message',array('label'=>'Mensaje'));
		echo $this->Form->input('branch_id',array('label'=>'Sucursal','type'=>'hidden'));
		echo $this->Form->input('groups_user_id',array('label'=>'Grupo de Usuarios','type'=>'hidden'));
	?>
                
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>