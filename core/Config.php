<?php
namespace NewSwoole;
use NewSwoole\Common\Instance;
use App;

class Config{
	use Instance;

	private $config = array();
	public function __construct(){

		$this->config = (new App\Setting())->setting;
	}


	static function set(){

	}

	public function get($name = ""){
		return $this->config[$name];
	}
}
?>