<?php
    require "model/CategoriaModel.php";
    require "model/ProdutoModel.php";

    class Home {
        
        function __construct(){
            $this->categoria = new CategoriaModel();
            $this->cproduto = new ProdutoModel();
        }

        function index(){
        //$categorias = $this->model->buscarTodos();
        include 'view/template/cabecalho.php';
        include 'view/template/menu_home.php';
        include 'view/home/listagem.php';
        include 'view/template/rodape.php';
        }


    }




//$model = new CategoriaModel();
//$model->inserir("Produto de Limpeza");
//$model->excluir(1);
//$model->atualizar("Smartphone",8);
//var_dump($model->buscarPorId(8));

?>