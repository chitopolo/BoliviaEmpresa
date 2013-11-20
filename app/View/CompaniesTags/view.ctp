<div class="companiesTags view">
<h2><?php echo __('Companies Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companiesTag['CompaniesTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesTag['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companiesTag['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $companiesTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companies Tag'), array('action' => 'edit', $companiesTag['CompaniesTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companies Tag'), array('action' => 'delete', $companiesTag['CompaniesTag']['id']), null, __('Are you sure you want to delete # %s?', $companiesTag['CompaniesTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
