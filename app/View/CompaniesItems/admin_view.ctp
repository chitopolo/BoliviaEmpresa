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
	</ul>
</div>
