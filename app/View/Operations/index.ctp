<div class="operations index">
	<h2><?php echo __('Operations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('output_class_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('design_workspace_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($operations as $operation): ?>
	<tr>
		<td><?php echo h($operation['Operation']['id']); ?>&nbsp;</td>
		<td><?php echo h($operation['Operation']['name']); ?>&nbsp;</td>
		<td><?php echo h($operation['Operation']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($operation['Operation']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($operation['OutputClassType']['name'], array('controller' => 'class_types', 'action' => 'view', $operation['OutputClassType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($operation['DesignWorkspace']['name'], array('controller' => 'design_workspaces', 'action' => 'view', $operation['DesignWorkspace']['id'])); ?>
		</td>
		<td><?php echo h($operation['Operation']['user_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $operation['Operation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $operation['Operation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $operation['Operation']['id']), null, __('Are you sure you want to delete # %s?', $operation['Operation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Operation'), array('action' => 'add')); ?></li>
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
