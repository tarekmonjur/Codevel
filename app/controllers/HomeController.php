<?php 
namespace Tarek\controllers;

use Tarek\models\Users;

class HomeController extends Controller{
	public function __construct(){
		parent::__construct();
	}


	public function index(){
//		print_r(Users::first());
		views('welcome');
	}

	public function home(){

		// Users::create([
		// 		'full_name' => 'tarek',
		// 		'email' => 'tarek@gmail.com'
		// 	]);

		views('home');
	}


	public function about(){
		views('about');
	}


}