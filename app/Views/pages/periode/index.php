<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-3">
  <h1>Data Periode</h1>

  <div class="row mb-3">
    <div class="col">
      <a href="<?= base_url('periode/add') ?>" class="btn btn-primary">Tambah Data Periode</a>
    </div>
  </div>

  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Periode</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>2022</td>
        <td>
          <a href="#">Edit</a>
          <a href="#">Hapus</a>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>2021</td>
        <td>
          <a href="#">Edit</a>
          <a href="#">Hapus</a>
        </td>
      </tr>
    <tfoot>
      <tr>
        <th>No</th>
        <th>Periode</th>
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