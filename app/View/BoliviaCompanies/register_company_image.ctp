<div class="companiesImages form">
<?php echo $this->FormEnum->create('CompaniesImage',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Companies Image'); ?></legend>
	<?php
		echo $this->FormEnum->input('type',array('label'=>'Tipo','class'=>'input-large'));
		echo $this->FormEnum->input('description',array('label'=>'Descripcion','class'=>'input-large'));
		echo $this->FormEnum->input('filename',array('type' => 'file','label'=>'Seleccione Imagen'));
		echo $this->FormEnum->input('dir', array('type' => 'hidden'));
		echo $this->FormEnum->input('company_id',array('type'=>'hidden','default'=>$id));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

