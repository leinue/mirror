<?php
namespace Common;

class C{
	
	var $file;
	var $key;
	var $value;
	var $config;
	var $configDetail;

	function __construct($file,$key,$value=null){
		$this->key=$key;
		$this->value=$value;
		$this->file=$file;
		$this->config=new AccessConfig('configs');
		$this->configDetail=$this->config->offsetGet($this->file);
	}

	function get(){
		return $this->configDetail[$this->key];
	}

	function set(){
		$this->config->offsetSet($this->key,$this->value);
		return $this;
	}

	function cf($file,$key,$value=null){
		$this->__construct($file,$key,$value);
		return $this;
	}

}

?>