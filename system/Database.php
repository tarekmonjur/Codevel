<?php 

class Database{
	public function __construct(){
		ActiveRecord\Config::initialize(function($config){
			$config->set_model_directory('app/models');
		    $config->set_connections([
		    		'development' => 'mysql://root:@localhost/psr_4'
		    	]);
		});
		// die('yes');
	}


	public function views(){
		echo "views";
	}


}