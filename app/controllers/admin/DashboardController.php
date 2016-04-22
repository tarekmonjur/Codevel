<?php 
namespace Tarek\controllers\admin;

class DashboardController{
	public function __construct(){
		// die('home');
	}


	public function index(){
		views('welcome');
	}

	public function home(){
		views('home');
	}


	public function about(){
		views('about');
	}


}