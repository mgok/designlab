<div class="operationInputParameters view">
<h2><?php  echo __('Operation Input Parameter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operationInputParameter['OperationInputParameter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operationInputParameter['Operation']['name'], array('controller' => 'operations', 'action' => 'view', $operationInputParameter['Operation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operationInputParameter['ClassType']['name'], array('controller' => 'class_types', 'action' => 'view', $operationInputParameter['ClassType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operation Input Parameter'), array('action' => 'edit', $operationInputParameter['OperationInputParameter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operation Input Parameter'), array('action' => 'delete', $operationInputParameter['OperationInputParameter']['id']), null, __('Are you sure you want to delete # %s?', $operationInputParameter['OperationInputParameter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Input Parameters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Input Parameter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('controller' => 'class_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type'), array('controller' => 'class_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
