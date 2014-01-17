<?php echo $this->Form->create(null, array('action'=>'upload', 'type'=>'file')); ?>
<fieldset>
	<?php echo $this->Form->file('result'); ?>
</fieldset>
<?php echo $this->Form->end('upload'); ?>