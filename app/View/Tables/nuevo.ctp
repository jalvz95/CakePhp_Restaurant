<h2>Add Table</h2>

<?php
    echo $this->form->create('Table');
    echo $this->form->input('serie');
    echo $this->form->input('asientos');
    echo $this->form->input('ubicacion');
    echo $this->form->input('waiter_id', array('options' => $waiters));
    echo $this->form->end('Add Table');
?>

<?php 
    echo $this->Html->link("Back to table's list", array('controller' => 'tables', 'action' => 'index'));
?>