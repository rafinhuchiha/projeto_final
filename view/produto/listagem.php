<div class="container mt-2">
    <h1>Listagem de Produtos</h1>
    <hr>


    <a href="<?= base_url() . "?c=produto&m=add" ?>" class="btn btn-success"> Inserir Produto </a>
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
               <th class="col-6">Nome</th>
           
               <th>Foto</th>
               <th>Preço</th>
               <th>Marca</th>
                <th>Ações</th>
            </tr>
        </thead>        
        <tbody>
            <?php foreach($produtos as $produto):?>
            <tr>
                <td><?php $produto ['nome']; ?> </td>
                
                <td><?php $produto ['foto']; ?> </td>
                <td><?php $produto ['preco']; ?> </td>
                <td><?php $produto ['marca']; ?> </td>

                <td> 
                    <a href="<?= base_url() ?>?c=produto&m=excluir&id=<?= $produto ['idproduto']?>" class="btn btn-danger" title="Excluir"> <i class="fa-solid fa-trash-can"></i> </a>
                    <a href="<?= base_url() ?>?c=produto&m=editar&id=<?= $produto ['idproduto']?>" class="btn btn-primary" title="Editar"> <i class="fa-solid fa-pencil"></i> </a>    
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>