<?php
namespace Tarek\controllers\dashboard;

use Tarek\controllers\Controller;

class dashboardController extends Controller
{
    public function __construct(){
        parent::__construct();

    }


    public function index(){
        $data['title'] = "Welcome";
        $data['page'] = "Welcome Page";
        $data['controller'] = "Dashboard Controller";

        views('welcome',$data);
    }
    


}