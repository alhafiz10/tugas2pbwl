<?php

namespace App\Core;

class Controller
{
	public function view($view, $data = [])
	{
		session_start();
		if(!isset($session['nama'])){
			require_once 'app/views/login/index.php';
		}else{
			require_once 'app/views/' . $view . '.php';
		}
		
	}
	// Layout home
	public function home($view, $data = [])
	{
		require_once ROOT . "layouts/home.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}
}
