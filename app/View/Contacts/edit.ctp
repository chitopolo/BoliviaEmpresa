<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('e-mail');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contact.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Contact.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
	</ul>
</div>
