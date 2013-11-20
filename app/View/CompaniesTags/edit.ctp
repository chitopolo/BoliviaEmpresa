<div class="companiesTags form">
<?php echo $this->Form->create('CompaniesTag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Companies Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id',array('label'=>'Compania'));
		echo $this->Form->input('tag_id',array('label'=>'Etiqueta'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompaniesTag.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompaniesTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
