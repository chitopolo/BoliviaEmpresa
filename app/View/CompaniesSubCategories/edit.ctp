<div class = "container well">
	<div class "row">
		<div class ="span11">
<div class="companiesSubCategories form">
<?php echo $this->Form->create('CompaniesSubCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Companies Sub Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id',array('label'=>'Compania'));
		echo $this->Form->input('sub_category_id',array('label'=>'Sub Categoria'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="form-actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompaniesSubCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompaniesSubCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies Sub Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
		</div>
	</div>
</div>