<?php 
namespace Tarek\controllers\admin;

use Tarek\controllers\Controller;

class adminController extends Controller{
	public function __construct(){
		parent::__construct();

	}


	public function index(){
		$data['title'] = "Welcome";
		$data['page'] = "Welcome Page";
		$data['controller'] = "Admin Controller";

		views('welcome',$data);
	}
	


}