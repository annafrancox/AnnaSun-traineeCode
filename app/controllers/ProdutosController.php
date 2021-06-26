<?php

namespace App\Controllers;

use App\Core\App;


class ProdutosController
{


    public function index()
    {
        error_reporting(E_ERROR | E_PARSE);
        $pagina= $_GET['pagina'];
        if (!$pagina) {
        $pc = "1";
        } else {
        $pc = $pagina;
        }
        $total_reg = "6";


        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;
        

        $num = App::get('database')->SelectAllCount('Produtos');
        $num = ceil($num/$total_reg);
        $produtos = App::get('database')->selectAllPagination('Produtos', $inicio, $total_reg);
        $categorias = App::get('database')->selectAllNoPag('categorias');


        $tables = [
            'produtos' => $produtos,
            'num'=> $num,
            'categorias' =>$categorias,
            'pc'=> $pc,
        ];
        return view('produtos', $tables);


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
        error_reporting(E_ERROR | E_PARSE);
        $pagina= $_GET['pagina'];
        if (!$pagina) {
        $pc = "1";
        } else {
        $pc = $pagina;
        }
        $total_reg = "9";
        


        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;

        $num = App::get('database')->SelectAllCount('Produtos');
        $num = ceil($num/$total_reg);
        

        session_start();

        if(!isset($_SESSION['email']))
		{
		    header('location: /login');
		}else{
        $produtos = App::get('database')->selectAllPagination('Produtos', $inicio, $total_reg);

        $tables = [
            'produtos' => $produtos,
            'num'=> $num,
            'pc'=> $pc,
            
        ];
            return view('admin/produtos/admin-produtos', $tables);
        }
    }



    public function create()
    {
        $categorias = App::get('database')->selectAllNoPag('categorias');


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
        $categorias = App::get('database')->selectAllNoPag('categorias');

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
            'categoria' => $_POST['categoria']
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
        error_reporting(E_ERROR | E_PARSE);
        $total_reg = "9";

        $pagina= $_GET['pagina'];
        if (!$pagina) {
        $pc = "1";
        } else {
        $pc = $pagina;
        }

        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;
        $idCategoria = $_GET['cat_id'];

        
        $num = App::get('database')->selectCatCount('produtos', 'categoria', $idCategoria);
        $num = ceil($num/$total_reg);
        $productView = App::get('database')->readCat('produtos', 'categoria', $idCategoria, $inicio, $total_reg);

        $tables = [
            'produtos' => $productView,
            'categorias' => $idCategoria,
            'num' => $num,
            'pc' => $pc
        ];

        return view('prod-per-cat', $tables);
    }



    public function search()
    {
        error_reporting(E_ERROR | E_PARSE);
        $pagina= $_GET['pagina'];
        if (!$pagina) {
        $pc = "1";
        } else {
        $pc = $pagina;
        }
        $total_reg = "9";


        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;
        
        $searchq = htmlspecialchars($_GET['q']);

        $num = App::get('database')->selectSearchCount('produtos', $searchq);
        $num = ceil($num/$total_reg);


        $result = App::get('database')->search('produtos', $searchq, $inicio, $total_reg);


        $tables = [
            'produtos' => $result,
            'num' => $num,
            'pc' => $pc,
            'search'=>$searchq
        ];

        return view('resultado-produtos', $tables);
    }
}
