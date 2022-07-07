<?php
    require "model/CategoriaModel.php";

    class Categoria extends Controller{
        
        function __construct(){
            session_start();
            if(!isset($_SESSION['usuario'])){
                header('Location: ?c=restrito&m=login');
            }
            $this->model = new CategoriaModel();
        }

        function index(){
            $categorias = ($this->model->buscarTodos());
            include 'view/templete/cabecalho.php';
            include 'view/templete/menu.php';
            include 'view/categoria/listagem.php';
            include 'view/templete/rodape.php';
            
        }

        function add(){
            include 'view/templete/cabecalho.php';
            include 'view/templete/menu.php';
            include 'view/categoria/form.php';
            include 'view/templete/rodape.php';

        }

        function editar($id){
            $categoria = $this->model->buscarPorId($id);
            include 'view/templete/cabecalho.php';
            include 'view/templete/menu.php';
            include 'view/categoria/form.php';
            include 'view/templete/rodape.php';

        }

        function excluir($id){
          $this->model->excluir($id);  
          header('Location: ?c=categoria');
        }

        function salvar(){
            if(isset($_POST['categoria']) && !empty($_POST['categoria'])){
                if(empty($_POST['idcategoria'])){
                    $this->model->inserir($_POST['categoria']);
                }else{
                    $this->model->atualizar( $_POST['categoria'], $_POST['idcategoria']);
                }
                header('Location: ?c=categoria');
            }else{
                echo "Ocorreu um erro, pois os dados não foram enviados";
            }
        }
    }



?>

?>