<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-3">
  <h1><?= $title; ?></h1>
  <form method="post" action="<?= base_url('kriteria/update'); ?>">
    <input type="hidden" value="<?= $kriteria->id_kriteria; ?>" name="id_kriteria">
    <div class="row mb-3">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Nama Kriteria</label>
          <input type="text" class="form-control" name="nama_kriteria" value="<?= $kriteria->nama_kriteria; ?>" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Tipe Kriteria</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioTipe" id="radioTipe1" value="b" <?php echo $kriteria->tipe == 'b' ? 'checked' : ''; ?>>
            <label class="form-check-label" for="radioTipe1">
              Benefit
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioTipe" id="radioTipe2" value="c" <?php echo $kriteria->tipe == 'c' ? 'checked' : ''; ?>>
            <label class="form-check-label" for="radioTipe2">
              Cost
            </label>
          </div>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Edit Data</button>
          <button type="reset" class="btn btn-secondary">Batal</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>

<?= $this->endSection() ?>