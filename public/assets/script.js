function mascaraTelefone(event) {
  let telefone = event.target.value.replace(/\D/g, '');
  if (telefone.length > 10) {
    event.target.value = telefone.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
  } else {
    event.target.value = telefone.replace(/^(\d{2})(\d{4})(\d{4}).*/, '($1) $2-$3');
  }
}

document.getElementById('telefone').addEventListener('input', mascaraTelefone);

if ($("#add_create").length > 0) {
  $("#add_create").validate({
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