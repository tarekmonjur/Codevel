<?php

require_once __DIR__.'/app/start.php';

$base_url = base_url();
if( $base_url !='' || $base_url !=" "){

	$full_url = url();
	$full_uri = uri();
	$url = cut_http($base_url);

	if(!empty($full_uri) || $full_uri !=""){

		if($full_url == $url){
			defaultController();
		}else{
			$uri = str_replace($url, "", $full_url);
			$uris = explode('/',$uri);

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
					$fully_qualified_name = $app_name . '\\' . $controller_location . '\\' . $class_name;
					$Controller = new $fully_qualified_name();

					if(isset($functionName) && !empty($functionName)){
						if(method_exists($Controller,$functionName)) {
							$Controller->$functionName();
						}else{
							echo $controller__file_location." file <b>".$functionName."</b> function not found";
						}
					}else{
						$Controller->index();
					}
				}else{
					echo $controller__file_location." Controller file not found";
				}
					
			}
		}
		
	}else{
		defaultController();
	}
}else{
	echo "Enter the base url form app/config/config.php file<br>";
}



