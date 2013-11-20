<div class = "container">
	<div class "row">
		<div class ="span11">
<div class="ads form">
<?php echo $this->FormEnum->create('Ad'); ?>
	<fieldset>
		<legend><?php echo __('Add Ad'); ?></legend>
	<?php
		echo $this->FormEnum->input('deadline',array('label'=>'Fecha limite'));
		echo $this->FormEnum->input('state',array('label'=>'Estado'));
		echo $this->FormEnum->input('company_id',array('label'=>'Compania'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="form-actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>

		</div>
	</div>
</div>