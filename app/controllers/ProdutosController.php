<?php

namespace App\Controllers;

use App\Core\App;


class ProdutosController
{


    public function index()
    {
        $produtos = App::get('database')->selectAll('produtos');
        $categorias = App::get('database')->selectAll('categorias');


        $tables = [
            'produtos' => $produtos,
            'categorias' => $categorias
        ];
        return view ('produtos', $tables);
    }



    public function details()
    {

        $idProduto = $_GET['id'];
        $produto = App::get('database')->read('produtos', $idProduto);

        foreach ($produto as $prod) {
            $categoria = App::get('database')->read('categorias', $prod->categoria);
        }
        $tables = [
            'produto' => $produto,
            'categoria' => $categoria
        ];

        return view('detalhes-produtos', $tables);
    }



    public function admin()
    {
        $produtos = App::get('database')->selectAll('produtos');

        $tables = [
            'produtos' => $produtos
        ];
        return view('admin/produtos/admin-produtos', $tables);
    }



    public function create()
    {
        $categorias = App::get('database')->selectAll('categorias');


        $params = [
            'categorias' => $categorias
        ];

        return view('admin/produtos/novo-produto', $params);
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

        App::get('database')->insert('produtos', $params);
        header('Location: /produtos/admin');
    }



    public function update()
    {
        $idProduto = $_POST['id'];
        $produto = App::get('database')->read('produtos', $idProduto);
        $categorias = App::get('database')->selectAll('categorias');

        $tables = [
            'produto' => $produto,
            'categorias' => $categorias

        ];
        return view('admin/produtos/edit-produtos', $tables);
    }



    public function updateAction()
    {

        //Verificação se a imagem foi atualizada ou não
        // if ($_POST['imagem'] == "") {
        //     $produto = App::get('database')->read('Produtos', $_POST['id']);


        //     $params['imagem'] = $produto['imagem'];

        //     App::get('database')->edit('Produtos', $params);
        //     header('Location: /produtos/admin');
        //     exit();/
        // }

        App::get('database')->edit('produtos',  [
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'imagem' => $_POST['imagem'],
            'preco' => $_POST['preco'],
            'qtdade' => $_POST['qtdade'],
            'categoria' => '2'
        ]);
        header('Location: /produtos/admin');
    }



    public function delete()
    {
        $idProduto = $_POST['id'];
        App::get('database')->delete('produtos', $idProduto);

        header('Location: /produtos/admin');
    }



    public function searchCategory(){

        $idCategoria = $_POST['cat_id'];

        $productView = App::get('database')->readCat('produtos', 'categoria', $idCategoria);

        $tables = [
            'produtos' => $productView,
            'categorias' => $idCategoria
        ];

        return view('prod-per-cat', $tables);
    }



    public function search()
    {
        $searchq = htmlspecialchars($_GET['q']);

        $result = App::get('database')->search('produtos', $searchq);


        $tables = [
            'produtos' => $result,
        ];

        return view('resultado-produtos', $tables);
    }
}
