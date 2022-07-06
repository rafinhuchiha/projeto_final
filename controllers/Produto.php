<?php
require 'model/ProdutoModel.php';
require 'controllers/Controller.php';
 
 class Produto extends Controller{

    function __construct(){
        $this->model = new ProdutoModel();
    }

    function index(){
        $produtos = ($this->model->buscarTodos());
        include 'view/template/cabecalho.php';
        include 'view/template/menu.php';
        include 'view/produto/listagem.php';
        include 'view/template/rodape.php';
      
    }

    function add(){
       include 'view/template/cabecalho.php';
       include 'view/template/menu.php';
       include 'view/produto/form.php';
       include 'view/template/rodape.php';
    }

    function editar($id){
        $categoria = $this->model->buscarPorId($id);
        include 'view/template/cabecalho.php';
        include 'view/template/menu.php';
        include 'view/categoria/form.php';
        include 'view/template/rodape.php';
     }
     

    function excluir($id){
        $this->model->excluir($id);
        header('Location: ?c=categoria');
    }

 function salvar(){
   if(isset($_POST['categoria'])  && !empty($_POST['categoria'])){
     if(empty($_POST['idcategoria'])) {
        $this->model->inserir($_POST['categoria']);
     }else{
        $this->model->atualizar($_POST['categoria'], $_POST['idcategoria']);
     }
    header('Location: ?c=categoria');
   }else{
       echo "Ocorreu um erro, pois os dados não foram enviados";
   }
 }   
 }






?>