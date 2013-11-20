<div class= "container well">
	<div class = "row">
		<div class="span11">
<div class="companiesImages form">
<?php echo $this->FormEnum->create('CompaniesImage',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Companies Image'); ?></legend>
	<?php
		echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('type',array('label'=>'Tipo','class'=>"input-large"));
		echo $this->FormEnum->input('description',array('label'=>'Descripcion','class'=>"input-large"));
		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Selecionar Imagen'));
		echo $this->FormEnum->input('dir');
		echo $this->FormEnum->input('company_id',array('label'=>'Compania','class'=>"input-large"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="form-actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompaniesImage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompaniesImage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies Images'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
	</div>
		</div>
</div>