<?php
namespace App\Controllers;
use App\Core\App;

class UserController
{

    public function index()
    {
        return view ('site/index');
    }
 

    public function adm()
    {
        $total_reg = "9";

        $pagina= $_GET['pagina'];
        if (!$pagina) {
        $pc = "1";
        } else {
        $pc = $pagina;
        }

        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;

        $num = App::get('database')->SelectAll('usuarios');
        $num = ceil($num/$total_reg);
        $usuarios = App::get('database')->selectAllPagination('usuarios', $inicio, $total_reg);

        $tables = [
            'usuarios' => $usuarios,
            'num'=> $num
        ];

        return view ('admin/usuarios/view_adm', compact('usuarios'));
    }




    public function add()
    {
        return view('admin/usuarios/add_users'); 
    }




    public function edit()
    {
        $visual = App::get('database')->read('usuarios',  $_POST['id']);
        return view('admin/usuarios/edit_users', compact('visual')); 
    }


    public function editar()
    {
        App::get('database')->edit('usuarios',[
            'id'=>$_POST['id'],
            'nome'=>$_POST['nome'],
            'email'=>$_POST['email'],
            'senha'=>$_POST['senha'],
            'imagem'=> $_POST['imagem']
        ] );
        return redirect('adminUser');
    }

    public function create()
    {   
        
        App::get('database')->insert('usuarios', [
            'nome'=>$_POST['nome'],
            'email'=>$_POST['email'],
            'senha'=>$_POST['senha'],
            'imagem'=> $_POST['imagem']
        ]);
        return redirect('adminUser');
    }





    public function delete()
    {
        App::get('database')->delete('usuarios', $_POST['id']);
        return redirect('adminUser');
    }


    

    public function view()
    {
       $visual = App::get('database')->read('usuarios',  $_POST['id']);
        return view ('admin/usuarios/view_users', compact('visual'));
    }


    public function contact()
   {
       return view('contato');
   }

   public function enviarEmail()
   {
       return view('site/enviar') ;
   }




}