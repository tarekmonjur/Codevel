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

	
	if($config['default_controller']){
		define('default_controller',$config['default_controller']);
	}else{
		define('default_controller','HomeController');
	}


	function defaultController(){
		$default_controller = __DIR__.'/../app/controllers/'.default_controller.'.php';
		if(file_exists($default_controller)) {
			$fully_qualified_name = 'Tarek\\controllers\\'.default_controller;
			$Controller = new $fully_qualified_name();
			$Controller->index();
		}else{
			echo "Default Controller not found";
		}
	}


	function base_url($para=null){
		if(!empty($para)){
			return base_url.$para;
		}else{
			return base_url;
		}
	}


	function views($viwes=null,$data=null){
		$file = views_path.$viwes.'.php';
		if(file_exists($file)){
			if(!empty($data)){
				extract($data);
			}
			include $file;
		}else{
			echo "The " .$file." not found";
			exit;
		}
	}


	function redirect($redirect=null){
		header('Location: '.base_url($redirect));
		exit;
	}

}else{
	echo "The app/config/config.php file not found";
	exit;
}

new Model();