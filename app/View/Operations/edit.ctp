<div class="operations form">
<?php echo $this->Form->create('Operation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Operation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('short_description');
		echo $this->Form->input('description');
		echo $this->Form->input('output_class_type_id');
		echo $this->Form->input('design_workspace_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Operation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Operation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Operations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Design Workspaces'), array('controller' => 'design_workspaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Design Workspace'), array('controller' => 'design_workspaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('controller' => 'class_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output Class Type'), array('controller' => 'class_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Input Parameters'), array('controller' => 'operation_input_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Input Parameter'), array('controller' => 'operation_input_parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Response Statuses'), array('controller' => 'operation_response_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Response Status'), array('controller' => 'operation_response_statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
