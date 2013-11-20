<div class = "container well">
	<div class "row">
		<div class ="span11">
<div class="companiesTags form">
<?php echo $this->Form->create('CompaniesTag'); ?>
	<fieldset>
		<legend><?php echo __('Add Companies Tag'); ?></legend>
	<?php
		echo $this->Form->input('company_id',array('label'=>'Compania'));
		echo $this->Form->input('tag_id',array('label'=>'Etiqueta'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="form-actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Companies Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
		</div>
	</div>
</div>
