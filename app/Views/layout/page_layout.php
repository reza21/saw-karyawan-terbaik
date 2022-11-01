<!DOCTYPE html>
<html lang="en" class="h-100"> <!-- class agar footer sticky di bawah -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPK Karyawan Terbaik</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('css/dataTables.bootstrap5.min.css') ?>" />

  <!-- Jquery dan Bootsrap JS -->
  <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</head>

<!-- class agar footer sticky di bawah -->
<body class="d-flex flex-column h-100">

  <?= $this->include('layout/navbar') ?>
  <?= $this->include('layout/header') ?>

  <?= $this->renderSection('content') ?>

  <?= $this->include('layout/footer') ?>

  
  <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('js/dataTables.bootstrap5.min.js') ?>"></script>

</body>

</html>