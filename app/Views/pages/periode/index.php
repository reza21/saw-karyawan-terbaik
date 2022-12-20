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
      <?php $no = 1;
      foreach ($getPeriode as $isi) { ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $isi['tahun']; ?></td>
          <td>
            <a href="<?= base_url('periode/edit/' . $isi['id_periode']); ?>" class="btn btn-success">Edit</a>
            <a href="<?= base_url('periode/delete/' . $isi['id_periode']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data Periode ?')" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      <?php $no++;
      } ?>
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