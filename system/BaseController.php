<?php

class BaseController
{
    public function __construct()
    {

    }


    protected function segment($segment=null){
        if(!empty($segment) || $segment !='') {
            $full_url = url();
            $url = cut_http(base_url());

            $uri = str_replace($url, "", $full_url);
            $uris = explode('/', $uri);
            
            if(isset($uris[$segment-1]))
                return $uris[$segment-1];
        }else{
            return false;
        }
    }



   protected function request($method=null){
       if(isset($_SERVER['REQUEST_METHOD'])) {
           $req_method = $_SERVER['REQUEST_METHOD'];
       }else{
           $req_method = "";
       }

       if(!empty($method) && $method !=null && $method !=''){
           if($req_method == strtoupper($method)){
               return true;
           }else{
               return false;
           }
       }else{
           return $req_method;
       }
   }


    protected function input($field){
        if(!empty($field) && $field !='' && $field !=null) {
            $request = $this->request();
            if ($request == 'POST') {
                $data = filter_input(INPUT_POST, $field);
                if(!$data)
                    $data = filter_input(INPUT_POST, $field, FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

            } elseif ($request == 'GET') {
                $data = filter_input(INPUT_GET, $field);
                if(!$data)
                    $data = filter_input(INPUT_GET, $field, FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
            }
            return $data;
        }
    }



    protected function inputAll(){
        $request = $this->request();
        $data = [];
        if ($request == 'POST') {
            $data = filter_input_array(INPUT_POST);
        } elseif ($request == 'GET') {
            $data = filter_input_array(INPUT_GET);
        }
        return $data;
    }






}