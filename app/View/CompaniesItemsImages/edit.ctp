<div class="companiesItemsImages form">
<?php echo $this->Form->create('CompaniesItemsImage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Companies Items Image'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('filename');
		echo $this->Form->input('dir');
		echo $this->Form->input('companies_item_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompaniesItemsImage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompaniesItemsImage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies Items Images'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies Items'), array('controller' => 'companies_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Item'), array('controller' => 'companies_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
