<div class="classTypes form">
<?php echo $this->Form->create('ClassType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Class Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('design_workspace_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClassType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClassType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Design Workspaces'), array('controller' => 'design_workspaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Design Workspace'), array('controller' => 'design_workspaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Type Parameters'), array('controller' => 'class_type_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type Parameter'), array('controller' => 'class_type_parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Input Parameters'), array('controller' => 'operation_input_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Input Parameter'), array('controller' => 'operation_input_parameters', 'action' => 'add')); ?> </li>
	</ul>
</div>
