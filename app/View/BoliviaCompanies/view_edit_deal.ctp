<div class="deals form">
<?php echo $this->FormEnum->create('Deal'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deal'); ?></legend>
	<?php
		echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('name');
		echo $this->FormEnum->input('description');
		echo $this->FormEnum->input('filename');
		echo $this->FormEnum->input('dir');
		echo $this->FormEnum->input('deadline');
		echo $this->FormEnum->input('format_time');
		echo $this->FormEnum->input('expiration_time');
		echo $this->FormEnum->input('state');
		echo $this->FormEnum->input('branch_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>