<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('givenname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('streetnumber');
		echo $this->Form->input('streetname');
		echo $this->Form->input('suburb');
		echo $this->Form->input('postcode');
		echo $this->Form->input('state');
		echo $this->Form->input('email');
		echo $this->Form->input('homephone');
		echo $this->Form->input('mobilephone');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
	</ul>
</div>
