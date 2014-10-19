<div class="auditDeltas view">
<h2><?php echo __('Audit Delta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($auditDelta['AuditDelta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Audit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($auditDelta['Audit']['id'], array('controller' => 'audits', 'action' => 'view', $auditDelta['Audit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Name'); ?></dt>
		<dd>
			<?php echo h($auditDelta['AuditDelta']['property_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Old Value'); ?></dt>
		<dd>
			<?php echo h($auditDelta['AuditDelta']['old_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Value'); ?></dt>
		<dd>
			<?php echo h($auditDelta['AuditDelta']['new_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Audit Delta'), array('action' => 'edit', $auditDelta['AuditDelta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Audit Delta'), array('action' => 'delete', $auditDelta['AuditDelta']['id']), null, __('Are you sure you want to delete # %s?', $auditDelta['AuditDelta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Audit Deltas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audit Delta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Audits'), array('controller' => 'audits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audit'), array('controller' => 'audits', 'action' => 'add')); ?> </li>
	</ul>
</div>
