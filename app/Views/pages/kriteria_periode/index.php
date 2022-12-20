<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-3">
  <h1>Data Kriteria Tiap Periode</h1>
  <br>
  
  <div class="row">
    <div class="col-3">
      <div class="card">
        <div class="card-header">
          Periode
        </div>
        <div class="card-body">
          <h5 class="card-title">Pilih Periode</h5>
          <div class="card-text">
            <form method="post" action="<?= base_url('kriteriaperiode'); ?>">
              <div>
                <select class="form-control form-select" name="id_periode" required>
                  <option value="">== Pilih Periode ==</option>
                  <?php foreach ($getPeriode as $isi) { ?>
                    <option value="<?= $isi['id_periode'] ?>" <?= isset($getPeriodeTerpilih) && ($getPeriodeTerpilih->id_periode == $isi['id_periode']) ? 'selected' : ''; ?>><?= $isi['tahun'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <br>
              <div>
                <button class="form-control btn btn-primary">Pilih Periode</button>
                <br><br>
                <a href="<?= base_url('kriteriaperiode') ?>" class="form-control btn btn-warning">Reset Pilihan</a>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="card">
        <div class="card-header">
          Kriteria
        </div>
        <div class="card-body">
          <h5 class="card-title">Silakan Isi Pembobotan Kriteria di Periode Terpilih <?= isset($getPeriodeTerpilih) ? $getPeriodeTerpilih->tahun : ''; ?></h5>
          <div class="card-text">
            <form method="post" action="<?= base_url('kriteriaperiode/save'); ?>">
              <input type="hidden" value="<?= isset($getPeriodeTerpilih) ? $getPeriodeTerpilih->id_periode : ''; ?>" name="id_periode">
              <?php $total = 0;
              foreach ($getKriteria as $isiKriteria) {
                $bobot = 0; 
                if(isset($getPeriodeTerpilih)){
                  $bobotCek = $getModelKriteriaPeriode->cekKriteriaPeriode($isiKriteria['id_kriteria'], $getPeriodeTerpilih->id_periode)->get()->getRow();
                  if($bobotCek != null){
                    $bobot = $bobotCek->bobot;
                  }
                }
                ?>
                <input type="hidden" value="<?= $isiKriteria['id_kriteria']; ?>" name="id_kriteria[]">
                <div class="mb-3 row">
                  <label for="staticEmail" class="col-sm-3 col-form-label"><?= $isiKriteria['nama_kriteria'] ?></label>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" name="bobot[]" value="<?php echo $bobot ?>" >
                  </div>
                  <div class="col-sm-1"><span class="input-group-text" id="basic-addon2">%</span></div>
                  <div class="col-sm-2"><span class="input-group-text" id="basic-addon2"><?= $isiKriteria['tipe'] == 'b' ? 'Benefit' : 'Cost'; ?></span></div>
                </div>
              <?php } ?>

              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label"><b>TOTAL</b></label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" value="<?= $total; ?>" readonly>
                </div>
                <div class="col-sm-1"><span class="input-group-text" id="basic-addon2">%</span></div>
              </div>

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                  <button class="btn btn-primary" <?= isset($getPeriodeTerpilih) ? '' : 'disabled'; ?> >Simpan</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>


</div>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

<?= $this->endSection() ?>