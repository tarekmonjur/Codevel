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
			// print_r($uris);
			
			foreach ($uris as $key=>$value) {

				if($key == '0'){
					$controllerName = $value;
				}

				if($key == '1'){
					$functionName = $value;
				}
			}

			if(isset($controllerName)){
				$Controller_location = __DIR__.'/app/controllers/'.$controllerName.'.php';

				$dir = __DIR__.'/app/controllers';

				

				if(file_exists($Controller_location)){

					$project_name = 'Tarek';
					$package_name = 'controllers';
					$class_name = $controllerName;

					$fully_qualified_name = $project_name . '\\' . $package_name . '\\' . $class_name;
 
					$Controller = new $fully_qualified_name();



					if(isset($functionName)){
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

