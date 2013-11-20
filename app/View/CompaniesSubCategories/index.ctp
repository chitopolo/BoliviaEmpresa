<div class="companiesSubCategories index">
	<h2><?php echo __('Companies Sub Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_category_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<?php foreach ($companiesSubCategories as $companiesSubCategory): ?>
	<tr>
		<td><?php echo h($companiesSubCategory['CompaniesSubCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($companiesSubCategory['CompaniesSubCategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($companiesSubCategory['CompaniesSubCategory']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companiesSubCategory['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companiesSubCategory['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($companiesSubCategory['SubCategory']['name'], array('controller' => 'sub_categories', 'action' => 'view', $companiesSubCategory['SubCategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companiesSubCategory['CompaniesSubCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companiesSubCategory['CompaniesSubCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companiesSubCategory['CompaniesSubCategory']['id']), null, __('Are you sure you want to delete # %s?', $companiesSubCategory['CompaniesSubCategory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Companies Sub Category'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
