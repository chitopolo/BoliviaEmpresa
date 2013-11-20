<div class="consultations index">
	<h2><?php echo __('Consultations'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('branch_id'); ?></th>
			<th><?php echo $this->Paginator->sort('groups_user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<?php foreach ($consultations as $consultation): ?>
	<tr>
		<td><?php echo h($consultation['Consultation']['id']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['message']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['created']); ?>&nbsp;</td>
		<td><?php echo h($consultation['Consultation']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($consultation['Branch']['name'], array('controller' => 'branches', 'action' => 'view', $consultation['Branch']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($consultation['GroupsUser']['id'], array('controller' => 'groups_users', 'action' => 'view', $consultation['GroupsUser']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consultation['Consultation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consultation['Consultation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consultation['Consultation']['id']), null, __('Are you sure you want to delete # %s?', $consultation['Consultation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Consultation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups Users'), array('controller' => 'groups_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groups User'), array('controller' => 'groups_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
