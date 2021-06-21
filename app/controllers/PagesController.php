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
	
	public function logar(){

		
		

		//as variaveis login e senha recebem os dados digitados na pagina anterior
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$user = App::get('annasun')->validateLogin('user',$email);	//verifica se o email == ao email no banco de dados


		//as próximas 3 linhas sao responsaveis em se conectar com o banco de dados
		//$mysqli = mysqli_connect("127.0.0.1", "root", "") or die("Sem conexão com o servidor");
		//$mysqli->select_db('annasun') or die("Sem acesso ao DB, Entre em contato com o Administrador");


		/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
		será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a página site.php ou retornara  para a página do 
		formulário inicial para que se possa tentar novamente realizar o login */
		/*if($mysqli->query("SELECT * FROM `Usuarios` WHERE `email` = $email AND `senha` = $senha") > 0 )
		{
			$_SESSION['email'] = $email;
			$_SESSION['senha'] = $senha;
			header('Location: /view_adm');
		}else{
			unset ($_SESSION['email']);
			unset ($_SESSION['senha']);
			header('Location: /login');
		}*/
	}
}


