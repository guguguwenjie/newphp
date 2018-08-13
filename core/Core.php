<?php
namespace NewSwoole;
use NewSwoole\Common\Instance;
use NewSwoole\Server\ServerManger;

class Core{

	use Instance;

	public function __construct(){
		
	}

	static function start($params){
		ServerManger::getInstance()->run($params);
	}
}