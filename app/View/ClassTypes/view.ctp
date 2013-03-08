<div class="classTypes view">
<h2><?php  echo __('Class Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($classType['ClassType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($classType['ClassType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Design Workspace'); ?></dt>
		<dd>
			<?php echo $this->Html->link($classType['DesignWorkspace']['name'], array('controller' => 'design_workspaces', 'action' => 'view', $classType['DesignWorkspace']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Class Type'), array('action' => 'edit', $classType['ClassType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Class Type'), array('action' => 'delete', $classType['ClassType']['id']), null, __('Are you sure you want to delete # %s?', $classType['ClassType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Design Workspaces'), array('controller' => 'design_workspaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Design Workspace'), array('controller' => 'design_workspaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Type Parameters'), array('controller' => 'class_type_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type Parameter'), array('controller' => 'class_type_parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Input Parameters'), array('controller' => 'operation_input_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Input Parameter'), array('controller' => 'operation_input_parameters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Class Type Parameters'); ?></h3>
	<?php if (!empty($classType['ClassTypeParameter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Owner Class Type Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Class Type Id'); ?></th>
		<th><?php echo __('Must'); ?></th>
		<th><?php echo __('Data Scope'); ?></th>
		<th><?php echo __('Default Value'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($classType['ClassTypeParameter'] as $classTypeParameter): ?>
		<tr>
			<td><?php echo $classTypeParameter['id']; ?></td>
			<td><?php echo $classTypeParameter['owner_class_type_id']; ?></td>
			<td><?php echo $classTypeParameter['name']; ?></td>
			<td><?php echo $classTypeParameter['class_type_id']; ?></td>
			<td><?php echo $classTypeParameter['must']; ?></td>
			<td><?php echo $classTypeParameter['data_scope']; ?></td>
			<td><?php echo $classTypeParameter['default_value']; ?></td>
			<td><?php echo $classTypeParameter['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'class_type_parameters', 'action' => 'view', $classTypeParameter['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'class_type_parameters', 'action' => 'edit', $classTypeParameter['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'class_type_parameters', 'action' => 'delete', $classTypeParameter['id']), null, __('Are you sure you want to delete # %s?', $classTypeParameter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Class Type Parameter'), array('controller' => 'class_type_parameters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Operation Input Parameters'); ?></h3>
	<?php if (!empty($classType['OperationInputParameter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Operation Id'); ?></th>
		<th><?php echo __('Class Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($classType['OperationInputParameter'] as $operationInputParameter): ?>
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
