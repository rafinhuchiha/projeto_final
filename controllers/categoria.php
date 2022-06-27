<?php
    require "model/CategoriaModel.php";

    class Categoria{
        
        function __construct(){
            $this->model = new CategoriaModel();
        }

        function index(){
            var_dump($this->model->buscarTodos());
        }

        function inserir(){
            echo "testando função inserir";
        }
    }



//$model = new CategoriaModel();
//$model->inserir("Produto de Limpeza");
//$model->excluir(1);
//$model->atualizar("Smartphone",8);
//var_dump($model->buscarPorId(8));

?>