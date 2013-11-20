<div class= "span3"></div>
<div class = "container">
	<div class "row">
		<div class ="span9">
<div class="branches form">
<?php echo $this->FormEnum->create('Branch',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Branch'); ?></legend>
	<?php
		echo $this->FormEnum->input('name', array('label' => 'Nombre' , 'class'=>"input-xxlarge", 'placeholder'=>"Nombre"));
		echo $this->FormEnum->input('address',array('label'=> 'Direccion','class'=>"input-xxlarge",'placeholder'=>"Direccion"));
		echo $this->FormEnum->input('description',array('label'=>'Descripcion','class'=>"input-xxlarge",'placeholder'=>"Descripcion"));
		echo $this->FormEnum->input('phone',array('label'=>'Telefono','class'=>"input-xxlarge",'placeholder'=>""));
		echo $this->FormEnum->input('e-mail',array('label'=>'E-mail','class'=>"input-xxlarge",'placeholder'=>"ejemplo@domino.com"));
		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Seleccionar Imagen'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden'));
		echo $this->FormEnum->input('length', array('label'=>'Longitud','class'=>"input-xxlarge",'placeholder'=>"inserte coordenada longitud"));
		echo $this->FormEnum->input('latitude',array('label'=>'Latitud','class'=>"input-xxlarge",'placeholder'=>"inserte coordenada latitud "));
		echo $this->FormEnum->input('state',array('label'=>'Estado','class'=>"input-xxlarge"));
		echo $this->FormEnum->input('city_id',array('lable'=>'Ciudad','class'=>"input-xxlarge"));
		echo $this->FormEnum->input('company_id',array('label'=>'Compania','class'=>"input-xxlarge"));
		echo $this->FormEnum->input('groups_user_id',array('label'=>'Grupo de Usuarios','class'=>"input-xxlarge"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="form-actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Branches'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups Users'), array('controller' => 'groups_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groups User'), array('controller' => 'groups_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultations'), array('controller' => 'consultations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consultation'), array('controller' => 'consultations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals'), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal'), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Maps'), array('controller' => 'maps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Map'), array('controller' => 'maps', 'action' => 'add')); ?> </li>
	</ul>
</div>
		</div>
	</div>
</div>
