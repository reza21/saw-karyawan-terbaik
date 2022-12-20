<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('karyawan') ?>">Data Karyawan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('kriteria') ?>">Kriteria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('periode') ?>">Periode</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('kriteriaperiode') ?>">Kriteria - Periode</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('') ?>">Perhitungan &amp; Hasil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('') ?>">Laporan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>