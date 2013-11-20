<div class="deals form">
<?php echo $this->Form->create('Deal'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('filename');
		echo $this->Form->input('dir');
		echo $this->Form->input('deadline');
		echo $this->Form->input('format_time');
		echo $this->Form->input('expiration_time');
		echo $this->Form->input('state');
		echo $this->Form->input('branch_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Deal.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Deal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Deals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
