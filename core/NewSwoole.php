<?php
	use NewSwoole\Core;
	use NewSwoole\Config;
	
	foreach ([__DIR__ . '/../../../autoload.php', __DIR__ . '/../vendor/autoload.php'] as $file) {
		if (file_exists($file)) {
			require $file;
			break;
		}
	}

	function commandParser(){
		global $argv;
		$command = '';
		$options = array();
		if (isset($argv[1])) {
			$command = $argv[1];
		}
		if(isset($argv[2])){
			foreach ($argv as $item) {
				if (substr($item, 0, 2) === '--') {
					$temp = trim($item, "--");
					$temp = explode("=", $temp);
					$key = array_shift($temp);
					$options[$key] = array_shift($temp) ?: '';
				}
			}
		}
		return array($command, $options);
	}

	$Core = Core::getInstance();
	$Config = Config::getInstance();


	$server = $Config->get("server");


	list($command , $options) = commandParser();
	switch ($command) {
		case 'start':
			$Core->start($server);
		break;
		
		default:
			# code...
		break;
	}


	// if(is_file(APPPATH . "config/config.php")){
	// 	require_once APPPATH . "config/config.php";
	// }
