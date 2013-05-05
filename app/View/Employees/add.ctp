<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
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
		echo $this->Form->input('icephone');
		echo $this->Form->input('icename');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
	</ul>
</div>
