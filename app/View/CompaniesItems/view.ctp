<div class="companiesItems view">
<h2><?php echo __('Companies Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companiesItem['CompaniesItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($companiesItem['CompaniesItem']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($companiesItem['CompaniesItem']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($companiesItem['CompaniesItem']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesItem['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companiesItem['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $companiesItem['Item']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companies Item'), array('action' => 'edit', $companiesItem['CompaniesItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companies Item'), array('action' => 'delete', $companiesItem['CompaniesItem']['id']), null, __('Are you sure you want to delete # %s?', $companiesItem['CompaniesItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Items Images'), array('controller' => 'companies_items_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Items Image'), array('controller' => 'companies_items_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Companies Items Images'); ?></h3>
	<?php if (!empty($companiesItem['CompaniesItemsImage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Companies Item Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companiesItem['CompaniesItemsImage'] as $companiesItemsImage): ?>
		<tr>
			<td><?php echo $companiesItemsImage['id']; ?></td>
			<td><?php echo $companiesItemsImage['filename']; ?></td>
			<td><?php echo $companiesItemsImage['dir']; ?></td>
			<td><?php echo $companiesItemsImage['companies_item_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'companies_items_images', 'action' => 'view', $companiesItemsImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'companies_items_images', 'action' => 'edit', $companiesItemsImage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'companies_items_images', 'action' => 'delete', $companiesItemsImage['id']), null, __('Are you sure you want to delete # %s?', $companiesItemsImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Companies Items Image'), array('controller' => 'companies_items_images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
