<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>



<div class="container mt-3 mb-3">
  <h1>Input Data Karyawan</h1>
  <form>
    <div class="row mb-3">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">NIP</label>
          <input type="text" class="form-control" placeholder="Input NIP">
        </div>
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" placeholder="Input Nama">
        </div>
        <div class="mb-3">
          <label class="form-label">Jenis Kelamin</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
              laki-laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
              Perempuan
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">No HP</label>
          <input type="text" class="form-control" placeholder="Input No HP">
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