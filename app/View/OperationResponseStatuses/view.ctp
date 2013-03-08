<div class="operationResponseStatuses view">
<h2><?php  echo __('Operation Response Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operationResponseStatus['OperationResponseStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operationResponseStatus['Operation']['name'], array('controller' => 'operations', 'action' => 'view', $operationResponseStatus['Operation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Code'); ?></dt>
		<dd>
			<?php echo h($operationResponseStatus['OperationResponseStatus']['status_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Description'); ?></dt>
		<dd>
			<?php echo h($operationResponseStatus['OperationResponseStatus']['status_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operation Response Status'), array('action' => 'edit', $operationResponseStatus['OperationResponseStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operation Response Status'), array('action' => 'delete', $operationResponseStatus['OperationResponseStatus']['id']), null, __('Are you sure you want to delete # %s?', $operationResponseStatus['OperationResponseStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Response Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Response Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
