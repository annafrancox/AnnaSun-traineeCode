<?php 

namespace App\Controllers;

use App\Core\App;

class PagesController 
{

	public function index()
	{

		return view('index');
	}

	public function produtos()
	{

		return view('produtos');
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

	public function detalhes_produtos()
	{

		return view('detalhes_produtos');
	}
}

