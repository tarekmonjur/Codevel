<?php 
namespace Tarek\controllers;

//use Tarek\models\Users;

class HomeController extends Controller{
	public function __construct(){
		parent::__construct();
	}


	public function index(){
//		print_r(Users::first());
//		$data['user'] = Users::first();

		$data['title'] = "Welcome";
		$data['page'] = "Welcome Page";
		$data['controller'] = "Home Controller";

		views('welcome',$data);
	}

	public function home(){

		// Users::create([
		// 		'full_name' => 'tarek',
		// 		'email' => 'tarek@gmail.com'
		// 	]);

		$data['title'] = "Home";
		$data['page'] = "Home Page";
		$data['controller'] = "Home Controller";

		views('home',$data);
	}


	public function about(){
		$data['title'] = "About Us";
		$data['page'] = "About Page";
		$data['controller'] = "Home Controller";

		views('about',$data);
	}


}