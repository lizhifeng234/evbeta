<?php 
	ob_start();//开启header缓存
	ini_set('date.timezone', 'Asia/Shanghai');//设置时区
	ini_set('display_errors','1');
	error_reporting(E_ALL^E_NOTICE);
	define('APP_DEBUG', true);
	define('THINK_PATH','./Core/');
	define('APP_PATH','./');
	define('RUNTIME_PATH', './cache/');
	define('ROOT', dirname(__FILE__));
	require THINK_PATH.'ThinkPHP.php';//ooo
?>