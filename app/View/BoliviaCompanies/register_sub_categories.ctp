<div class="subCategories form">
<?php echo $this->Form->create('SubCategory',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Sub Category'); ?></legend>
	<?php
                echo $this->Form->input('category_id',array('label'=>'Categoria'));
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('filename',array('type' => 'file','label'=>'Seleccionar Imagen'));
		echo $this->Form->input('dir', array('type' => 'hidden'));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>