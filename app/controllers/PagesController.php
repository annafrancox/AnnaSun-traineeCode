<?php 

namespace App\Controllers;

use App\Core\App;
use mysqli;

class PagesController 
{

	public function index()
	{

		return view('index');
	}

	public function contato()
	{

		return view('contato');
	}

	public function quem_somos()
	{

		return view('quem_somos');
	}

	public function login()
	{

		return view('login');
	}

	public function view_adm()
	{

		return view('admin/view_adm');
	}

}