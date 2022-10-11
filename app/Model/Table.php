<?php 

class Table extends AppModel
{
    public $belongsTo = array(
        'Waiter'=>array(
            'className'=>'Waiter',
            'foreignKey'=>'waiter_id'
        )
    );

    public $validate = array(
        'serie' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'The serie is required'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'Serie already exists'
            )
        ),
        'asientos' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'The number of seats is required'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'The number of seats must be numeric'
            )
        ),
        'ubicacion' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'The location is required'
            )
        ),
        'waiter_id' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'The waiter is required'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'The waiter must be numeric'
            )
        )
    ); //Array used to validate the data

}


?>