<div class="companiesItemsImages form">
<?php echo $this->Form->create('CompaniesItemsImage',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Companies Items Image'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('filename',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
		echo $this->Form->input('companies_item_id',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>