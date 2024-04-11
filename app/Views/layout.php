<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> CRUD</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  <style>
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }

    .my-custom-section {
      background-color: #50abe4;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
      color: #ffffff;
    }

    .footer {
      margin-top: 1rem;
      border-radius: 5px;
      background-color: #c1c1c1;
      color: black;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>

<body style="background-color: #f5f5f5;">
  <div class="container mt-4">
    <div class="my-custom-section">
      <h2>Teste Técnico IMAP</h2>
      <p>CRUD - PHP, Codeigniter, Bootstrap e MySql.</p>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
    }
    ?>
    <?= $this->renderSection('content') ?>

    <footer class="footer">
      <div class="container">
        <p>Linkedin: <a href="https://www.linkedin.com/in/helderpaiva13" target="_blank"><i class="fab fa-linkedin"></i></a></p>
        <p>GitHub: <a href="https://github.com/HelderPaiva13" target="_blank"><i class="fab fa-github"></i></a></p>
        <p>Email: helder.devjava@gmail.com <i class="fas fa-envelope"></i></p>
      </div>
    </footer>
  </div>



</body>

</html>