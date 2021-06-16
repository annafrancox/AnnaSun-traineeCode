<?php
namespace App\Controllers;
use App\Core\App;

class UserController
{
 

    public function adm()
    {
        $usuarios = App::get('database')->selectAll('usuarios');
        return view ('view_adm', compact('usuarios'));
    }




    public function add()
    {
        return view('add_users'); 
    }




    public function edit()
    {
        $visual = App::get('database')->read('usuarios',  $_POST['id']);
        return view('edit_users', compact('visual')); 
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
        return redirect('');
    }












    public function create()
    {   
        
        App::get('database')->insert('usuarios', [
            'nome'=>$_POST['nome'],
            'email'=>$_POST['email'],
            'senha'=>$_POST['senha'],
            'imagem'=> $_POST['imagem']
        ]);
        return redirect('');
    }





    public function delete()
    {
        App::get('database')->delete('usuarios', $_POST['id']);
        return redirect('');
    }


    

    public function view()
    {
       $visual = App::get('database')->read('usuarios',  $_POST['id']);
        return view ('view_users', compact('visual'));
    }





}