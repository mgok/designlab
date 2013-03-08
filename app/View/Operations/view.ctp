<div class="operations view">
<h2><?php  echo __('Operation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Output Class Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operation['OutputClassType']['name'], array('controller' => 'class_types', 'action' => 'view', $operation['OutputClassType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Design Workspace'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operation['DesignWorkspace']['name'], array('controller' => 'design_workspaces', 'action' => 'view', $operation['DesignWorkspace']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operation'), array('action' => 'edit', $operation['Operation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operation'), array('action' => 'delete', $operation['Operation']['id']), null, __('Are you sure you want to delete # %s?', $operation['Operation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Operation Input Parameters'); ?></h3>
	<?php if (!empty($operation['OperationInputParameter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Operation Id'); ?></th>
		<th><?php echo __('Class Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($operation['OperationInputParameter'] as $operationInputParameter): ?>
		<tr>
			<td><?php echo $operationInputParameter['id']; ?></td>
			<td><?php echo $operationInputParameter['operation_id']; ?></td>
			<td><?php echo $operationInputParameter['class_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operation_input_parameters', 'action' => 'view', $operationInputParameter['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operation_input_parameters', 'action' => 'edit', $operationInputParameter['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operation_input_parameters', 'action' => 'delete', $operationInputParameter['id']), null, __('Are you sure you want to delete # %s?', $operationInputParameter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation Input Parameter'), array('controller' => 'operation_input_parameters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Operation Response Statuses'); ?></h3>
	<?php if (!empty($operation['OperationResponseStatus'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Operation Id'); ?></th>
		<th><?php echo __('Status Code'); ?></th>
		<th><?php echo __('Status Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($operation['OperationResponseStatus'] as $operationResponseStatus): ?>
		<tr>
			<td><?php echo $operationResponseStatus['id']; ?></td>
			<td><?php echo $operationResponseStatus['operation_id']; ?></td>
			<td><?php echo $operationResponseStatus['status_code']; ?></td>
			<td><?php echo $operationResponseStatus['status_description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operation_response_statuses', 'action' => 'view', $operationResponseStatus['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operation_response_statuses', 'action' => 'edit', $operationResponseStatus['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operation_response_statuses', 'action' => 'delete', $operationResponseStatus['id']), null, __('Are you sure you want to delete # %s?', $operationResponseStatus['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation Response Status'), array('controller' => 'operation_response_statuses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
