<div class="classTypes index">
	<h2><?php echo __('Class Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('design_workspace_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($classTypes as $classType): ?>
	<tr>
		<td><?php echo h($classType['ClassType']['id']); ?>&nbsp;</td>
		<td><?php echo h($classType['ClassType']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($classType['DesignWorkspace']['name'], array('controller' => 'design_workspaces', 'action' => 'view', $classType['DesignWorkspace']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $classType['ClassType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $classType['ClassType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $classType['ClassType']['id']), null, __('Are you sure you want to delete # %s?', $classType['ClassType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Class Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Design Workspaces'), array('controller' => 'design_workspaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Design Workspace'), array('controller' => 'design_workspaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Type Parameters'), array('controller' => 'class_type_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type Parameter'), array('controller' => 'class_type_parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Input Parameters'), array('controller' => 'operation_input_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Input Parameter'), array('controller' => 'operation_input_parameters', 'action' => 'add')); ?> </li>
	</ul>
</div>
