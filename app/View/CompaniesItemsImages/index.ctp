<div class="companiesItemsImages index">
	<h2><?php echo __('Companies Items Images'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('companies_item_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<?php foreach ($companiesItemsImages as $companiesItemsImage): ?>
	<tr>
		<td><?php echo h($companiesItemsImage['CompaniesItemsImage']['id']); ?>&nbsp;</td>
		<td><?php echo h($companiesItemsImage['CompaniesItemsImage']['filename']); ?>&nbsp;</td>
		<td><?php echo h($companiesItemsImage['CompaniesItemsImage']['dir']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($companiesItemsImage['CompaniesItem']['id'], array('controller' => 'companies_items', 'action' => 'view', $companiesItemsImage['CompaniesItem']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companiesItemsImage['CompaniesItemsImage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companiesItemsImage['CompaniesItemsImage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companiesItemsImage['CompaniesItemsImage']['id']), null, __('Are you sure you want to delete # %s?', $companiesItemsImage['CompaniesItemsImage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Companies Items Image'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies Items'), array('controller' => 'companies_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Item'), array('controller' => 'companies_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
