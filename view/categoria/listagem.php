<!-- Cunteúdo da página -->
<div class="container mt-2">
  <h1>Lista de Categorias</h1>
  <hr>

  <a href="<?= base_url() . "?c=categoria&m=add" ?>" class="btn btn-success">Inserir Categoria</a>

  <table class="table table-hover table-responsive">
      <thead>
          <tr>
              <th class="col-10">Nome</th>
              <th>Ações</th>
          </tr>
      </thead>
      <tbody>
          <?php foreach($categorias as $categoria):?>
          <tr>
              <td><?php echo $categoria['nome']; ?></td>
              <td>
                    <a href="<?= base_url() ?>?c=categoria&m=excluir&id=<?= $categoria['idcategoria']; ?>" class='btn btn-danger'>Excluir</a>
                    <a href="<?= base_url() ?>?c=categoria&m=editar&id=<?= $categoria['idcategoria']; ?>" class='btn btn-primary'>Atualizar</a>
              </td>
          </tr>
          <?php endforeach;?>
      </tbody>
  </table>
</div>