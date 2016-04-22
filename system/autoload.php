<?php 


// check config from config.php file
$config_file = __DIR__.'/../config/config.php';


if(file_exists($config_file)){
	$config = require_once $config_file;

	if($config['base_url']){
		define('base_url',$config['base_url']);
	}else{
		define('base_url',$_SERVER['HTTP_HOST']);
	}


	if($config['views_path']){
		define('views_path',$config['views_path']);
	}else{
		define('views_path', __DIR__."/../app/views/");
	}

	function base_url(){
		return base_url;
	}

	function views($viwes=null){
		$file = views_path.$viwes.'.php';
		if(file_exists($file)){
			include $file;
		}else{
			echo "The " .$file." not found";
			exit;
		}
	}

}else{
	echo "The app/config/config.php file not found";
	exit;
}