<div class="designWorkspaces view">
<h2><?php  echo __('Design Workspace'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($designWorkspace['DesignWorkspace']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($designWorkspace['Project']['name'], array('controller' => 'projects', 'action' => 'view', $designWorkspace['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($designWorkspace['DesignWorkspace']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wsdl Url'); ?></dt>
		<dd>
			<?php echo h($designWorkspace['DesignWorkspace']['wsdl_url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Design Workspace'), array('action' => 'edit', $designWorkspace['DesignWorkspace']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Design Workspace'), array('action' => 'delete', $designWorkspace['DesignWorkspace']['id']), null, __('Are you sure you want to delete # %s?', $designWorkspace['DesignWorkspace']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Design Workspaces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Design Workspace'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('controller' => 'class_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type'), array('controller' => 'class_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Class Types'); ?></h3>
	<?php if (!empty($designWorkspace['ClassType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Design Workspace Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($designWorkspace['ClassType'] as $classType): ?>
		<tr>
			<td><?php echo $classType['id']; ?></td>
			<td><?php echo $classType['name']; ?></td>
			<td><?php echo $classType['design_workspace_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'class_types', 'action' => 'view', $classType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'class_types', 'action' => 'edit', $classType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'class_types', 'action' => 'delete', $classType['id']), null, __('Are you sure you want to delete # %s?', $classType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Class Type'), array('controller' => 'class_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Operations'); ?></h3>
	<?php if (!empty($designWorkspace['Operation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Output Class Type Id'); ?></th>
		<th><?php echo __('Design Workspace Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($designWorkspace['Operation'] as $operation): ?>
		<tr>
			<td><?php echo $operation['id']; ?></td>
			<td><?php echo $operation['name']; ?></td>
			<td><?php echo $operation['short_description']; ?></td>
			<td><?php echo $operation['description']; ?></td>
			<td><?php echo $operation['output_class_type_id']; ?></td>
			<td><?php echo $operation['design_workspace_id']; ?></td>
			<td><?php echo $operation['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operations', 'action' => 'view', $operation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operations', 'action' => 'edit', $operation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operations', 'action' => 'delete', $operation['id']), null, __('Are you sure you want to delete # %s?', $operation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
