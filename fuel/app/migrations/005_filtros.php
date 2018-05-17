<?php
namespace Fuel\Migrations;


class Filtros
{

    function up()
    {
        \DBUtil::create_table('Filtros', 
            array(
                'id' => array('type' => 'int', 'constraint' => 100,'auto_increment' => true),
                'name' => array('type' => 'varchar', 'constraint' => 500),
                'id_user' => array('type'=> 'int', 'constraint' => 100)
                

        ), array('id'), false, 'InnoDB', 'utf8_unicode_ci',
    array(
        array(
            'constraint' => 'ForeingKeyFiltrosToUser',
            'key' => 'id_user',
            'reference' => array(
                'table' => 'Users',
                'column' => 'id',
            ),
            'on_update' => 'CASCADE',
            'on_delete' => 'RESTRICT'
            ))
        );
           
    }

    function down()
    {
       \DBUtil::drop_table('Filtros');
    }
}


?>