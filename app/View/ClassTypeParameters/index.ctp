<div class="classTypeParameters index">
	<h2><?php echo __('Class Type Parameters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_class_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('class_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('must'); ?></th>
			<th><?php echo $this->Paginator->sort('data_scope'); ?></th>
			<th><?php echo $this->Paginator->sort('default_value'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($classTypeParameters as $classTypeParameter): ?>
	<tr>
		<td><?php echo h($classTypeParameter['ClassTypeParameter']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($classTypeParameter['OwnerClassType']['name'], array('controller' => 'class_types', 'action' => 'view', $classTypeParameter['OwnerClassType']['id'])); ?>
		</td>
		<td><?php echo h($classTypeParameter['ClassTypeParameter']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($classTypeParameter['ClassType']['name'], array('controller' => 'class_types', 'action' => 'view', $classTypeParameter['ClassType']['id'])); ?>
		</td>
		<td><?php echo h($classTypeParameter['ClassTypeParameter']['must']); ?>&nbsp;</td>
		<td><?php echo h($classTypeParameter['ClassTypeParameter']['data_scope']); ?>&nbsp;</td>
		<td><?php echo h($classTypeParameter['ClassTypeParameter']['default_value']); ?>&nbsp;</td>
		<td><?php echo h($classTypeParameter['ClassTypeParameter']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $classTypeParameter['ClassTypeParameter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $classTypeParameter['ClassTypeParameter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $classTypeParameter['ClassTypeParameter']['id']), null, __('Are you sure you want to delete # %s?', $classTypeParameter['ClassTypeParameter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Class Type Parameter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('controller' => 'class_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type'), array('controller' => 'class_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
