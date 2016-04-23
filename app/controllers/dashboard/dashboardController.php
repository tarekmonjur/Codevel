<?php
namespace Tarek\controllers\dashboard;

use Tarek\controllers\Controller;

class dashboardController extends Controller
{
    public function __construct(){
        parent::__construct();

    }


    public function index(){
        views('welcome');
    }
    


}