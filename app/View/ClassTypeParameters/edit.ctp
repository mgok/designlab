<div class="classTypeParameters form">
<?php echo $this->Form->create('ClassTypeParameter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Class Type Parameter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('owner_class_type_id');
		echo $this->Form->input('name');
		echo $this->Form->input('class_type_id');
		echo $this->Form->input('must');
		echo $this->Form->input('data_scope');
		echo $this->Form->input('default_value');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClassTypeParameter.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClassTypeParameter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Class Type Parameters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Class Types'), array('controller' => 'class_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Class Type'), array('controller' => 'class_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
