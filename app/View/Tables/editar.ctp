<h2>Edit Table</h2>

<?php echo $this->Form->create('Table'); //Create a form with the model name?>
<?php echo $this->Form->input('serie'); ?>
<?php echo $this->Form->input('asientos'); ?>
<?php echo $this->Form->input('ubicacion');?>
<?php echo $this->Form->input('waiter_id', array('options' => $waiters)); ?>
<?php echo $this->Form->end('Edit Table'); //Create a submit button?>

<?php 
    echo $this->Html->link("Back to table's list", array('controller' => 'tables', 'action' => 'index'));
?>