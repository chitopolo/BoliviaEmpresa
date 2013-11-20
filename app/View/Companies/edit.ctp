<div class = "container well">
	<div class "row">
		<div class ="span11">
<div class="companies form">
<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo __('Edit Company'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label' => 'Nombre' , 'class'=>"input-large", 'placeholder'=>"Nombre"));
		echo $this->Form->input('address',array('label' => 'Direccion' , 'class'=>"input-large", 'placeholder'=>"Direccion"));
		echo $this->Form->input('phone',array('label' => 'Telefono' , 'class'=>"input-large"));
		echo $this->Form->input('e-mail',array('label' => 'E-mail' , 'class'=>"input-large"));
		echo $this->Form->input('web',array('label' => 'Web' , 'class'=>"input-large"));
		echo $this->Form->input('description',array('label' => 'Descripcion' , 'class'=>"input-large",'placeholder'=>"Descripcion"));
		echo $this->Form->input('state',array('label' => 'Estado' , 'class'=>"input-large"));
		echo $this->Form->input('groups_user_id',array('label' => 'Grupo de Usuarios' , 'class'=>"input-large"));
		echo $this->Form->input('Item',array('label' => 'Producto' , 'class'=>"input-large"));
		echo $this->Form->input('SubCategory',array('label' => 'Sub Categoria' , 'class'=>"input-large"));
		echo $this->Form->input('Tag',array('label' => 'Etiqueta' , 'class'=>"input-large"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Company.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Company.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups Users'), array('controller' => 'groups_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groups User'), array('controller' => 'groups_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ads'), array('controller' => 'ads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ad'), array('controller' => 'ads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Images'), array('controller' => 'companies_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Image'), array('controller' => 'companies_images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
		</div>
	</div>
</div>