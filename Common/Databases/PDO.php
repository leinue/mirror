<?php
namespace Common\Databases;

class PDO{
	
	static $db;

    function __construct(){
		return $this->getInstance();
	}

	static function getInstance(){
		if(!empty(self::$db)){
			return self::$db;
		}else{
			$config=new \Common\AccessConfig('configs');
			$DBConfig=$config->offsetGet('dbconfig');
			$dbname=$DBConfig['dbname'];
			$host=$DBConfig['host'];
			$pw=$DBConfig['password'];
			$name=$DBConfig['user'];
			self::$db=new \PDO("mysql:dbname=$dbname;host=$host",$name,$pw);
			return self::$db;
		}
	}
}

?>