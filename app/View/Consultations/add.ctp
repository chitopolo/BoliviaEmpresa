<div class = "container well">
	<div class "row">
		<div class ="span11">
<div class="consultations form">
<?php echo $this->Form->create('Consultation'); ?>
	<fieldset>
		<legend><?php echo __('Add Consultation'); ?></legend>
	<?php
		echo $this->Form->input('message',array('label'=>'Mensaje'));
		echo $this->Form->input('branch_id',array('label'=>'Sucursal'));
		echo $this->Form->input('groups_user_id',array('label'=>'Grupo de Usuarios'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="form-actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Consultations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups Users'), array('controller' => 'groups_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groups User'), array('controller' => 'groups_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
		</div>
	</div>
</div>