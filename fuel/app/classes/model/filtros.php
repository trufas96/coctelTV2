<?php
class Model_Filtros extends Orm\Model 
{
    protected static $_table_name = 'Filtros';
    protected static $_primary_key = array('id');
    protected static $_properties = array
    ('id' => array('data_type'=>'int'), // both validation & typing observers will ignore the PK
     'name' => array(
            'data_type' => 'varchar',
            'validation' => array('max_length' => array(500))
        ),
     'id_user' => array(
                'data_type' => 'int',
                'validation' => array('required', 'max_length' => array(100)))   
    );
    protected static $_belongs_to = array(
        'user' => array(

            'key_from' => 'id_user',
            'model_to' => 'Model_Users',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );
}
?>