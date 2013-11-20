<div class="companiesSubCategories view">
<h2><?php echo __('Companies Sub Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companiesSubCategory['CompaniesSubCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($companiesSubCategory['CompaniesSubCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($companiesSubCategory['CompaniesSubCategory']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesSubCategory['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companiesSubCategory['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesSubCategory['SubCategory']['name'], array('controller' => 'sub_categories', 'action' => 'view', $companiesSubCategory['SubCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companies Sub Category'), array('action' => 'edit', $companiesSubCategory['CompaniesSubCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companies Sub Category'), array('action' => 'delete', $companiesSubCategory['CompaniesSubCategory']['id']), null, __('Are you sure you want to delete # %s?', $companiesSubCategory['CompaniesSubCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Sub Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Sub Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
