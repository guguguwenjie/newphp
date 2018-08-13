<?php
namespace NewSwoole\Common;
trait Instance{

	private static $instance;

	static function getInstance(...$args){
		if( ! isset(self::$instance)){
			self::$instance = new static(...$args);
		}
		return self::$instance;
	}
}