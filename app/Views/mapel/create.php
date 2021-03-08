<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-6">
        <div class="card card-info">
          <div class="card-header">
            <h4>Form Tambah Data Kelas</h4>
          </div>
          <form action="/mapel/save" method="POST">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>ID Mapel</label>
                  <input type="text" class="form-control" readonly name="id_mapel" value="<?= $kode; ?>">
                </div>
                <div class="form-group col-md-12">
                  <label>Jenis Mata Pelajaran</label>
                  <select class="form-control" name="jenis_mapel">
                    <option value="Umum">Umum</option>
                    <option value="Mulok">Mulok</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>Nama Mapel</label>
                  <input type="text" class="form-control" name="nama_mapel">
                </div>
                <div class="form-group col-md-12">
                  <label>Singkatan</label>
                  <input type="text" class="form-control" name="singkatan">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>