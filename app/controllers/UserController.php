<?php
namespace App\Controllers;
use App\Core\App;

class UserController
{
 

    public function adm()
    {
        $usuarios = App::get('database')->selectAll('users');
        //die(var_dump($usuarios));
        return view ('view_adm', compact('usuarios'));
    }




    public function add()
    {
        return view('add_users'); 
    }




    public function edit()
    {
        $visual = App::get('database')->read('users',  $_POST['id']);
        return view('edit_users', compact('visual')); 
    }






    public function create()
    {   
        
        App::get('database')->insert('users', [
            'nome'=>$_POST['nome'],
            'email'=>$_POST['email'],
            'senha'=>$_POST['senha'],
            'foto'=> $_POST['foto']
        ]);
        return redirect('');
    }





    public function delete()
    {
        App::get('database')->delete('users', $_POST['id']);
        return redirect('');
    }


    

    public function view()
    {
       $visual = App::get('database')->read('users',  $_POST['id']);
        return view ('view_users', compact('visual'));
    }





}