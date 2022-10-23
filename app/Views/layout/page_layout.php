<!DOCTYPE html>
<html lang="en" class="h-100"> <!-- class agar footer sticky di bawah -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Protal Berita Codeigniter</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

</head>

<!-- class agar footer sticky di bawah -->
<body class="d-flex flex-column h-100">

  <?= $this->include('layout/navbar') ?>
  <?= $this->include('layout/header') ?>

  <?= $this->renderSection('content') ?>

  <?= $this->include('layout/footer') ?>

  <!-- Jquery dan Bootsrap JS -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>