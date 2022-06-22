<?php

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller
{

	public function index()
	{
        $data['title'] = 'Login';

		$this->home('login/index', $data);
	}

    public function login()
    {
        $username = $_POST['user_email'];
        $password = $_POST['user_password'];
    }

}
