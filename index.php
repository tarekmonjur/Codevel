<?php 

// use Tarek\models\Users as Users;
use Tarek\controllers\HomeController as Home;

require_once __DIR__.'/app/start.php';

if(base_url() !='' || base_url() !=" "){
	$get_uri =  (isset($_SERVER["REQUEST_URI"]))? $_SERVER["REQUEST_URI"] : "";
	$get_url = $_SERVER["HTTP_HOST"].$get_uri;
	$base_url = base_url();

	if(stristr($base_url, "http://")){
		$url = str_replace("http://", "", $base_url);
	}elseif(stristr($base_url, "https://")){
		$url = str_replace("http://", "", $base_url);
	}else{
		$url = $base_url;
	}

	if(!empty($get_uri) || $get_uri !=""){

		if($get_url == $url){
			Home::index();
		}else{
			$uri = str_replace($url, "", $get_url);
			$uris = explode('/',$uri);
//			 print_r($uris);
			
			foreach ($uris as $key=>$value) {
				if($key == '0'){
					$controllerName = $value;
				}
				if($key == '1'){
					$functionName = $value;
				}
			}

			if(isset($controllerName) && !empty($controllerName)){

				$controller_dir = __DIR__.'/app/controllers/';
				$controller_file = $controllerName.'.php';
				$controller__file_location = $controller_dir.$controller_file;

				if(!file_exists($controller__file_location)){
					$controllers = scandir($controller_dir);
					unset($controllers[0]);
					unset($controllers[1]);

					foreach($controllers as $controller){
						$dir = $controller_dir.$controller;
						if(is_dir($dir)){
							$controller__file_location = $dir.'/'.$controller_file;
							if(file_exists($controller__file_location)){
								$app_name = 'Tarek';
								$controller_location = 'controllers\\'.$controller;
								$class_name = $controllerName;
								break;
							}
						}
					}
				}else{
					$app_name = 'Tarek';
					$controller_location = 'controllers';
					$class_name = $controllerName;
				}


				if(file_exists($controller__file_location)){
					echo $fully_qualified_name = $app_name . '\\' . $controller_location . '\\' . $class_name;
					$Controller = new $fully_qualified_name();

					if(isset($functionName) && !empty($functionName)){
						$Controller->$functionName();
					}else{
						$Controller->index();
					}
				}else{
					echo $Controller_location." Controller file not found";
				}
					
			}
		}
		
	}else{
		Home::index();
	}
}else{
	echo "Enter the base url form app/config/config.php file<br>";
}



// Users::create([
// 		'full_name' => 'tarek',
// 		'email' => 'tarek@gmail.com'
// 	]);

