<?php

class Model
{
    public function __construct()
    {
        $this->database();

    }

    public function database(){
        $database_file = __DIR__.'/../config/database.php';
        if(file_exists($database_file)){
            $database = include_once $database_file;
            if($database['fetch'] == 'true'){
                $connections =  $this->connections($database);
                new Database($connections);
            }
        }
    }


    public function connections($connections){
        if(!empty($connections['default']) && $connections['default'] !=''){
            $connection = [];
            $default = $connections['default'];
            if($default == 'sqlite'){
                $connection['driver'] = $connections['connections'][$default]['driver'];
                $connection['database'] = $connections['connections'][$default]['database'];
            }else {
                $connection['driver'] = $connections['connections'][$default]['driver'];
                $connection['host'] = $connections['connections'][$default]['host'];
                $connection['database'] = $connections['connections'][$default]['database'];
                $connection['username'] = $connections['connections'][$default]['username'];
                $connection['password'] = $connections['connections'][$default]['password'];
                $connection['charset'] = $connections['connections'][$default]['charset'];
            }
            return $connection;
        }
    }


}