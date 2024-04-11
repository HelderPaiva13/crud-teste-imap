<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> CRUD</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  <style>
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }

    .my-custom-section {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .footer {
      margin-top: 1rem;
      border-radius: 5px;
      background-color: #343a40;
      color: #ffffff;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container mt-4">
    <div class="my-custom-section">
      <h2>Minha Seção Personalizada</h2>
      <p>Algum texto de introdução ou outras informações.</p>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
    }
    ?>
    <?= $this->renderSection('content') ?>

    <footer class="footer">
      <div class="container">
        <p>Meu LinkedIn: <a href="https://www.linkedin.com/seu-perfil" target="_blank">Seu Perfil</a></p>
        <p>Meu GitHub: <a href="https://github.com/seu-usuario" target="_blank">Seu Usuário</a></p>
        <p>Email: seu-email@example.com</p>
      </div>
    </footer>
  </div>



</body>

</html>