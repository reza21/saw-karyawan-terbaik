<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-3">
  <h1><?= $title; ?></h1>
  <form method="post" action="<?= base_url('periode/update'); ?>">
    <input type="hidden" value="<?= $periode->id_periode; ?>" name="id_periode">
    <div class="row mb-3">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Tahun Periode</label>
          <input type="text" class="form-control" name="tahun" value="<?= $periode->tahun; ?>" required>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="reset" class="btn btn-secondary">Batal</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>

<?= $this->endSection() ?>