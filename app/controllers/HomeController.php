<?php 
namespace Tarek\controllers;

class HomeController{
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