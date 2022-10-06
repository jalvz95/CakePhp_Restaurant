<h2>Waiters's List</h2>

<table>
    <tr>
        <td colspan='5'> 
        <?php 
            echo $this->Html->link("Add a new waiter", array('controller' => 'waiters',
            'action' => 'nuevo'));
        ?><br><br>
        </td>
    </tr>

    <tr>
        <td> <strong>DNI</strong></td>
        <td> <strong>First Name</strong></td>
        <td> <strong>Last Name</strong></td>
        <td> <strong>Details</strong></td>
        <td> <strong>Edit</strong></td>
        <td> <strong>Delete</strong></td>
    </tr>

    <?php foreach($waiters as $waiter): ?>
    <tr>
        <td><?php echo $waiter ['Waiter']['dni']; ?></td>
        <td><?php echo $waiter ['Waiter']['nombre']; ?></td>
        <td><?php echo $waiter ['Waiter']['apellido']; ?></td>
        <td><?php echo $this->Html->link('Details', array('controller' => 'waiters',
        'action' => 'ver', $waiter['Waiter']['ID'] )); ?></td> 
        <td><?php echo $this->Html->link('Edit', array('controller' =>'waiters', // Primer parametro texto que se muestra, y el segundo hacia donde redirige 
        'action' => 'editar', $waiter['Waiter']['ID'])); ?> </td>
        <td><?php echo $this->Form->postlink('Delete', array('action' => 'eliminar',
        $waiter['Waiter']['ID']), array('confirm' => 'Do you want to delete ' .$waiter['Waiter']['nombre']. ' ' .$waiter['Waiter']['apellido'].' from the list ?')); ?></td>
    </tr>
        <?php endforeach; ?>
        
</table>
