<div class="companiesItems form">
<?php echo $this->Form->create('CompaniesItem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Companies Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description',array('label'=>'Descripcion','class'=>'input-large'));
		echo $this->Form->input('price',array('label'=>'Precio','class'=>'input-large'));
		echo $this->Form->input('currency',array('label'=>'Moneda','class'=>'input-large'));
		echo $this->Form->input('company_id',array('type'=>'hidden'));
		echo $this->Form->input('item_id',array('label'=>'producto','class'=>'input-large'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

