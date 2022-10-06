<h2>New Waiter</h2>

<?php

echo $this->Form->create('Waiter'); //Create a form with the model name
echo $this->Form->input('dni');
echo $this->Form->input('nombre'); //Create a input with the field name
echo $this->Form->input('apellido');
echo $this->Form->input('telefono');
echo $this->Form->end('Add Waiter'); //Create a submit button with the text

?>

<?php 
    echo $this->Html->link("Back to waiter's list", array('controller' => 'waiters',
    'action' => 'index'));
?>