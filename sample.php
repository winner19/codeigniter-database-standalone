<?php
define('BASEPATH',__DIR__.'/');
define('APPPATH', __DIR__);
include(BASEPATH.'core/Common.php');
include(BASEPATH.'database/DB.php');
$db_data = array(
    'dsn'	=> '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'my_password',
    'database' => 'my_database_name',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db =& DB($db_data);
$query = $db->select('id, username')->from("members")->get();

foreach ($query->result() as $row)
{
    echo $row->username;
}