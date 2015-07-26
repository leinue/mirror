<?php
namespace Common;

class Databases{
	
	protected static $instance;
	protected static $pdo;

    protected function __construct(){}

	static function getDatabases(){
		if(self::$instance instanceof self){
			return self::$instance;
		}else{
			// self::$pdo=new Databases\PDO();
			$config=new AccessConfig('configs');
			$DBConfig=$config->offsetGet('dbconfig');
			$dbname=$DBConfig['dbname'];
			$host=$DBConfig['host'];
			$pw=$DBConfig['password'];
			$name=$DBConfig['user'];
			self::$pdo=new \PDO("mysql:dbname=$dbname;host=$host",$name,$pw);
			self::$instance=new self;
			return self::$instance;
		}
	}

	function query($sql,$arr=null){
		return self::$pdo->query($sql, \PDO::FETCH_ASSOC)->fetch();
	}

	function execute($sql,$arr=null){
		$stmt=self::$pdo->prepare($sql);
		$result=$stmt->execute($arr);
		return $result;
	}

	function close(){
		unset(self::$pdo);
		unset(self::$instance);
	}

	function getPDO(){
		return self::$pdo;
	}

	function select($sql=null){
		echo 'select';
		echo '<br><br>';
		return self::$instance;
	}

	function update($sql=null,$arr=null){
		echo 'update';
		echo '<br><br>';
		return self::$instance;
	}

	function delete(){
		return self::$instance;
	}

	function limit(){
		return self::$instance;
	}

	function order(){
		return self::$instance;
	}

}

?>