<div class="projects view">
<h2><?php  echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quotes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Quotes']['id'], array('controller' => 'quotes', 'action' => 'view', $project['Quotes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clients'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Clients']['title'], array('controller' => 'clients', 'action' => 'view', $project['Clients']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Streetnumber'); ?></dt>
		<dd>
			<?php echo h($project['Project']['streetnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Streetname'); ?></dt>
		<dd>
			<?php echo h($project['Project']['streetname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($project['Project']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($project['Project']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($project['Project']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visitedate'); ?></dt>
		<dd>
			<?php echo h($project['Project']['visitedate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visitperiod'); ?></dt>
		<dd>
			<?php echo h($project['Project']['visitperiod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visittype'); ?></dt>
		<dd>
			<?php echo h($project['Project']['visittype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quotes'), array('controller' => 'quotes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
