<div class="companiesItems form">
<?php echo $this->Form->create('CompaniesItem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Companies Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description',array('label'=>'Descripcion','class'=>'input-large'));
		echo $this->Form->input('price',array('label'=>'Precio','class'=>'input-large'));
		echo $this->Form->input('currency',array('label'=>'Moneda','class'=>'input-large'));
		echo $this->Form->input('company_id',array('label'=>'Compania','class'=>'input-large'));
		echo $this->Form->input('item_id',array('label'=>'producto','class'=>'input-large'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompaniesItem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompaniesItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Items Images'), array('controller' => 'companies_items_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Items Image'), array('controller' => 'companies_items_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
