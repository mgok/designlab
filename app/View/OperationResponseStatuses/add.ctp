<div class="operationResponseStatuses form">
<?php echo $this->Form->create('OperationResponseStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Operation Response Status'); ?></legend>
	<?php
		echo $this->Form->input('operation_id');
		echo $this->Form->input('status_code');
		echo $this->Form->input('status_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Operation Response Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
