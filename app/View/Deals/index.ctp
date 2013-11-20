<div class="deals index">
	<h2><?php echo __('Deals'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('format_time'); ?></th>
			<th><?php echo $this->Paginator->sort('expiration_time'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('branch_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<?php foreach ($deals as $deal): ?>
	<tr>
		<td><?php echo h($deal['Deal']['id']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['name']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['description']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['filename']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['dir']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['deadline']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['format_time']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['expiration_time']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['created']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['modified']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['state']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deal['Branch']['name'], array('controller' => 'branches', 'action' => 'view', $deal['Branch']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deal['Deal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deal['Deal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deal['Deal']['id']), null, __('Are you sure you want to delete # %s?', $deal['Deal']['id'])); ?>
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
<div class="form-actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Deal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
