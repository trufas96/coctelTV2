<?php
namespace Fuel\Migrations;


class Users 
{

    function up()
    {
        \DBUtil::create_table('Users', 
            array(
                'id' => array('type' => 'int', 'constraint' => 100,'auto_increment' => true),
                'userName' => array('type' => 'varchar', 'constraint' => 100),
                'surName' => array('type' => 'varchar', 'constraint'=> 100),
                'born' => array('type' => 'varchar', 'constraint'=> 100),
                'email' => array('type' => 'varchar', 'constraint' => 100),
                'password' => array('type'=> 'varchar', 'constraint' => 200),
                'mobile' => array('type' => 'varchar', 'constraint'=> 100),
                'id_role' => array('type'=> 'int', 'constraint' => 100),
                'profilePicture' => array('type' => 'varchar', 'constraint' => 500,NULL),
                'x' => array('type' => 'varchar', 'constraint' => 100, NULL),
                'y' => array('type' => 'varchar', 'constraint' => 100, NULL)
        ), array('id'), false, 'InnoDB', 'utf8_unicode_ci',
    array(
        array(
            'constraint' => 'ForeingKeyUserToRoles',
            'key' => 'id_role',
            'reference' => array(
                'table' => 'Roles',
                'column' => 'id',
            ),
            'on_update' => 'CASCADE',
            'on_delete' => 'RESTRICT'
            ))
        );
        //\DB::query("INSERT INTO Users(id, userName, email, password, id_role, id_device, profilePicture, x, y)VALUES(NULL,'Admin','admin','5/5/1996','admin@cev.com', 'admin','979876311','1','0','0','0');")->execute();     
    }

    function down()
    {
       \DBUtil::drop_table('Users');
    }
}
?>