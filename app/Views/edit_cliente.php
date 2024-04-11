<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4 CRUD (Create, Read, Update and Delete) with Bootstrap and Datatables</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <style>
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container">
    <p>
    <h1>Editar Cliente</h1>
    </p>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <form method="post" id="update_user" name="update_user" action="<?= site_url('/update') ?>">
          <input type="hidden" name="id" id="id" value="<?php echo $cliente_obj['id']; ?>">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php echo $cliente_obj['nome']; ?>">
          </div>
          <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" value="<?php echo $cliente_obj['endereco']; ?>">
          </div>
          <div class="form-group">
            <label>Idade</label>
            <input type="number" name="idade" class="form-control" value="<?php echo $cliente_obj['idade']; ?>">
          </div>
          <div class="form-group">
            <label>Telefone</label>
            <input type="tel" name="telefone" class="form-control" id="telefone" value="<?php echo $cliente_obj['telefone']; ?>">
          </div>
          <div class="form-group">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control cpf" id="cpf" value="<?php echo $cliente_obj['cpf']; ?>">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $cliente_obj['email']; ?>">
          </div>

          <div class="form-group"> <br />
            <button type="submit" class="btn btn-info btn-block">Salvar</button>
            <a href="<?php echo site_url('/cliente-list') ?>" class="btn btn-secondary">Voltar</a>
          </div>
        </form>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    function mascaraTelefone(event) {
      let telefone = event.target.value.replace(/\D/g, '');
      if (telefone.length > 10) {
        event.target.value = telefone.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
      } else {
        event.target.value = telefone.replace(/^(\d{2})(\d{4})(\d{4}).*/, '($1) $2-$3');
      }
    }

    document.getElementById('telefone').addEventListener('input', mascaraTelefone);

    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          nome: {
            required: true,
          },
          email: {
            maxlength: 60,
            email: true,
          },
          cpf: {
            required: true,
            cpfBR: true,
          },
        },
        messages: {
          nome: {
            required: "Nome é obrigatório.",
          },
          email: {
            email: "Entre com um email valido.",
            maxlength: "O email pode ter no maximo 60 caracteres.",
          },
          cpf: {
            required: "O CPF é obrigatório.",
            cpfBR: "Entre com um CPF válido."
          },
        },
      });

      $.validator.addMethod("cpfBR", function(value, element) {
        value = jQuery.trim(value);

        value = value.replace('.', '');
        value = value.replace('.', '');
        cpf = value.replace('-', '');

        while (cpf.length < 11) cpf = "0" + cpf;
        var digito = null;
        var digito1 = null;
        var digito2 = null;
        var resto = null;
        var digito_verificado = null;
        digito1 = 0;
        digito2 = 0;

        for (i = 1; i <= 9; i++) digito1 = digito1 + parseInt(cpf.substring(i - 1, i)) * (11 - i);
        resto = (digito1 * 10) % 11;
        if ((resto == 10) || (resto == 11)) digito = 0;
        else digito = resto;

        if (digito != parseInt(cpf.substring(9, 10))) return false;

        digito2 = 0;
        for (i = 1; i <= 10; i++) digito2 = digito2 + parseInt(cpf.substring(i - 1, i)) * (12 - i);
        resto = (digito2 * 10) % 11;
        if ((resto == 10) || (resto == 11)) digito = 0;
        else digito = resto;

        if (digito != parseInt(cpf.substring(10, 11))) return false;

        return true;
      }, "CPF inválido.");
    }
  </script>
</body>

</html>