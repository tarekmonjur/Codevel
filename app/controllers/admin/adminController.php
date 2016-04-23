<?php 
namespace Tarek\controllers\admin;

use Tarek\controllers\Controller;

class DashboardController extends Controller{
	public function __construct(){
		parent::__construct();

	}


	public function index(){
		views('welcome');
	}
	


}