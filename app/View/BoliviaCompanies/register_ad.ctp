<div class="ads form">
<?php echo $this->FormEnum->create('Ad'); ?>
	<fieldset>
		<legend><?php echo __('Add Ad'); ?></legend>
	<?php
		echo $this->FormEnum->input('deadline',array('label'=>'Fecha limite'));
		echo $this->FormEnum->input('state',array('type'=>'hidden','default'=>'active'));
		echo $this->FormEnum->input('company_id',array('label'=>'Compania'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>