<?php 
namespace Tarek\controllers;

use Tarek\models\Users;

class HomeController extends Controller{
	public function __construct(){
		parent::__construct();
	}


	public function index(){

		$data['title'] = "Welcome";
		$data['page'] = "Welcome Page";
		$data['controller'] = "Home Controller";
		$data['active'] = "";

		views('common/header',$data);
		views('welcome',$data);
		views('common/footer');
	}


	public function home(){

		$data['title'] = "Home";
		$data['page'] = "Home Page";
		$data['controller'] = "Home Controller";
		$data['active'] = "home";

		$data['user'] = Users::all();

		views('common/header',$data);
		views('home',$data);
		views('common/footer');
	}


	public function user(){
		$data['title'] = "Add User";
		$data['page'] = "User Page";
		$data['controller'] = "Home Controller";
		$data['active'] = "user";

		views('common/header',$data);
		views('user',$data);
		views('common/footer');
	}


	public function add_user(){
		 $result = Users::create([
		 		'firstname' => 'tarek',
		 		'lastname' => 'monjur',
		 		'username' => 'tarekahammed',
		 		'email' => 'tarekmonjur@gmail.com',
		 		'password' => md5('123456')
		 	]);

		if($result)
			redirect('HomeController/home');
		
	}





}