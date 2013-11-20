<div class = "container well">
	<div class "row">
		<div class ="span11">
<div class="subCategories form">
<?php echo $this->Form->create('SubCategory',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Sub Category'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccionar Imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden'));
		echo $this->Form->input('category_id',array('label'=>'Categoria'));
		echo $this->Form->input('Company',array('label'=>'Compania'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="form-actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sub Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
		</div>
	</div>
</div>