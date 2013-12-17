<div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Add Group'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('description',array('label'=>'Descripcion'));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>