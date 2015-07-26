<?php

namespace Factory;

class Factory{

	private $instance;

	private function __construct(){}

	static function getInstance($obj==null){
		if($instance instanceof self || !is_object($obj)){
			return self::$instance;
		}else{
			self::$instance=new $obj();
			return self::$instance;
		}
	}


}

?>