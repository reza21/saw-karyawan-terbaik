<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-3">
  <h1>Data Karyawan</h1>

  <div class="row mb-3">
    <div class="col">
      <a href="<?= base_url('karyawan/add') ?>" class="btn btn-primary">Tambah Data Karyawan</a>
    </div>
  </div>

  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No HP</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>0123456789</td>
        <td>Agus</td>
        <td>Laki-laki</td>
        <td>085645465564</td>
        <td>
          <a href="#">Edit</a>
          <a href="#">Hapus</a>
        </td>
      </tr>
      <tr>
      <td>1</td>
        <td>0123456789</td>
        <td>Agus</td>
        <td>Laki-laki</td>
        <td>085645465564</td>
        <td>
          <a href="#">Edit</a>
          <a href="#">Hapus</a>
        </td>
      </tr>
      <tr>
      <td>1</td>
        <td>0123456789</td>
        <td>Agus</td>
        <td>Laki-laki</td>
        <td>085645465564</td>
        <td>
          <a href="#">Edit</a>
          <a href="#">Hapus</a>
        </td>
      </tr>
      <tr>
      <td>1</td>
        <td>0123456789</td>
        <td>Agus</td>
        <td>Laki-laki</td>
        <td>085645465564</td>
        <td>
          <a href="#">Edit</a>
          <a href="#">Hapus</a>
        </td>
      </tr>
    <tfoot>
      <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No HP</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
</div>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

<?= $this->endSection() ?>