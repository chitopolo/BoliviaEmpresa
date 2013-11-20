<div class="companiesItemsImages view">
<h2><?php echo __('Companies Items Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companiesItemsImage['CompaniesItemsImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($companiesItemsImage['CompaniesItemsImage']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($companiesItemsImage['CompaniesItemsImage']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Companies Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesItemsImage['CompaniesItem']['id'], array('controller' => 'companies_items', 'action' => 'view', $companiesItemsImage['CompaniesItem']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companies Items Image'), array('action' => 'edit', $companiesItemsImage['CompaniesItemsImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companies Items Image'), array('action' => 'delete', $companiesItemsImage['CompaniesItemsImage']['id']), null, __('Are you sure you want to delete # %s?', $companiesItemsImage['CompaniesItemsImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Items Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Items Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Items'), array('controller' => 'companies_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Item'), array('controller' => 'companies_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
