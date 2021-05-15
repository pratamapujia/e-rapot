<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-6">
        <div class="card card-info">
          <div class="card-header">
            <h4>Form Ubah Data Ekskul</h4>
          </div>
          <form action="<?= base_url(); ?>/ekskul/update/<?= $ekskul['id_ekskul']; ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>ID Ekskul</label>
                  <input type="text" class="form-control" name="id_ekskul" value="<?= $ekskul['id_ekskul'] ?>" readonly>
                  <!-- <div class="invalid-feedback">
                    </?= $validation->getError('id_ekskul'); ?>
                  </div> -->
                </div>
                <div class="form-group col-md-12">
                  <label>Nama Ekskul</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_ekskul')) ? 'is-invalid' : ''; ?>" name="nama_ekskul" value="<?= (old('nama_ekskul')) ? old('nama_ekskul') : $ekskul['nama_ekskul'] ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_ekskul'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>