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
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($getKaryawan as $isi) { ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $isi['nip']; ?></td>
          <td><?= $isi['nama']; ?></td>
          <td><?= $isi['jns_kel'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
          <td><?= $isi['no_hp']; ?></td>
          <td><?= $isi['alamat']; ?></td>
          <td>
            <a href="<?= base_url('karyawan/edit/' . $isi['id_karyawan']); ?>" class="btn btn-success">Edit</a>
            <a href="<?= base_url('karyawan/delete/' . $isi['id_karyawan']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data karyawan ?')" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      <?php $no++;
      } ?>
    <tfoot>
      <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No HP</th>
        <th>Alamat</th>
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