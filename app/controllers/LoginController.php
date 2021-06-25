<?php 

namespace App\Controllers;

use App\Core\App;
use mysqli;

class LoginController
{
	public function logar(){

		session_start();

		$conn = mysqli_connect("127.0.0.1", "root", "", "annasun");
		if(!$conn){
			die("Falha na conexao: " . mysqli_connect_error());
		}else{
			//echo "conexão realizada com sucesso";
		}
		
		if((isset($_POST['email'])) && (isset($_POST['senha']))){
			$email= mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, prevenindo SQL injection
			$senha = mysqli_real_escape_string($conn, $_POST['senha']);

			$sql = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha' LIMIT 1"; //seleciona as informacoes quando for igual aos campos digitados 
			$result = mysqli_query($conn, $sql);
			$resultado = mysqli_fetch_assoc($result); //caso encontre os valores o resultado > 0 senão resultado = 0


			if(empty($resultado)){
				$_SESSION['loginErro'] = "Email ou senha inválido";
				header('Location: /login');
			}elseif(isset($resultado)){
				$_SESSION['email'] = $resultado['email'];
				header('Location: /adminUser');
			}else{
				$_SESSION['loginErro'] = "Email ou senha inválido";
				header('Location: /login');
			}

		}else{
			$_SESSION['loginErro'] = "Email ou senha inválido";
			header('Location: /login');
		}

	}

	public function logout(){
		session_start();
		
		header('Location: /login');
		session_destroy();
	}
}

