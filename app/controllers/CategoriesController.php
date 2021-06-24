<?php

namespace App\Controllers;

use App\Core\App;

class CategoriesController{

    public function index(){

        $categorias = App::get('database')->selectAllNoPag('categorias');

        return view('admin/categorias', compact('categorias'));
    }


    public function cat_create(){
        return view('admin/createcategories');
    }


    public function cat_edit(){

        $categorias = App::get('database')->read('categorias', $_POST['id']);

        return view('admin/editcategory', compact('categorias'));
    }


    public function create(){

        $parametros = [
            'nome' => $_POST['categoryName'],
        ];

        App::get('database')->insert('categorias', $parametros);

        header('Location: /categorias');

    }


    public function delete(){

        App::get('database')->delete('categorias', $_POST['id']);

        header('Location: /categorias');
    }


    public function update(){

        $parametros = [
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
        ];

        App::get('database')->edit('categorias', $parametros);

        header('Location: /categorias');
    }


}