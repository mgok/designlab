<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Add Project'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('shortname');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Design Workspaces'), array('controller' => 'design_workspaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Design Workspace'), array('controller' => 'design_workspaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
