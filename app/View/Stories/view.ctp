<div class="stories view">
<h2><?php echo __('Story'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($story['Story']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($story['Story']['content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Story'), array('action' => 'edit', $story['Story']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Story'), array('action' => 'delete', $story['Story']['id']), null, __('Are you sure you want to delete # %s?', $story['Story']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Story'), array('action' => 'add')); ?> </li>
	</ul>
</div>
