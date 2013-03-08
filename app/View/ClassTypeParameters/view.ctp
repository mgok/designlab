<div class="classTypeParameters view">
<h2><?php  echo __('Class Type Parameter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($classTypeParameter['ClassTypeParameter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner Class Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($classTypeParameter['OwnerClassType']['name'], array('controller' => 'class_types', 'action' => 'view', $classTypeParameter['OwnerClassType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($classTypeParameter['ClassTypeParameter']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($classTypeParameter['ClassType']['name'], array('controller' => 'class_types', 'action' => 'view', $classTypeParameter['ClassType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Must'); ?></dt>
		<dd>
			<?php echo h($classTypeParameter['ClassTypeParameter']['must']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Scope'); ?></dt>
		<dd>
			<?php echo h($classTypeParameter['ClassTypeParameter']['data_scope']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Value'); ?></dt>
		<dd>
			<?php echo h($classTypeParameter['ClassTypeParameter']['default_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($classTypeParameter['ClassTypeParameter']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Class Type Parameter'), array('action' => 'edit', $classTypeParameter['ClassTypeParameter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Class Type Parameter'), array('action' => 'delete', $classTypeParameter['ClassTypeParameter']['id']), null, __('Are you sure you want to delete # %s?', $classTypeParameter['ClassTypeParameter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Type Parameters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type Parameter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('controller' => 'class_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type'), array('controller' => 'class_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
