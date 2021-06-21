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

	public function detalhes_produtos()
	{

		return view('detalhes_produtos');
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

	public function add_users()
	{

		return view('admin/add_users');
	}

	public function edit_users()
	{

		return view('admin/edit_users');
	}

	public function admin_produtos()
	{

		return view('admin/admin_produtos');
	}

	public function form_produto()
	{

		return view('admin/form_produto');
	}

	public function editar_produtos()
	{

		return view('admin/editar_produtos');
	}

	public function new_product()
	{

		return view('admin/new_product');
	}

	public function view_categorias()
	{

		return view('admin/view_categorias');
	}

	public function criar_categorias()
	{

		return view('admin/criar_categorias');
	}

	public function editar_categorias()
	{

		return view('admin/editar_categorias');
	}

	
}


