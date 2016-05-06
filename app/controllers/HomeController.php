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

		if($this->request('post') && $this->input('submit')){

			$data['firstname'] = $this->input('firstname');
			$data['lastname'] = $this->input('lastname');
			$data['username'] = $this->input('username');
			$data['email'] = $this->input('email');
			$data['password'] = md5($this->input('password'));

			$result = Users::create($data);

			if($result) {
				redirect('HomeController/home');
			}else{
				redirect('HomeController/user');
			}

		}
		
	}





}