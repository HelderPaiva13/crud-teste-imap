  <?= $this->extend('layout') ?>

  <?= $this->section('content'); ?>

  <div class="d-flex justify-content-end">
    <a href="<?php echo site_url('/cliente-form') ?>" class="btn btn-success mb-2">Adicionar Cliente</a>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-striped" id="cliente-list">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Endereco</th>
          <th>Idade</th>
          <th>Telefone</th>
          <th>CPF</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($clientes) : ?>
          <?php foreach ($clientes as $cliente) : ?>
            <tr>
              <td><?php echo $cliente['id']; ?></td>
              <td><?php echo $cliente['nome']; ?></td>
              <td><?php echo $cliente['endereco']; ?></td>
              <td><?php echo $cliente['idade']; ?></td>
              <td><?php echo $cliente['telefone']; ?></td>
              <td><?php echo $cliente['cpf']; ?></td>
              <td><?php echo $cliente['email']; ?></td>
              <td>
                <a href="<?php echo base_url('edit-view/' . $cliente['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="<?php echo base_url('delete/' . $cliente['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#cliente-list').DataTable();
    });
  </script>
  <?= $this->endSection() ?>