<div class="operationInputParameters index">
	<h2><?php echo __('Operation Input Parameters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('operation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('class_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($operationInputParameters as $operationInputParameter): ?>
	<tr>
		<td><?php echo h($operationInputParameter['OperationInputParameter']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($operationInputParameter['Operation']['name'], array('controller' => 'operations', 'action' => 'view', $operationInputParameter['Operation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($operationInputParameter['ClassType']['name'], array('controller' => 'class_types', 'action' => 'view', $operationInputParameter['ClassType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $operationInputParameter['OperationInputParameter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $operationInputParameter['OperationInputParameter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $operationInputParameter['OperationInputParameter']['id']), null, __('Are you sure you want to delete # %s?', $operationInputParameter['OperationInputParameter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Operation Input Parameter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('controller' => 'class_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type'), array('controller' => 'class_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
