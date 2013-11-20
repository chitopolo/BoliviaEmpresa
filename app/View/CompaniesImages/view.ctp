<div class="companiesImages view">
<h2><?php echo __('Companies Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companiesImage['CompaniesImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($companiesImage['CompaniesImage']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($companiesImage['CompaniesImage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($companiesImage['CompaniesImage']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($companiesImage['CompaniesImage']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesImage['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companiesImage['Company']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companies Image'), array('action' => 'edit', $companiesImage['CompaniesImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companies Image'), array('action' => 'delete', $companiesImage['CompaniesImage']['id']), null, __('Are you sure you want to delete # %s?', $companiesImage['CompaniesImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
