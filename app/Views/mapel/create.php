<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-6">
        <div class="card card-info">
          <div class="card-header">
            <h4>Form Tambah Data Mapel</h4>
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
                  <select class="form-control <?= ($validation->hasError('jenis_mapel')) ? 'is-invalid' : ''; ?>" name="jenis_mapel">
                    <option value=""> Pilih </option>
                    <option value="Umum">Umum</option>
                    <option value="Mulok">Mulok</option>
                  </select>
                  <div class="invalid-feedback">
                    <?= $validation->getError('jenis_mapel'); ?>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label>Nama Mapel</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_mapel')) ? 'is-invalid' : ''; ?>" name="nama_mapel">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_mapel'); ?>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label>Singkatan</label>
                  <input type="text" class="form-control <?= ($validation->hasError('singkatan')) ? 'is-invalid' : ''; ?>" name="singkatan">
                  <div class="invalid-feedback">
                    <?= $validation->getError('singkatan'); ?>
                  </div>
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