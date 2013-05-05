<div class="employees view">
<h2><?php  echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Givenname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['givenname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Streetnumber'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['streetnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Streetname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['streetname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Homephone'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['homephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobilephone'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['mobilephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Icephone'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['icephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Icename'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['icename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
	</ul>
</div>
