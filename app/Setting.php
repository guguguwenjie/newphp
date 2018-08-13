<?php
namespace App;
class Setting{

	public $setting = array();
	function __construct(){
		$this->setting = array(
			"server" => array(
				"server_type" => HTTP_SERVER,
				"host" => "0.0.0.0",
				"port" => 9527,
				"path_depth" => 3,
				"model" => SWOOLE_PROCESS , // SWOOLE_PROCESS 多进程模式（默认） SWOOLE_BASE 基本模式
				"setting" => array(
					'task_worker_num' => 8, //异步任务进程
					'task_max_request'=>10,
					'max_request'=>5000,//强烈建议设置此配置项
					'worker_num'=>8
				)
			)
		);
	}

}
