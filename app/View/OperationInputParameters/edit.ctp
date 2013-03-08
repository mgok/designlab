<div class="operationInputParameters form">
<?php echo $this->Form->create('OperationInputParameter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Operation Input Parameter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('operation_id');
		echo $this->Form->input('class_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OperationInputParameter.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OperationInputParameter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Operation Input Parameters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('controller' => 'class_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type'), array('controller' => 'class_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
