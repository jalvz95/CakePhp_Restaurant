<h2>Edit Waiter</h2>

<?php echo $this->Form->create('Waiter'); //Create a form with the model name?>
<?php echo $this->Form->input('dni'); ?>
<?php echo $this->Form->input('nombre'); //Create a input with the field name?>
<?php echo $this->Form->input('apellido'); ?>
<?php echo $this->Form->input('telefono'); ?>
<?php echo $this->Form->end('Edit Waiter'); //Create a submit button with the text?>

<?php 
    echo $this->Html->link("Back to waiter's list", array('controller' => 'waiters',
    'action' => 'index')) ;
?>