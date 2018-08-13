<?php
namespace NewSwoole\Http;
use FastRoute;
class Router{

	function __construct($namespace){
		$dispatcher = simpleDispatcher(function(FastRoute\RouteCollector $r) {
			$r->addRoute('GET', '/users', 'get_all_users_handler');
			// {id} 必须是一个数字 (\d+)
			$r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
			//  /{title} 后缀是可选的
			$r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
		});

	}
}