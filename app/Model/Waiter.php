<?php

class Waiter extends AppModel
{
    public $validate = array (
        'dni' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'The DNI is required'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'The DNI must be numeric'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'DNI already exists'
            )
        ),
        'nombre' => array(
            'rule' => 'notBlank',
            'message' => 'The name is required'
        ),
        'apellido' => array(
            'rule' => 'notBlank',
            'message' => 'The last name is required'
        ),
        'telefono' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'The cellphone is required'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'The cellphone must be numeric'
            ),
        )
    ); //Array used to validate the data
}


?>