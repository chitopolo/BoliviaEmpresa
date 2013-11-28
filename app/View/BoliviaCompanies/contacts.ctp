<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('last_name');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('e-mail');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

