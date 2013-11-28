<div class="stories form">
<?php echo $this->Form->create('Story'); ?>
	<fieldset>
		<legend><?php echo __('Edit Story'); ?></legend>
	<?php
		echo $this->Form->textarea('content',array('class'=>'ckeditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>