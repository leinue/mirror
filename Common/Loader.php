<?php

namespace Common;

require BASEDIR.'/Common/functions.php';

class Loader{

	static function autoload($class){
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
	}

}

?>