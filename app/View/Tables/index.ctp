<h2>Tables's List</h2>
<?php
echo $this->Html->link("Add a new table", array('controller' => 'tables', 'action' => 'nuevo'));
?>
<table>
    <tr>
        <td><strong>Serial</strong></td>
        <td><strong>Seats</strong></td>
        <td><strong>Position</strong></td>
        <td><strong>Created</strong></td>
        <td><strong>Modified</strong></td>
        <td><strong>In Charge</strong></td>
        <td><strong>Edit</strong></td>
        <td><strong>Delete</strong></td>
    </tr>

    <?php foreach ($tables as $table): ?>
        <tr>
            <td><?php echo $table['Table']['serie']; ?></td>
            <td><?php echo $table['Table']['asientos']; ?></td>
            <td><?php echo $table['Table']['ubicacion'];?></td>
            <td><?php echo $this->Time->format('d-m-Y | h:i A',$table['Table']['created']);?></td>
            <td><?php echo $this->Time->format('d-m-Y | h:i A',$table['Table']['modified']);?></td>
            <td><?php echo $this->Html->link($table['Waiter']['nombre'].' '.$table['Waiter']['apellido'],
                array('controller' => 'waiters','action' => 'ver', $table['Waiter']['ID']));?></td>
            <td> <?php echo $this->Html->link('Edit', array('controller'=> 'tables', 'action'=> 'editar'
            , $table['Table']['ID']));?></td>
            <td> <?php echo $this->Form->postlink('Delete', array('action'=> 'eliminar'
            , $table['Table']['ID']), array('confirm'=> "Do yo want to delete table N°(".$table['Table']['ID'].") with serial ".$table['Table']['serie'].' ?'));?></td>
        </tr>
    <?php endforeach; ?>
</table>
