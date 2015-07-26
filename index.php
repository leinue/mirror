<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

// $config=new Common\AccessConfig('Common/configs/');
// print_r($config->offsetGet('dbconfig'));

$db=Common\Databases::getDatabases();

$a=$db->query(' select * from `UserGroup` ');
print_r($a);echo '<br><br>';

$db->update()->select()->select()->select()->select();
// $db->select();
?>