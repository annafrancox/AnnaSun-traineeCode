<?php

namespace App\Controllers;

use App\Core\App;


class ProdutosController
{

    public function index()
    {
        $produtos = App::get('database')->selectAll('Produtos');

        $tables = [
            'produtos' => $produtos
        ];
        return view('produtos', $tables);
    }

    public function details()
    {
        $idProduto = $_GET['id'];
        $produto = App::get('database')->selectOne($idProduto, 'Produtos');

        $categoria = App::get('database')->selectOne($produto['categoria'], 'Categorias');
        $tables = [
            'produto' => $produto,
            'categoria' => $categoria
        ];

        return view('admin/produtos/detalhes-produtos', $tables);
    }

    public function admin()
    {
        $produtos = App::get('database')->selectAll('Produtos');

        $tables = [
            'produtos' => $produtos
        ];
        return view('admin/produtos/admin-produtos', $tables);
    }

    public function create()
    {
        $categorias = App::get('database')->selectAll('Categorias');

        $params = [
            'categorias' => $categorias
        ];

        return view('admin/novo-produto', $params);
    }

    public function createAction()
    {

        $params = [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'imagem' => $_POST['imagem'],
            'qtdade' => $_POST['qtdade'],
            'descricao' => $_POST['descricao'],
            'categoria' => $_POST['categoria']
        ];

        App::get('database')->insert('Produtos', $params);
        header('Location: /produtos/admin');
    }



    public function update()
    {
        $idProduto = $_POST['id'];
        $produto = App::get('database')->selectOne($idProduto, 'Produtos');
        $categorias = App::get('database')->selectAll('Categorias');

        $tables = [
            'produto' => $produto,
            'categorias' => $categorias

        ];
        return view('admin/produtos/edit-produtos', $tables);
    }

    public function updateAction()
    {

        $params = [
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'imagem' => '',
            'preco' => $_POST['preco'],
            'qtdade' => $_POST['qtdade'],
            'descricao' => $_POST['descricao'],
            'categoria' => $_POST['categoria']

        ];


        //Verificação se a imagem foi atualizada ou não
        if ($_POST['imagem'] == "") {
            $produto = App::get('database')->selectOne($_POST['id'], 'Produtos');

            $params['imagem'] = $produto['imagem'];

            App::get('database')->edit($params, 'Produtos');
            header('Location: /produtos/admin');
            exit();
        }


        $params['imagem'] = $_POST['imagem'];

        $params = App::get('database')->edit($params, 'Produtos');
        header('Location: /produtos/admin');
    }

    public function delete()
    {
        $idProduto = $_POST['id'];
        App::get('database')->delete($idProduto, 'Produtos');

        header('Location: /produtos/admin');
    }
}
