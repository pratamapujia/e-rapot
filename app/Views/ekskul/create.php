<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-6">
        <div class="card card-center card-info">
          <div class="card-header">
            <h4>Form Tambah Data Ekstrakurikuler</h4>
          </div>
          <form action="/ekskul/save" method="POST">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>ID Ekskul</label>
                  <input type="text" class="form-control" readonly name="id_ekskul" value="<?= $kode ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('id_ekskul'); ?>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label>Nama Ekskul</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_ekskul')) ? 'is-invalid' : ''; ?>" name="nama_ekskul" value="<?= old('nama_ekskul'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_ekskul'); ?>
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