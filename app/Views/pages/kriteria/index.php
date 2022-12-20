<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-3">
  <h1>Data Kriteria</h1>

  <div class="row mb-3">
    <div class="col">
      <a href="<?= base_url('kriteria/add') ?>" class="btn btn-primary">Tambah Data Kriteria</a>
    </div>
  </div>

  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Kriteria</th>
        <th>Tipe Kriteria</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach($getKriteria as $isi){?>
      <tr>
        <td><?= $no;?></td>
        <td><?= $isi['nama_kriteria'];?></td>
        <td><?= $isi['tipe'] == 'b' ? 'Benefit' : 'Cost' ;?></td>
        <td>
          <a href="<?= base_url('kriteria/edit/'.$isi['id_kriteria']);?>" class="btn btn-success">Edit</a>
          <a href="<?= base_url('kriteria/delete/'.$isi['id_kriteria']);?>" onclick="javascript:return confirm('Apakah ingin menghapus data Kriteria ?')" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      <?php $no++;} ?>
    <tfoot>
      <tr>
        <th>No</th>
        <th>Nama Kriteria</th>
        <th>Tipe Kriteria</th>
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