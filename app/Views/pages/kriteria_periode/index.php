<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-3">
  <h1>Data Kriteria Tiap Periode</h1>
  <br>
  <!-- <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Periode</th>
        <th>Kriteria-kriteria</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>2021</td>
        <td>Kriteria 1 (Benefit), <br>Kriteria 2 (Benefit), Kriteria 3 (Benefit), Kriteria 4 (Cost)</td>
        <td>
          <a href="<?= base_url('kriteriaperiode/setting/1') ?>">Setting</a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>2022</td>
        <td>Kriteria 1 (Benefit), Kriteria 2 (Benefit), Kriteria 3 (Benefit), Kriteria 4 (Cost)</td>
        <td>
          <a href="<?= base_url('kriteriaperiode/setting/2') ?>">Setting</a>
        </td>
      </tr>
    <tfoot>
      <tr>
        <th>No</th>
        <th>Nama Kriteria</th>
        <th>Tipe Kriteria</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table> -->
  <div class="row">
    <div class="col-3">
      <div class="card">
        <div class="card-header">
          Periode
        </div>
        <div class="card-body">
          <h5 class="card-title">Pilih Periode</h5>
          <div class="card-text">
            <form>
              <div>
                <select class="form-control form-select">
                  <option>2021</option>
                </select>
              </div>
              <br>
              <div>
                <button class="form-control btn btn-primary btn-large">Pilih</button>
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
          <h5 class="card-title">Silakan Isi Pembobotan Kriteria di Periode Terpilih</h5>
          <div class="card-text">
            <form>
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Kriteria 1</label>
                <div class="col-sm-6">
                  <input type="number" class="form-control">
                </div>
                <div class="col-sm-1"><span class="input-group-text" id="basic-addon2">%</span></div>
                <div class="col-sm-2"><span class="input-group-text" id="basic-addon2">Benefit</span></div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Kriteria 2</label>
                <div class="col-sm-6">
                  <input type="number" class="form-control">
                </div>
                <div class="col-sm-1"><span class="input-group-text" id="basic-addon2">%</span></div>
                <div class="col-sm-2"><span class="input-group-text" id="basic-addon2">Cost</span></div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                  <button class="btn btn-primary">Simpan</button>
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