<h2><?php echo $waiter['Waiter']['nombre'];?> <?php echo $waiter['Waiter']['apellido']?>'s Details</h2>
<hr>
<?php echo $this->Html->link('Edit', array('controller' =>'waiters', // Primer parametro texto que se muestra, y el segundo hacia donde redirige 
            'action' => 'editar', $waiter['Waiter']['ID'])); ?>
<br><br>

<p><strong>DNI: </strong> <?php echo $waiter['Waiter']['dni']; ?></p>
<p><strong>Cellphone: </strong> <?php echo $waiter['Waiter']['telefono']; ?></p>
<p><strong>Created: </strong> <?php echo $this->Time->format('d-m-Y ; h:i A',$waiter['Waiter']['created']); ?></p>
<p><strong>Modified: </strong> <?php echo $this->Time->format('d-m-Y ; h:i A',$waiter['Waiter']['modified']); ?></p>

<br>
<h3>In charge of following tables:</h3>
<?php if(empty($waiter['Table'])):?>
    <p>This Waiter doesn't has any associated table</p>
<?php endif ?>

<?php foreach($waiter['Table'] as $table):?>
    <p>
        Serial: <?php echo $table['serie']; ?>
        <br>
        Seats: <?php echo $table['asientos']; ?>
        <br>
        Location: <?php echo $table['ubicacion']; ?>
        <br>
        Created: <?php echo $this->Time->format('d-m-Y ; h:i A',$table['created']); ?>
    </p>
<?php endforeach ?>
<br>
<?php 
    echo $this->Html->link("Back to waiter's list", array('controller' => 'waiters',
    'action' => 'index'));
?>