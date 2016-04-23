<?php 

class Database{

	public function __construct($connection){
		$this->setConnections($connection);

	}


	public function setConnections($connection){
//		$connections = array(
//			'development' => 'mysql://username:password@localhost/development',
//			 'pgsql' => 'pgsql://username:password@localhost/development',
//			 'sqlite' => 'sqlite://my_database.db',
//			 'oci' => 'oci://username:passsword@localhost/xe'
//			 );

		if($connection['driver'] == 'mysql' || $connection['driver'] == 'pgsql'){
			$connect = $connection['driver'].'://'.$connection['username'].':'.$connection['password'].'@'.$connection['host'].'/'.$connection['database'].'?charset='.$connection['charset'];
		}elseif ($connection['driver'] == 'sqlite'){
			$connect = $connection['driver'].'://'.$connection['database'];
		}

		$this->databaseConnection($connect);
	}


	public function databaseConnection($connect){
		ActiveRecord\Config::initialize(function($config)use ($connect){
			$config->set_model_directory('app/models');
			$config->set_connections([
				'development' =>$connect
			]);
		});
	}


}